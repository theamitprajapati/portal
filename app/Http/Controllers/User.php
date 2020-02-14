<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->data['grid'] = 'form';
        return $this->render('user');
    }
}
