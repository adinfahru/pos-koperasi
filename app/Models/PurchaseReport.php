<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'quantity',
        'price',
        'purchase_date',
        'total'
    ];

    public static function boot()
    {
        parent::boot();

        // Hook untuk menghitung total sebelum menyimpan data
        static::saving(function ($model) {
            $model->total = $model->quantity * $model->price;
        });
    }

    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
}
