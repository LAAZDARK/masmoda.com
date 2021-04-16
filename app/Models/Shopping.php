<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shopping extends Model
{
    use HasFactory;

    public $table = "shoppings";

    protected $fillable = [
        'quantity',
        'color_id',
        'size_id',
        'product_id',
        'user_id'
    ];

    // public function products ()
    // {
    //     return $this->belongsToMany(Product::class);
    // }

    // public function users ()
    // {
    //     return $this->belongsToMany(User::class);
    // }
}
