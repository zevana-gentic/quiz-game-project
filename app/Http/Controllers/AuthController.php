<?php

namespace App\Http\Controllers;

use Auth;
use Validator;
use Hash;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register_index()
    {
        $data['page_title'] = 'Register';

        return view('register', $data);
    }

    public function register_submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name"                  => "required",
            "username"              => "required",
            "email"                 => "required|email|unique:users,email",
            'password'              => [
                                        'required',
                                        // 'string',
                                        // 'min:10',             // must be at least 10 characters in length
                                        // 'regex:/[a-z]/',      // must contain at least one lowercase letter
                                        // 'regex:/[A-Z]/',      // must contain at least one uppercase letter
                                        // 'regex:/[0-9]/',      // must contain at least one digit
                                        // 'regex:/[@$!%*#?&]/', // must contain a special character
                                    ],
            'password_confirmation' => 'required'
        ],
        [
            'name.required'                  => 'Nama wajib diisi.',
            'email.required'                 => 'Email wajib diisi.',
            'username.required'              => 'Username wajib diisi.',
            'password.required'              => 'Password wajib diisi.',
            'password_confirmation.required' => 'Confirmation Password wajib diisi.',
        ]
        );

        if ($validator->fails()) {
            return redirect()->route('register.index')->withErrors($validator)->withInput();
        }

        $user = User::create([
            'name'           => $request->name,
            'username'       => $request->username,
            'email'          => $request->email,
            'password'       => Hash::make($request->password),
            'role'           => 'user',
            'remember_token' => md5(time()),
            'sound_setting'  => '0',
        ]);

        return redirect()->route('register.index')->with([
            'success' => 'Berhasil Register.',
        ]);
    }

    public function login_index()
    {
        $data['page_title'] = 'Login';

        return view('login', $data);
    }

    public function login_submit(Request $request)
    {
        $user = $request->validate([
            'email'     => ['required', 'email'],
            'password'  => ['required'],
        ], [
            'email.required'    => 'Email wajib diisi.',
            'password.required' => 'Password wajib diisi.'
        ]);

        if (Auth::attempt($user)) {
            $request->session()->regenerate();
            if (Auth::user()->role === 'admin') {
                return redirect()->route('dashboard');
            } else if (Auth::user()->role === 'user') {
                return redirect()->route('login.index')->with(['success' => 'Login Berhasil']);
            }
        }

        return redirect()->route('login.index')->with(['error' => 'Email atau password tidak cocok'])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        $user = Auth::user();

        Auth::logout($user);

        return redirect()->route('login.index');
    }
}
