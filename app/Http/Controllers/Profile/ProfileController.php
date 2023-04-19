<?php

namespace App\Http\Controllers\Profile;

use App\Models\User;
use App\Models\Profile\Profile;
use App\Http\Controllers\Controller;
use App\Http\Resources\Profile\ProfileResource;
use App\Http\Resources\UserCollection;

class ProfileController extends Controller
{
    public function userAll()
    {
        $users = User::all();
        
        $user = new UserCollection($users);
        
        return response()->json($user);
    }


    public function userOnly(int $id)
    {   
        $profile = Profile::where('user_id', $id)->first();

        $userProifile = new ProfileResource($profile);

        return response()->json($userProifile);
    }

    public function userProfile()
    {
        try {   
            $user = auth()->user();

            $profile = Profile::where('user_id', $user->id)->first();

            $userProfile = new ProfileResource($profile);
            
            return response()->json([
                'user' => $user,
                'datos' =>  $userProfile
            ]);
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage(), 500);
        }
    }

    public function logout()
    {
        try {
            auth()->user()->tokens()->delete();
            return $this->response->success('secion cerrada');
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage(), 500);
        }
    }
}
