<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItem;

class Product extends Model
{
    use HasFactory;
    public function orderItems(){
        return $this->hasMany(OrderItem::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

    protected $fillable=[
        'name',
        'description',
        'quantity',
        'price',
        'category_id',
    ];
}
