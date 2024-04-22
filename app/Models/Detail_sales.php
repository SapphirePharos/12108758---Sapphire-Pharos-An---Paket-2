<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_sales extends Model
{
    use HasFactory;
    protected $fillable = [
        'sale_id',
        'product_id',
        'amount',
        'subtotal',
    ];
}
