<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function unit_jual()
    {
        return $this->belongsTo(Unit::class,'satuan_jual');
    }

    public function unit_beli()
    {
        return $this->belongsTo(Unit::class,'satuan_beli');
    }
}
