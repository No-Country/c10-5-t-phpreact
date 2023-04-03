<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Models\Cohort;
use App\Models\Profile_data;
use App\Models\Calification;
use App\Models\WeekResults;

class User extends Authenticatable
{   
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes, HasRoles;

    protected $fillable = [
        'name',
        'lastname',
        'email',
        'password',
        'remember_token'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function weekResults()
    {
        return $this->belongsToMany(WeekResults::class, 'user_control');
    }

    public function profileData()
    {
        return $this->hasOne(Profile_data::class);
    }

    public function califications()
    {
        return $this->hasMany(Calification::class);
    }
}
