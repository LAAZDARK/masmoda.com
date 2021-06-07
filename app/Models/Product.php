<?php

namespace App\Models;

use App\Models\Size;
use App\Models\Admin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    CONST STATUS_FALSE = false;
    CONST STATUS_TRUE = true;

    public $table = "products";

    protected $fillable = [
        'id',
        'title',
        'description',
        'amount',
        'size',
        'category',
        'brand',
        'model',
        'image',
        'status',
        'type',
        'admin_id'
    ];

    public function admin ()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }

    public function sizes ()
    {
        return $this->belongsToMany(Size::class, 'product_size')->wherePivot('product_id', 'size_id','quantity');
    }

    // public function shoppings ()
    // {
    //     return $this->belongsToMany(Shopping::class);
    // }
}
