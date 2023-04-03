<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;
use App\Models\ModelHasPermission;


class Permission extends Model
{
    use HasFactory;

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_has_permissions');
    }

    
    public function modelHasPermissions()
    {
        return $this->hasMany(ModelHasPermissions::class);
    }
}
