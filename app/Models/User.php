<?php

namespace App\Models;

use App\Notifications\VerifyApiEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'profile',
        'gender',
        'dob',
        'address',
        'email',
        'hp',
        'password',
    ];

    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyApiEmail);
    }

    public function histories()
    {
        return $this->belongsToMany(History::class);
    }

    public function reviews()
    {
        return $this->belongsToMany(Review::class);
    }

    public function carts()
    {
        return $this->belongsToMany(Cart::class);
    }


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
