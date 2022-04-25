<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AddUserController extends Controller
{
    public function addUser()
    {
        return view('add_user');
    }
    public function processAddUser(Request $request)
    {
        try {
            $user = Admin::query()
                ->where('username', $request->get('username'))
                ->firstOrFail();

                
                $message = "wrong answer";
                echo "<script type='text/javascript'>alert('$message');</script>";

            return redirect()->route('add_user');

        } catch (\Throwable $th) {
            //throw $th;
            $user = new Admin;
            $user->username = $request->username;
            $user->password = $request->password;
            $user->save();

            return redirect()->route('login');
        }
    }
}
