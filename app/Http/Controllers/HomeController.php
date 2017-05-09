<?php

namespace App\Http\Controllers;

use App\Post;

class HomeController extends Controller
{

    protected function view($view = null, $data = [], $mergeData = [])
    {
        return view($view, $data, $mergeData);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::get();
        return $this->view('home.index', compact('post'));
    }


    public function post($id)
    {
        $post = Post::find($id);
        return $this->view('home.post', compact('post'));
    }


    public function profile()
    {
        return $this->view('profile');
    }

}
