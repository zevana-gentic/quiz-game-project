<?php

namespace App\Http\Controllers\Admin;

use App\Models\UserScore;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ScoreController extends Controller
{
    public function score_list(Request $request)
    {
        $data['page_title'] = 'Kelola Skor';
        $user_scores = UserScore::with(['user'])->orderBy('id', 'asc');

        if ($request->q) {
            $user_scores = $user_scores->whereHas('user', function ($q) use($request) {
                $q->where('name', 'like', '%' . $request->q . '%');
            });
        }

        $data['user_scores'] = $user_scores->paginate(20);

        return view('list-score', $data);
    }
}
