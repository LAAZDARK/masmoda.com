<?php

namespace App\Models;

// use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductSize extends Model
{
    use HasFactory;

    public $table = "product_size";

    protected $fillable = [
        'product_id',
        'size_id'
    ];

    // public function products ()
    // {
    //     return $this->belongsToMany(Product::class);
    // }
}
