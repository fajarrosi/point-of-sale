<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    use HasFactory;
    protected $table = 'product_price';
    protected $fillable = [
        'product_id',
        'size_id',
        'stock',
        'price',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
        'id',
        'product_id'
    ];

    public function size()
    {
        return $this->belongsTo(Size::class,'size_id','id');
    }
}
