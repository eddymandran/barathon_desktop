<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bars extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bars';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'address',
        'city',
        'zip_code',
        'phone',
        'email',
        'website',
        'logo',
        'cover_picture',
        'siret',
        'opening_time',
        'opening_days',
        'description',
        'owner_id',
    ];

    /**
     * Get the event associated with the bar
     */
    public function event(){
        return $this->hasMany(Events::class, "bar_id");
    }

    /**
     * Get the owner associated with the bar
     */
    public function owner(){
        return $this->belongsTo(User::class, "user_id");
    }
}
