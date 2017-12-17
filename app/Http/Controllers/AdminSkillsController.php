<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\AdminSkillsRequest;
use App\Models\Skill;

class AdminSkillsController extends Controller
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

    public function index()
    {
        $adminskills = Skill::all();
        return view('admin.admin-skills',compact('adminskills'));
    }

    public function choiceEdit()
    {
        $adminskills = Skill::all();
        return view('admin.admin-choice-edit-skills',compact('adminskills'));
    }

    public function choiceDestroy()
    {
        $adminskills = Skill::all();
        return view('admin.admin-choice-destroy-skills',compact('adminskills'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create.create-skills');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminSkillsRequest $request)
    {
        Skill::create($request->all());
        return redirect()->route('admin-skills')->with('message','La compétence à '.$request->name.' été créer avec succès');
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
        $adminskills = Skill::find($id);
        return view('admin.edit.edit-skills',compact('adminskills'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminSkillsRequest $request, $id)
    {
        $adminskills = Skill::find($id);
        $adminskills->update($request->all());
        //$adminabout->save();
        return redirect()->route('admin-skills')->with('message','La compétence '.$adminskills->name.' à été editez avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $adminskills = Skill::find($id);
        //dd($adminskills);
        $adminskills->delete();
        return redirect()->route('admin-skills')->with('message','La compétence '.$adminskills->name.' à été supprimer avec succès !');
    }
}
