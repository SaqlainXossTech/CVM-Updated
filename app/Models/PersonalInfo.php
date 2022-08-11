<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'father_name',
        'mother_name',
        'image',
        'mobile',
        'email',
        'present_address',
        'permanent_address',
        'job_title',
        'marital_status',
        'religion',
        'nationality',
        'gender',
        'dob',
        'profile_summary',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
