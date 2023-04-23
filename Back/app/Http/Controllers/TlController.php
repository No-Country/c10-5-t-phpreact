<?php

namespace App\Http\Controllers;

use App\Http\Resources\Profile\ProfileCollection;
use Illuminate\Http\Request;
use App\Models\Profile\Profile;
use Spatie\Permission\Models\Role;

class TlController extends Controller
{
    public function index()
    {
        $role = Role::findById(2);
        $profiles = Profile::whereHas('roles', function ($query) use ($role) {
            $query->where('id', $role->id);
        })->with(['teams', 'teams.profiles.roles'])->get();

        return new ProfileCollection($profiles);
    }
}
