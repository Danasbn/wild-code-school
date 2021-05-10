<?php

namespace App\Http\Controllers;
class MainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function home(){

        echo 'Veuillez vous rendre à l\adresse : http://localhost:1234/names ';
    }

    //
}
