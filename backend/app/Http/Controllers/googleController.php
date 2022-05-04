<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Post;
use App\Models\User;
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

        $user = User::where('google_id', $googleUser->id)->first();

        if($user){
            // throw new \Exception(__('google sign in email existed'));
            
            return redirect()->route('show');
        }
        $user = User::create([
            
                // "username" => $googleUser->username,
                "id" => $googleUser->id,  
                "name" => $googleUser->name,  
                "username" => '',
                "password" => '',                
                "email" => $googleUser->email,
                "google_id" => $googleUser->id,
                'remember_token' => ''

            ]);
            // $user->save();
            auth()->login($user, true);
        return redirect()->route('show');
    }
}