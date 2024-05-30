<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'code',
        'name', 
        'category',
        'stock',
        'price',
        'purchase',
        'purchasing_date',
        'image',
    ];
}
