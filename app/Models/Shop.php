<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Shop extends Model
{
    use HasFactory;

    public function product(): hasMany 
    {
        return $this->hasMany(Product::class);
    }
}
