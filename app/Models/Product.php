<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = ['name', 'description', 'price', 'category_id', 'image'];
    protected $fillables = [
        'name',
        'price',
        'description',
        'image',
        'stock',
    ];

    public function images(){
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }

    // Trong model Product
        public function primaryImage()
        {
            return $this->hasOne(ProductImage::class)->where('is_primary', 1);
        }


    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function getImageUrlAttribute(){
        return asset('storage/' . $this->image);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class, 'product_id');
    }
}
