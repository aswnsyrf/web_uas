<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'detail','price','category', 'image'
    ];

    public function categor()
    {
        return $this->belongsTo(Category::class, 'category', 'id');
    }
}
