<?php

namespace App\Models;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'model_number',
        'name',
        'category', 
        'type', 
        'gender', 
        'price',
        'discount', 
        'color', 
        'description', 
        'specifications',
        'stock',
        'brand_id'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
