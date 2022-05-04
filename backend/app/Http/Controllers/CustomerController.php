<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function show() {
        $x=Auth::user()->name;
        return view('layout-customer.profile',compact('x'));
    }
}
