<?php

namespace App\Http\Controllers;

use App\Models\file;
use Illuminate\Http\Request;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    {
       
            $search = $request->input('search');
            $files = File::query()
            ->where('title','LIKE',"%$search%")
            ->orwhere('details','LIKE',"%$search%")
            ->paginate(3);
        
       
        return view('file.index',compact('files')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('file.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filename = str_replace(' ','',request('title'));
        $ext = $request->image->extension();
        $finalname = $filename.''.time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/files/'),$finalname);

        $files = new File();
        $files->title =$request['title'];
        $files->details =$request['details'] ;
        $files->image =$finalname;
        $files->ext = $ext;
        $files->save();

        


        return redirect()->route('file.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\file  $file
     * @return \Illuminate\Http\Response
     */
    public function show(file $file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\file  $file
     * @return \Illuminate\Http\Response
     */
    public function edit(file $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\file  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, file $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\file  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(file $file)
    {
        //
    }
    public function search(Request $request){
        $search = $request->input('search');
        $file = File::query()
        ->where('titles','LIKE',"%$search%")
        ->orwhere('details','LIKE',"%$search%")
        ->paginate(3);
    }
}
