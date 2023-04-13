<?php

namespace App\Repositories;


use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Form\FormRegister;
use Illuminate\Support\Facades\Auth;

class AuthRepository extends BaseRepository
{      
    protected $user;
    
    public function __construct(User $user)
    {   
        parent::__construct($user);
    }

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

    private function genarateToken(): string
    {
        return Str::random(15);
    }

 

    public  function getFormId($id)
    {
        $formRegisterData = FormRegister::select('name', 'lastname', 'email')->findOrFail($id);

        $rememberToken = $this->genarateToken();

        return $this->createUser($formRegisterData, $rememberToken);
    }

    public  function getEmail($token)
    {
        $user = $this->where("remember_token", $token);

        $email = $user->email;

        return $email;  
    }

    public  function putPassword($token, $password)
    {
        $user = $this->where("remember_token", $token);

        $user->remember_token = "";
        $user->password = bcrypt($password);
        $user->email_verified_at = now();
        $user->save();
    }

    public  function login($email, $password)
    {
        if (!Auth::validate(['email' => $email, 'password' => $password])) {
            return response()->json(['error' => 'Credenciales incorrectas, vuelve a intentarlo']);
        };

        $user = $this->where("email", $email);

        $tokenLogin = $user->createToken('auth_token')->plainTextToken;

        return $tokenLogin;
    }

    public  function forgetPassword($email)
    {
        $user = $this->where("email", $email);

        $user->remember_token = $this->genarateToken();

        $user->save();

        return $user;
    }

    public  function resetPassword($token, $newPassword)
    {
        
        if (!$user = $this->where("remember_token", $token)) {
            return response()->json(['message' => 'Token incorrecto, vuelve a intentarlo']);
        }

        $user->password = "";

        $user->remember_token = "";

        $user->password =  bcrypt($newPassword);

        $user->email_verified_at =  now();

        $user->save();
    }
}
