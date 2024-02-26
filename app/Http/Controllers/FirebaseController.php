<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirebaseController extends Controller
{
    public $text;

    public function index()
    {

        return view('welcome');
    
    }

    /*
    public function tryQR(Request $request)
    {
        $this->text = $request->get('search');

        return view('welcome')->with($this->text);
    }
    */
}
