<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdditonalInfo extends Model
{
    use HasFactory;

    protected $fillable = ['skills', 'hobby', 'language', 'linkedin', 'github', 'twitter', 'behance'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
