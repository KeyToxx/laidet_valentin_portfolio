<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Abouts;
use App\Models\Skill;
use App\Models\Cv;
use App\Notifications\NotificationEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

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
        $skills = Skill::all();//Recupère la ligne

        return view('accueil', compact('about','skills'));//Retourne ma vue accueil et me permet d'utiliser la variable skills
    }

    public function cv(){
        $cv = Cv::find(1);
        // dd($cv);
        return response()->download($cv->link_files);
    }
}
