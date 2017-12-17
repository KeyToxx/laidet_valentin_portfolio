<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeries;

class GaleriesController extends Controller
{
	public function index(){

		$galeries = Galeries::all();

		return view('projet', compact('galeries'));
	}

}
