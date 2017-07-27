<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersregisterController extends Controller
{
     public function show()
    {
        return view('/users/register');
    }
}