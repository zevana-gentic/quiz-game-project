<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data['page_title'] = 'Dashboard Admin';
        $data['users']  = User::where('role', 'user')->latest()->limit(10)->get();
        $data['questions'] = Question::limit(5)->get();

        return view('dashboard', $data);
    }
}
