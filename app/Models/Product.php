<?php

namespace App\Models;

use App\Models\Brand;
use App\Models\Review;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'sub_brand',
        'model_number',
        'name',
        'category', 
        'feature', 
        'gender', 
        'price',
        'discount', 
        'color', 
        'description', 
        'specification',
        'stock',
        'brand_id',
        'sale_number'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
