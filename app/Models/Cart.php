<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public function user(): belongsTo 
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function product(): belongsTo
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
