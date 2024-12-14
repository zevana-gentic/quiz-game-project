<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function account_list(Request $request)
    {
        $data['page_title'] = 'Kelola User';
        $accounts = User::where('role', 'user')->orderBy('id', 'asc');
        $data['accounts'] = $accounts->paginate(20);

        return view('list-account', $data);
    }
}
