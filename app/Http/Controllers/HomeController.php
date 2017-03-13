<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{


    protected $tempPath = 'web';

    public function __construct()
    {
        $menus = config('menus');
        view()->share('menus', $menus);
    }


    protected function view($view = null, $data = [], $mergeData = [])
    {
        if ($this->tempPath) {
            $view = $this->tempPath . '.' . $view;
        }
        return view($view, $data, $mergeData);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->view('home');
    }


    public function profile()
    {
        return $this->view('profile');
    }

}
