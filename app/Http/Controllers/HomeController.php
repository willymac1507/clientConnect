<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('home');
    }
}
