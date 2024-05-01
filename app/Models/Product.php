<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Product extends Model
{
    //use HasFactory;
    protected $fillable=['name', 'category', 'price'];
}
