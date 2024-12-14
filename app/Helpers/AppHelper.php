<?php

namespace App\Helpers;

use App\Models\User;
use App\Models\UserAnswer;
use Illuminate\Support\Facades\Auth;

class AppHelper
{
    static function get_user_answer($id)
    {
        $user_answer = UserAnswer::where('question_id', $id)->first();
        $answer = @$user_answer->answer;

        return $answer;
    }
}
