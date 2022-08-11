<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'mobile',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function education()
    {
        return $this->hasMany(Education::class);
    }

    public function work_exps()
    {
        return $this->hasMany(WorkExp::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function references()
    {
        return $this->hasMany(Reference::class);
    }

    public function personal_infos()
    {
        return $this->hasOne(PersonalInfo::class);
    }

    public function additonal_infos()
    {
        return $this->hasOne(AdditonalInfo::class);
    }

    public function cv()
    {
        return $this->hasMany(Cv::class);
    }
    
    public function trainings()
    {
        return $this->hasMany(Training::class);
    }
}
