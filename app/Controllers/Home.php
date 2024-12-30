<?php

namespace App\Controllers;

class Home extends BaseController
{
      public function index()
    {
        return view('Signup');
    }

    public function signup()
    {
        return view('Signup');
    }
}
