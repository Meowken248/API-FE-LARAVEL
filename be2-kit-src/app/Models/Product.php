<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    protected $fillable = ['name', 'price', 'description', 'photo'];

    use HasFactory;

    public function comments() : HasMany {
        return $this->hasMany(Comment::class)->latest();
    }
}
