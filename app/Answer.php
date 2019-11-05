<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Answer extends Model
{
    use SoftDeletes;
    /**
     * Get the question of selected answer
     */
    public function question()
    {
        return $this->belongsTo(Question::class);
        // note: we can also include Question model like: 'App\Question'
    }
}
