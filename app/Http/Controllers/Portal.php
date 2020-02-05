<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Portal extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('portal/dashboard');
    }

    public function dashboard()
    {
        return view('portal/dashboard');
    }

    public function profile()
    {
        return view('portal/profile');
    }


    public function user()
    {
        return view('portal/user');
    }
}
