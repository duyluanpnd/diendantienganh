<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin;
// use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


class googleController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    } 
    public function handdleGoogleCallBack(Request $request){

        $state = $request->input('state');

        parse_str($state, $result);

        $googleUser = Socialite::driver('google')->user();

        $admin = Admin::where('email', $googleUser->email)->first();

        if($admin){
            // throw new \Exception(__('google sign in email existed'));
            
            return redirect()->route('admins.index');
        }
        $admin= Admin::create([
            
                // "username" => $googleUser->username,
                "id" => $googleUser->id,    
                "username" => $googleUser->name,
                "password" => '',
                "name" => $googleUser->name,
                "email" => $googleUser->email,
                "google_id" => $googleUser->id,
            ]);
            $admin->save();

        return redirect()->route('admins.index');
    }

    //     try {
    //         $state = $request->input('state');

    //         parse_str($state, $result);

    //         $googleUser = Socialite::driver('google')->stateless()->user();

    //         $admin = Admin::where('email', $googleUser->email)->first();

    //         if($admin){
    //             dd(1);
    //             throw new \Exception(__('google sign in email existed'));
                
    //             return redirect('login');
    //         }
    //         $admin= Admin::create([
                
    //                 // "username" => $googleUser->username,
    //                 "id" => $googleUser->id,    
    //                 "username" => $googleUser->email,
    //                 "password" => '123',
    //                 "name" => $googleUser->name,
    //                 "email" => $googleUser->email,
    //                 "google_id" => $googleUser->id,
    //             ]);
    //             $admin->save();
                
    //         return response()->json([
    //             'status' => __('google sign in successful'),
    //             'data' => $admin,
    //         ]);
    //     } catch (\Throwable $th) {
    //         //throw $th;
    //         dd(3);
    //         return response()->json([
                
    //             'status' => __('google sign in failed'),
    //             'error' => $th,
    //             'message' => $th->getMessage()
    //         ]);
    //     }
    // } 
}
