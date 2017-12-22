<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminCvRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Models\Cv;

class AdminCvController extends Controller
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
        $admincv = Cv::find(1);
        // dd($admincv);
        return view('admin.admin-cv',compact('admincv'));
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
        $admincv = Cv::find($id);
        return view('admin.edit.edit-cv', compact('admincv'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminCvRequest $request, $id)
    {
            $admincv = Cv::find($id);
            $admincv->update($request->all());
            $admincv->link_files = $request->link_files;
            // $admincv->link_files->store(config('images.path'), 'public');
            // return Storage::disk('public')->download($ligne->link_files);
            return redirect()->route('admin-cv')->with('message','Le CV à été editez avec succès !');
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
