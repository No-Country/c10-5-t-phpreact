<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Form\FormRegister;
use App\Http\Controllers\Controller;
use App\Jobs\WelcomeInstructionsJob;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;

class AuthController extends Controller
{
    public function FormUser(Request $request)
    {
        // se recibe el id de los datos que envio el posible usurario para converilo a un usuario de la plataforma
        $id = $request->input('form_register_id');
        // se busca los datos como el email, los otros datos luis felipe los agregara mas adelante
        $userForm = FormRegister::select('name', 'lastname', 'email')->find($id);
        // se crea el remenbertoken
        $remember_token = Str::random(15);
        //se recibe el email y el nombre para crear al usuraio y que este agregue su contraseña mediante un token, etc
        User::create(['name' => $userForm->name, 'lastname' => $userForm->lastname, 
        'email' => $userForm->email, 'remember_token' => $remember_token, 'email_verified_at' => null]);

        WelcomeInstructionsJob::dispatch($userForm, $remember_token);

        return response()->json([
            "msg" => "successfully"
        ], 201);
    }

    public function registerGet(Request $request)
    {
        // se recibe el token del usuario al que se le envio el email con el link para su registro
        $token_user = $request->input('remember_token');
        // se busca el usuario por el token
        $remember_token_user = User::where('remember_token', $token_user)->first();

        // se valida que el usuario tenga el mismo token que recibio
        if (!$token_user === $remember_token_user) {
            return response()->json(['message' => 'Token Incorrect, vuelve a intentarlo']);
        }
        // se busca email del usuario para que se ponga automaticamente o tambien puede ser 
        $email = $remember_token_user->email;

        return response()->json(['email_user' => $email]);
    }
    public function registerPost(Request $request,)
    {
        // se recibe el id o token del usuario al que se le envio el email con el link para su registro
        $token_password = $request->input('token_password');
        // se busca el usuario por el token
        $user = User::where('remember_token', $token_password)->first();

        $user->remember_token = "";
        $user->password = bcrypt($request->input('password'));
        $user->email_verified_at = now();
        $user->save();

        return response()->json([
            "return" => "login",
            "msg" => "Registrado correctamente",
        ], 201);
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        if (!Auth::attempt(['email' => $email, 'password' => $password])) {
            return response()->json(['message' => 'Credencials Incorrect']);
        }

        $user = Auth::user();

        $token =  $user->createToken("auth_token")->plainTextToken;
        return response()->json([
            'message' => 'successfully',
            "access_token" => $token
        ]);
     }
    // public function resetPassword(Request $request)
    // {
    //     $user = Auth::user();
    //     // $email = $user->email;
    //     $codigo_str = Str::random(10);
    //     WelcomeInstructionsJob::dispatch($user, $codigo_str)->response()->json([
    //         "msg" => "busca el codigo en tu email"
    //     ], 201);


    //     $codigo = $request->input('codigo');
    //     if (!$codigo === $codigo_str) {
    //         return response()->json(['message' => 'Codigo Incorrect, vueleve a intentarlo']);
    //     }

    //     $user->password =  bcrypt($user->password);



    //     // ::where('codigo', $codigo)->get();
    //     // $userForm = FormRegister::select('name', 'lastname', 'email')->find($user->id);

    //     return response()->json([
    //         'message' => 'profile',
    //         'data' => auth()->user()
    //     ]);
    // }
    public function userProfile()
    {
        return response()->json([
            'message' => 'profile',
            'data' => auth()->user()
        ]);
    }
    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response()->json([
            'message' => 'logout',
        ]);
    }
}
