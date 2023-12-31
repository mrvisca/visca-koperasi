<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockHistory extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id');
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class,'unit_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
