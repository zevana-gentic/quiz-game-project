<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserScore extends Model
{
    protected $table = 'user_scores';

    protected $fillable = [
        'user_id',
        'total_score',
        'do_date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
