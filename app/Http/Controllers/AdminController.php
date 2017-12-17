<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');//Si utilisateur pas connecté impossible d'accéder à la page ADMIN
    }

    public function index(){
    	return view('admin.admin');
    }
}
