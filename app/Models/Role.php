<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Permission;
use App\Models\ModelHasRole;

class Role extends Model
{
    use HasFactory;

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'role_has_permissions');
    }

    public function modelHasRoles()
    {
        return $this->hasMany(ModelHasRole::class);
    }


}
