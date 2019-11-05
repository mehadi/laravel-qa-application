<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    /**
     * Get the answer of any question if exist.
     */
    public function answer()
    {
        return $this->hasMany(Answer::class);
    }

    public function scopeGetPast48HourQuestions($query)
    {
        return $query->where('created_at', '<', Carbon::parse('-48 hours'));
    }

}
