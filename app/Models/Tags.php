<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tags';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 'description', 'picture'
    ];


    /**
     * Get the filters associated with the tags
     */
    public function filters(){
        return $this->hasMany(Filters::class, "tag_id" );
    }

    /**
     * Get the events associated with the tags
     */
    public function events(){
        return $this->belongsToMany(Events::class, "filters", "tag_id" , "event_id");
    }
}
