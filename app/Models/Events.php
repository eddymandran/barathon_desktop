<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'events';


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'start_date',
        'end_date',
        'description',
        'number_user_min',
        'number_user_max',
        'event_picture',
        'bar_id'
    ];


    /**
     * Get the bookings associated with the event
     */
    public function bookings()
    {
        return $this->hasMany(Bookings::class, "event_id");
    }

    /**
     * Get the user associated with the event
     */
    public function users()
    {
        return $this->belongsToMany(User::class, "bookings", "event_id", "user_id");
    }

    /**
     * Get the bar associated with the event
     */
    public function bar()
    {
        return $this->belongsTo(Bars::class, "bar_id");
    }

    /**
     * Get the filters associated with the event
     */
    public function filters()
    {
        return $this->hasMany(Filters::class, "event_id");
    }

    /**
     * Get the tags associated with the event
     */
    public function tags()
    {
        return $this->belongsToMany(Tags::class, "filters", "event_id", "tag_id");
    }
}
