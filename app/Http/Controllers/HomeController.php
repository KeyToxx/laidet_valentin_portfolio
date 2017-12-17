<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abouts;
use App\Models\Skill;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = Abouts::all();

        // foreach ($about as $text) {
        //     echo $text->lastname;
        // }

        $skills = Skill::all();//Recupère la ligne

        return view('accueil', compact('about','skills'));//Retourne ma vue accueil et me permet d'utiliser la variable skills
    }
}
