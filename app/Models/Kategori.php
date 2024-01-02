<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    public function hitungProduk()
    {
        return $this->hasMany(Product::class,'category_id')->count();
    }
}
