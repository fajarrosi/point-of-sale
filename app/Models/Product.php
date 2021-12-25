<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product',
        'category_id',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function price()
    {
        return $this->hasMany(ProductPrice::class,'product_id','id');
    }
}
