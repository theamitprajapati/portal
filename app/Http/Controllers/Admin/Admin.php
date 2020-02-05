<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect('admin/dashboard');
    }

    public function profile()
    {
        return redirect('admin/dashboard');
    }


    public function user()
    {
        return redirect('admin/dashboard');
    }
}
