<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'sold'];

    protected $perPage = 24;

    public function images()
    {
        return $this->morphMany('App\Models\Image', 'imageable');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function histories()
    {
        return $this->belongsToMany(History::class);
    }

    public function reviews()
    {
        return $this->belongsToMany(Review::class);
    }
    
}
