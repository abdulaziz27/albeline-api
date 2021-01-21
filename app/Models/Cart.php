<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $guarded = ['id',];

    public function histories()
    {
        return $this->belongsToMany(History::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
