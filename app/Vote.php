<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    /**
     * Get the voter that owns the vote.
     */
    public function voter()
    {
        return $this->belongsTo(Voter::class);
    }
}
