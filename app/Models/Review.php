<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'product_id', 'rating', 'comment'
    ];

    // Thiết lập quan hệ với Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
