<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';
    public $timestamps = true;
    public function orderDetails() {
        return $this->hasMany(OrderDetail::class);
    }
    
}
