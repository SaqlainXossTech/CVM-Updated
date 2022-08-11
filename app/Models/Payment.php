<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    
    protected $fillable = ['type', 'number', 'txid', 'order_id', 'user_id', 'cv_id', 'amount','status', 'time'];
}
