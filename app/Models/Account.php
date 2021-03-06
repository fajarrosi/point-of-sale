<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'telephone',
        'address',
        'role',
        'verification_code',
        'is_verified'
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

}
