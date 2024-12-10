<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';

    protected $fillable = [
        'paket',
        'question_number',
        'category',
        'question_value',
        'answer_key',
        'discussion',
        'image'
    ];

    public function options()
    {
        return $this->hasMany(Option::class);
    }
}
