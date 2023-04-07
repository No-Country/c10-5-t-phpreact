<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
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
    }
}
