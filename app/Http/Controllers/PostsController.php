<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function abscence()
    {
        return view('abscence');
    }
    

    public function payment()
    {
        return view('payment');
    }

}
