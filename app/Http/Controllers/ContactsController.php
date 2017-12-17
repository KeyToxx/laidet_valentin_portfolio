<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use App\Models\Contacts;
use App\Mail\classMailContact;
use App\Http\Requests\FormContactRequest;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){

        //$this->id = $id;

    }

    public function index(){

        return view('contact');
    }

    public function send(FormContactRequest $request){


        //$mail = Contacts::find(1);
        //dd($mail);

        $form = new Contacts;

        $form->name = $request->name;
        $form->mail = $request->mail;
        $form->sujet = $request->sujet;
        $form->message = $request->message;

        $form->save();


        Mail::to('v.laidet@aformac-vichy.fr')->send(new classMailContact($form));

        return redirect('contact')->with('envoimail', 'Votre mail à bien été envoyé');

        // return (redirect()->route('contact'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 
    }
}
