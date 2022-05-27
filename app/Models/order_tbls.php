<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_tbls extends Model
{
    use HasFactory;
    protected $fillable = [
        'prod_id',
        'order_no',
        'buyer_id',
        'seller_id',
        'order_quantity',
        'order_status',
        'payment_method'
    ];
}
