<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginFail(){
        return view('auth.login');
    }

    public function processLogin(Request $request) {
        try {
            
            $user = Admin::query()
                ->where('username', $request->get('username'))
                ->where('password', $request->get('password'))
                ->firstOrFail();
                
                session()->put('id', $user->id);
                session()->put('name', $user->name);
            return view('admin_layout');
        } catch (\Throwable $e) {
            return redirect()->route('login');
        }
    }
}
