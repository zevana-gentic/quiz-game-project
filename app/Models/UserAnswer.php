<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
    protected $table = 'user_answers';

    protected $fillable = [
        'user_id',
        'question_id',
        'answer',
        'score'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id');
    }
}
