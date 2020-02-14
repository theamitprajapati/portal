<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function __construct(Request $request)
    {
        $this->data = [];
        $this->request = $request;
        $this->grid = $this->get('grid');
    }
    public function loadViewData()
    {
        $viewData = [];

        // Check for flash errors
        if (session('error')) {
            $viewData['error'] = session('error');
            $viewData['errorDetail'] = session('errorDetail');
        }

        // Check for logged on user
        if (session('userName')) {
            $viewData['userName'] = session('userName');
            $viewData['userEmail'] = session('userEmail');
        }
        return $viewData;
    }
    public function get($name)
    {
        $value = false;
        if ($this->request->input($name) !== null)
            $value  = $this->request->input($name);
        return $value;
    }

    public function post($name)
    {
        return Input::post($name);
    }

    public function getGrid()
    {
        if (!empty($this->grid))
            return isset($this->data['grid']) ? $this->data['grid'] : 'form';
    }

    public function render($view)
    {
        $this->data['grid'] = empty($this->getGrid()) ? $this->data['grid'] : $this->grid;
        return view('portal.' . $view, $this->data);
    }
}
