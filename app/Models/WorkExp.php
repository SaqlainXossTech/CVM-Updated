<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExp extends Model
{
    use HasFactory;

    protected $fillable = ['company_name', 'position', 'start', 'end', 'work_summary','location'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
