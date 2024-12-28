<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\UserScore;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile_index()
    {
        $data['page_title'] = 'Profile';
        $data['user'] = User::find(Auth::id());

        return view('profile', $data);
    }

    public function toggle_sound(Request $request)
    {
        $user = User::find(Auth::id());

        if ($user->sound_setting === 1) {
            $user->update([
                'sound_setting' => 0
            ]);

            return redirect()->route('profile.index');
        }

        $user->update([
            'sound_setting' => 1
        ]);

        return redirect()->route('profile.index');
    }

    public function score_history(Request $request)
    {
        $data['page_title'] = 'Riwayat Skor';
        $data['user_scores'] = UserScore::where('user_id', Auth::id())->latest()->get();

        return view('score-history', $data);
    }
}
