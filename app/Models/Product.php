<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Product extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'seller_id',
        'plant_name',
        'plant_type',
        'plant_price',
        'stock',
        'plant_location',
        'plant_description',
        'image'
    ];
}