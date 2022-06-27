<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bookings';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'is_fav', 'user_id', 'event_id'
    ];

    /**
     * Get the users associated with the booking
     */
    public function users()
    {
        return $this->belongsTo(User::class, "user_id");
    }

    /**
     * Get the event associated with the booking
     */
    public function events()
    {
        return $this->belongsTo(Events::class, "event_id");
    }

}
