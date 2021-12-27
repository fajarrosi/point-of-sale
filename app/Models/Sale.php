<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $fillable = [
        'invoice_id',
        'product_id',
        'size_id',
        'sub_total',
        'unit_price',
        'quantity',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
