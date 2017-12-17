<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\AdminAboutRequest;
use App\Models\Abouts;

class AdminAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $adminabout = Abouts::all();
        return view('admin.admin-about',compact('adminabout'));
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
    public function store(AdminAboutRequest $request)
    {
        //return redirect()->route('admin-apropos')->with('message','Le texte à été editez avec succès !');
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
        $adminabout = Abouts::find($id);
        return view('admin.edit.edit-about', compact('adminabout'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminAboutRequest $request, $id)
    {
        $adminabout = Abouts::find($id);
        $adminabout->update($request->all());
        //$adminabout->save();
        return redirect()->route('admin-about')->with('message','Le texte à été editez avec succès !');
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
