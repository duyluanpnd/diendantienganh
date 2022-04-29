<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


class googleController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    } 
    public function handdleGoogleCallBack($value=''){
        $user = Socialite::driver('google')->user();
        $user = User::where('google_id', $user->id)->first();
        if(!empty($user)){
            Auth::login($user);
            return route('googleCallBack');
        }else{
            User::create([
                "name" => $user->name;
                "name" => $user->name;
                "name" => $user->name;
            ])
        }
    } 
}
