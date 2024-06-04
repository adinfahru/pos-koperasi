<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'code',
        'name',
        'category_id', // Change this line
        'stock',
        'price',
        'purchase',
        'purchasing_date',
        'image'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function purchaseReports()
    {
        return $this->hasMany(PurchaseReport::class, 'product_id');
    }
}
