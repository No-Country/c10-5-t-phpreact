<?php

namespace App\Http\Controllers\Profile;

use App\Models\Team;
use App\Models\User;
use App\Models\Profile\Profile;
use App\Http\Controllers\Controller;
use App\Http\Resources\Profile\ProfileCollection;
use App\Http\Resources\UserCollection;
use App\Http\Resources\Profile\ProfileResource;

class ProfileController extends Controller
{
    public function userAll()
    {
        $users = Profile::all();

        $user = new ProfileCollection($users);

        return response()->json($user);
    }


    public function userOnly(int $id)
    {
        $profile = Profile::where('user_id', $id)->firstOrFail();
        $user = User::where('id', $profile->user_id)->first();

        $profile = new ProfileResource($profile);

        return response()->json([
            'user' => $user,
            'datos' =>  $profile
        ]);
    }

    public function userProfile()
    {
        try {
            $user = auth()->user();

            $profile = Profile::where('user_id', $user->id)->first();

            $userProfile = new ProfileResource($profile);

            return response()->json([
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
