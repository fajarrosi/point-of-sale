<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'total_amount',
        'date',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
