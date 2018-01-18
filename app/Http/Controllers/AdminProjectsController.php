<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\AdminProjectsRequest;
use App\Models\Galeries;

class AdminProjectsController extends Controller
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
        return view('admin.admin-projects');
    }

    public function choiceEdit()
    {
        $adminprojects = Galeries::all();
        return view('admin.admin-choice-edit-projects',compact('adminprojects'));
    }

    public function choiceDestroy()
    {
        $adminprojects = Galeries::all();
        return view('admin.admin-choice-destroy-projects',compact('adminprojects'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create.create-projects');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminProjectsRequest $request)
    {
        Galeries::create($request->all());
        return redirect()->route('admin-projects')->with('message','La projet '.$request->name.' à été créer avec succès');
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
        $adminprojects = Galeries::find($id);
        return view('admin.edit.edit-projects',compact('adminprojects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminProjectsRequest $request, $id)
    {
        $adminprojects = Galeries::find($id);
        $adminprojects->update($request->all());
        return redirect()->route('admin-projects')->with('message','La compétence '.$adminprojects->name.' à été editée avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $adminprojects = Galeries::find($id);
        //dd($adminprojects);
        $adminprojects->delete();
        return redirect()->route('admin-projects')->with('message','La compétence '.$adminprojects->name.' à été supprimer avec succès !');
    }
}
