<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $table = "contacts";

    protected $fillable = [
        'name',
        'email',
        'message'
    ];

}
