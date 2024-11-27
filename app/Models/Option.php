<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $table = 'options';

    protected $fillable = [
        'question_id',
        'option_key',
        'option_value'
    ];

    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id');
    }
}
