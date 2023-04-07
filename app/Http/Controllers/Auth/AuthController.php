<?php

namespace App\Http\Controllers\Auth;

use Exception;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Form\FormRegister;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Jobs\RegisterInstructionsJob;
use App\Services\JsonResponseService;
use App\Http\Requests\Auth\LoginRequest;
use App\Jobs\ResetPasswordInstructionsJob;
use App\Http\Requests\Auth\FormUserRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\ResetPassword;
use App\Http\Requests\Auth\ForgetPasswordRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AuthController extends Controller
{
    /**
     * se pasan los datos del posible usuario a usuario
     *
     * @param FormUserRequest $request
     * @param JsonResponseService $response
     * @return JsonResponse
     * 
     * @throws ModelNotFoundException si el usuario no es encontrado por su id
     * @throws Exception si ocurre un error inesperado
     */
    public function FormUser(FormUserRequest $request, JsonResponseService $response): JsonResponse
    {
        try {
            $formRegisterId = $request->input('form_register_id');

            $formRegisterData = FormRegister::select('name', 'lastname', 'email')->findOrFail($formRegisterId);

            $rememberToken = $this->genarateToken();

            $user = $this->createUser($formRegisterData, $rememberToken);

            RegisterInstructionsJob::dispatch($user);

            return $response->authSucces('creado');
        } catch (ModelNotFoundException $e) {
            return $response->ModelError($e->getMessage(), "id formRegister");
        } catch (\Exception $e) {
            return $response->errorResponse($e->getMessage(), 500);
        }
    }
     /**
      * retorna un token
      *
      * @return string
      */
    private function genarateToken(): string{
        return Str::random(15);
    }

    /**
     * se obtiene un usuario por su columna
     *
     * @param string $token
     * @return User
     */
    private function getUserColumn( string $column, string $value): User {
       return  User::where( $column, $value)->firstOrFail();
    }


    /**
     * Crea un nuevo registro en database sin el password para que el usuario la agregue
     *
     * @param object $formData Datos del usuario a crear
     * @param string $rememberToken Token de recordar contraseña
     * @return \App\Models\User Usuario creado
     */
    private function createUser(object $formData, string $rememberToken)
    {
        return User::create([
            'name' => $formData->name,
            'lastname' => $formData->lastname,
            'email' => $formData->email,
            'remember_token' => $rememberToken,
            'email_verified_at' => now()
        ]);
    }

    /**
     * se retorta el email del ususario para que pueda agregar una contraseña
     *
     * @param Request $request
     * @param JsonResponseService $response
     * @return JsonResponse
     * 
     * @throws ModelNotFoundException si el usuario no es encontrado por su remember_token
     * @throws Exception si ocurre un error inesperado
     */
    public function registerGet(Request $request, JsonResponseService $response): JsonResponse
    {
        try {
            $token = $request->input('token');

            $user = $this->getUserColumn("remember_token", $token);

            $email = $user->email;

            return response()->json(["email" => $email]);
        } catch (ModelNotFoundException $e) {
            return $response->ModelError($e->getMessage(), "token");
        } catch (\Exception $e) {
            return $response->errorResponse($e->getMessage(), 500);
        }
    }
    /**
     * se guarda la contraseña del usuario en la base de datos
     *
     * @param RegisterRequest $request
     * @param JsonResponseService $response
     * @return JsonResponse
     *
     * @throws ModelNotFoundException si el usuario no es encontrado por su remember_token
     * @throws Exception si ocurre un error inesperado
     */
    
    public function registerPost(RegisterRequest $request, JsonResponseService $response): JsonResponse
    {
        try {
            $token = $request->input('token');

            $user = $this->getUserColumn("remember_token", $token);

            $user->remember_token = "";
            $user->password = bcrypt($request->input('password'));
            $user->email_verified_at = now();
            $user->save();

            return $response->authSucces('registrado');
        } catch (ModelNotFoundException $e) {
            return $response->ModelError($e->getMessage(), "token");
        } catch (\Exception $e) {
            return $response->errorResponse($e->getMessage(), 500);
        }
    }

    /**
     * login del usuario
     *
     * @param LoginRequest $request
     * @param JsonResponseService $response
     * @return JsonResponse
     *
     * @throws Exception si ocurre un error inesperado
     */
    public function login(LoginRequest $request, JsonResponseService $response): JsonResponse
    {
        try {
            $email = $request->input('email');
            $password = $request->input('password');

            if (!Auth::validate(['email' => $email, 'password' => $password])) {
                return response()->json(['error' => 'Credenciales incorrectas, vuelve a intentarlo']);
            };

            $user = $this->getUserColumn("email", $email);

            $token = $user->createToken('auth_token')->plainTextToken;

            return $response->authSucces('secion iniciada', $token);
        } catch (\Exception $e) {
            return $response->errorResponse($e->getMessage(), 500);
        }
    }
    /**
     * cambia la contraseña del usuario
     *
     * @param ForgetPasswordRequest $request
     * @param JsonResponseService $response
     * @return JsonResponse
     * 
     * @throws ModelNotFoundException si el usuario no es encontrado por su email
     * @throws Exception si ocurre un error inesperado
     */
    public function forgetPassword(ForgetPasswordRequest $request, JsonResponseService $response): JsonResponse
    {
        try {
            $email = $request->input('email');

            $user = $this->getUserColumn("email", $email);

            $user->remember_token = $this->genarateToken();

            $user->save();

            ResetPasswordInstructionsJob::dispatch($user);

            return response()->json(['message' => 'revisa tu email para poder cambiar tu contraseña']);
        } catch (ModelNotFoundException $e) {
            return $response->ModelError($e->getMessage(), "email");
        } catch (\Exception $e) {
            return $response->errorResponse($e->getMessage(), 500);
        }
    }
    /**
     * Se recibe el token correcto para poder cambiar el token
     *
     * @param CodeResetPassword $request
     * @param JsonResponseService $response
     * @return JsonResponse
     * 
     * @throws ModelNotFoundException si el usuario no es encontrado por su token
     * @throws Exception si ocurre un error inesperado
     */
    public function resetPassword(ResetPassword $request, JsonResponseService $response): JsonResponse
    {
        try {
            $token = $request->input('token');

            if (!$user = $this->getUserColumn("remember_token", $token)) {
                return response()->json(['message' => 'Token incorrecto, vuelve a intentarlo']);
            }

            $user->password = "";

            $user->remember_token = "";

            $user->password =  bcrypt($request->input('newPassword'));

            $user->email_verified_at =  now();

            $user->save();

            return $response->authSucces('contraseña cambiada');
        } catch (ModelNotFoundException $e) {
            return $response->ModelError($e->getMessage(), "token");
        } catch (\Exception $e) {
            return $response->errorResponse($e->getMessage(), 500);
        }
    }
    
    /** Se recibe el token correcto para poder cambiar el token
     *
     * @param JsonResponseService $response
     * @return JsonResponse
     * 
     * @throws Exception si ocurre un error inesperado
     */
    public function userProfile(JsonResponseService $response): JsonResponse
    {
        try {
            return response()->json([
                'message' => 'profile',
                'data' => auth()->user()
            ]);
        } catch (\Exception $e) {
            return $response->errorResponse($e->getMessage(), 500);
        }
    }
    public function logout(JsonResponseService $response): JsonResponse
    {
        try {
            auth()->user()->tokens()->delete();
            return $response->authSucces('secion cerrada');
        } catch (\Exception $e) {
            return $response->errorResponse($e->getMessage(), 500);
        }
    }
}
