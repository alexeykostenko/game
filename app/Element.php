<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'photo', 'url'];

    /**
     * Get the votes for the element.
     */
    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    public function endpoint() {
        return $this->belongsTo(Endpoint::class);
    }

    public function scopeOpponents()
    {
        return $this->paginate(2);
    }
}
