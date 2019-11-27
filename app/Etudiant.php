<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
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
