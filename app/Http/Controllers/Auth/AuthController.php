<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\repositories\AuthRepository;
use Illuminate\Http\JsonResponse;
use App\Jobs\RegisterInstructionsJob;
use App\Http\Requests\Auth\LoginRequest;
use App\Jobs\ResetPasswordInstructionsJob;
use App\Http\Requests\Auth\FormUserRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\ResetPasswordRequest;
use App\Http\Requests\Auth\ForgetPasswordRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AuthController extends Controller
{   
    private $authRepository;

    public function __construct(AuthRepository $authRepository)
    {
        parent::__construct(); // llamada al constructor del controlador padre
        $this->authRepository = $authRepository;
    }

    public function FormUser(FormUserRequest $request)
    {
        try {
            $id = $request->form_register_id;

            $user = $this->authRepository->getFormId($id);

            RegisterInstructionsJob::dispatch($user);

            return $this->response->success('creado');
        } catch (ModelNotFoundException $e) {
            return $this->response->ModelError($e->getMessage(), "token");
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage(), 500);
        }
    }

    /**
     * se retorta el email del ususario para que pueda agregar una contraseña
     *
     * @param Request $request
     * @return JsonResponse
     * 
     * @throws ModelNotFoundException si el usuario no es encontrado por su remember_token
     * @throws Exception si ocurre un error inesperado
     */
    
    public function registerGet(Request $request): JsonResponse
    {
        try { 
            $token = $request->token;

            $email = $this->authRepository->getEmail($token);
            
            return $this->response->showData('email', $email);
        } catch (ModelNotFoundException $e) {
            return $this->response->ModelError($e->getMessage(), "token");
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage(), 500);
        }
    }

    /**
     * se guarda la contraseña del usuario en la base de datos
     *
     * @param RegisterRequest $request
     * @return JsonResponse
     *
     * @throws ModelNotFoundException si el usuario no es encontrado por su remember_token
     * @throws Exception si ocurre un error inesperado
     */

    public function registerPost(RegisterRequest $request): JsonResponse
    {
        try {
            $token = $request->token;
            $password = $request->password;

            $this->authRepository->putPassword($token, $password);

            return $this->response->success('registrado');
        } catch (ModelNotFoundException $e) {
            return $this->response->ModelError($e->getMessage(), "token");
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage(), 500);
        }
    }

    /**
     * login del usuario
     *
     * @param LoginRequest $request
     * @return JsonResponse
     *
     * @throws Exception si ocurre un error inesperado
     */
    public function login(LoginRequest $request): JsonResponse
    {
        try {
            $email = $request->email;
            $password = $request->password;

            $tokenLogin = $this->authRepository->login($email, $password);

            return $this->response->success('secion iniciada', $tokenLogin);
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage(), 500);
        }
    }

    /**
     * cambia la contraseña del usuario
     *
     * @param ForgetPasswordRequest $request
     * @return JsonResponse
     * 
     * @throws ModelNotFoundException si el usuario no es encontrado por su email
     * @throws Exception si ocurre un error inesperado
     */

    public function forgetPassword(ForgetPasswordRequest $request): JsonResponse
    {
        try {
            
            $email = $request->email;

            $user = $this->authRepository->forgetPassword($email);

            ResetPasswordInstructionsJob::dispatch($user);

            return response()->json(['message' => 'revisa tu email para poder cambiar tu contraseña']);
        } catch (ModelNotFoundException $e) {
            return $this->response->ModelError($e->getMessage(), "email");
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage(), 500);
        }
    }

    /**
     * Se recibe el token correcto para poder cambiar el token
     *
     * @param ResetPasswordRequest $request
     * @return JsonResponse
     * 
     * @throws ModelNotFoundException si el usuario no es encontrado por su token
     * @throws Exception si ocurre un error inesperado
     */

    public function resetPassword(ResetPasswordRequest $request,): JsonResponse
    {
        try {
            $token = $request->token;
            $newPassword = $request->new_password;

            $this->authRepository->resetPassword($token, $newPassword);

            return $this->response->success('contraseña cambiada');
        } catch (ModelNotFoundException $e) {
            return $this->response->ModelError($e->getMessage(), "token");
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage(), 500);
        }
    }

    /** Se recibe el token correcto para poder cambiar el token
     *
     * @return JsonResponse
     * 
     * @throws Exception si ocurre un error inesperado
     */

    public function userProfile(): JsonResponse
    {
        try {
            return response()->json([
                'message' => 'profile',
                'data' => auth()->user()
            ]);
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage(), 500);
        }
    }
    
    public function logout(): JsonResponse
    {
        try {
            auth()->user()->tokens()->delete();
            return $this->response->success('secion cerrada');
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage(), 500);
        }
    }
}

