<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class EncuestasController extends Controller
{
    public function show()
    {
         return view('users.encuestas');

    }


}
