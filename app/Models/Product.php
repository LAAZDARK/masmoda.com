<?php

namespace App\Models;

use App\Models\Size;
// use App\Models\Color;
// use App\Models\Shopping;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    public $table = "products";

    protected $fillable = [
        'id',
        'title',
        'description',
        'amount',
        'quantity',
        'size',
        'category',
        'brand',
        'model',
        'image',
        'status'
    ];

    // public function colors ()
    // {
    //     return $this->belongsToMany(Color::class);
    // }

    public function sizes ()
    {
        return $this->belongsToMany(Size::class);
    }

    // public function shoppings ()
    // {
    //     return $this->belongsToMany(Shopping::class);
    // }
}
