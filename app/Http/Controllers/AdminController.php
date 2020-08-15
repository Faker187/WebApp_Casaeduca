<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function admin()
    {
        $alumnos = User::all()->where('tipo' , 1);
        return view('Administrador.admin',compact('alumnos'));

    }
}
