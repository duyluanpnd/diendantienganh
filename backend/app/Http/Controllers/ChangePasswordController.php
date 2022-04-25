<?php

namespace App\Http\Controllers;

use App\Models\Admin;

use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{
    public function changePassword(){
        return view('change_password');
    }
    public function processChangePassWord(Request $request){
        try {
            $user = Admin::query()
            ->where('username', $request->get('username'))
            ->where('password', $request->get('password'))
            ->firstOrFail();
            
            // $user->update(['password' => $request->get('newpassword')]);
            $user->password=$request->get('newpassword');
            $user->save();
            return view('admin_login');

        } catch (\Throwable $th) {
            echo 'Sai tài khoản hoặc mất khẩu';
        }
    }
}