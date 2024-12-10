<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data['page_title'] = 'Dashboard Admin';

        return view('dashboard', $data);
    }
}
