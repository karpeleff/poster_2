<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FileController extends Controller
{
    public function create()
    {
        return view('create');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'filenames' => 'required',
                'filenames.*' => 'required'
        ]);
  
        $files = [];
        if($request->hasfile('filenames'))
         {
            foreach($request->file('filenames') as $file)
            {
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path('files'), $name);  
                //$file->storeAs('files', $imageName);
                $files[] = $name;  
            }
         }
  
         //$file= new File();
        // $file->filenames = $files;
        // $file->save();
  
        return back()->with('success', 'Data Your files has been successfully added');
    }
}
