<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'firstname',
        'email',
        'password',
        'address',
        'city',
        'zip_code',
        'birthday',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the role associated with the user
     */
    public function role(){
        return $this->belongsTo(Roles::class,'role_id');
    }

    /**
     * Get the bookings associated with the user
     */
    public function bookings(){
        return $this->hasMany(Bookings::class, "user_id" );
    }

    /**
     * Get the events associated with the user
     */
    public function events(){
        return $this->belongsToMany(Events::class, "bookings", "user_id" , "event_id");
    }

    /**
     * Get the bar (owner) associated with the user
     */
    public function bars(){
        return $this->hasMany(Bars::class, "user_id");
    }
}
