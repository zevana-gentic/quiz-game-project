<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
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
        if ($request->toggle_sound === '1') {
            $user->update([
                'sound_setting' => '1'
            ]);
        } else {
            $user->update([
                'sound_setting' => '0'
            ]);
        }
        $data['user'] = $user;

        return view('profile', $data);
    }

    public function score_history(Request $request)
    {
        $data['page_title'] = 'Riwayat Skor';

        return view('score-history', $data);
    }
}
