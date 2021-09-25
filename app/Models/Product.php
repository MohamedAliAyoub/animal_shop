<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'number',
        'category_id',
        'price',

    ];
    public function images(){
        return $this->hasMany(Image::class , 'product_id' );
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
