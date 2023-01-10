<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suggetion extends Model
{
    use HasFactory;

    protected $fillable = ['inst_name', 'dept', 'skill', 'profile_summary', 'present_address', 'location'];
}
