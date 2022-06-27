<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filters extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'filters';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'event_id', 'tag_id'
    ];

    /**
     * Get the tags associated with the filter
     */
    public function tags(){
        return $this->belongsTo(Tags::class, "tag_id");
    }

    /**
     * Get the event associated with the filter
     */
    public function events(){
        return $this->belongsTo(Events::class, "event_id");
    }
}
