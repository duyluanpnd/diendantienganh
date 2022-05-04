<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function processLogin(Request $request) {
        try {
            $user = Admin::query()
                ->where('username', $request->get('username'))
                ->where('password', $request->get('password'))
                ->firstOrFail();
            session()->put('id', $user->id);
            session()->put('level', $user->level);
            session()->put('name', $user->name);
            return redirect()->route('admins.index');
        } catch (\Throwable $e) {
            $catch = $request->flash('username');
            return redirect()->route('login')->with('error', __('Sai tài khoản hoặc mật khẩu'));
        }
    }
}
