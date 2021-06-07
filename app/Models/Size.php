<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Size extends Model
{
    use HasFactory;

    public $table = "sizes";

    protected $fillable = [
        'name'
    ];

    public function products ()
    {
        return $this->belongsToMany(Product::class, 'product_size')->wherePivot('quantity');
    }
}
