<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    public function transaction(): belongsTo 
    {
        return $this->belongsTo(Transaction::class, 'transaction_id', 'id');
    }

    public function product(): belongsTo 
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
