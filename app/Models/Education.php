<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = ['inst_name', 'degree', 'dept', 'pass_year', 'result', 'board'];

    public function user()
    {
        return $this->belongsTo(User::class,);
    }
}
