<?php

namespace App\Models\Form;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleStack extends Model
{
    use HasFactory;

    protected $table = 'role_stacks';

    protected $fillable = ['name'];
}
