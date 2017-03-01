<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\URL;
use App\Technology;

class AdminProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('id', 'ASC')->paginate(10);
        
        return view('admin.project', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $technologies = Technology::all();
        return view('admin.create_project', compact('technologies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = array('image' => Input::file('thumbnail'));
        $rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
        $validator = Validator::make($file, $rules);
        
        if ($validator->fails()) {
            return redirect()->route('admin.project')->withInput()->withErrors($validator);
        } else {
            if (Input::file('thumbnail')->isValid()) {
                
                    $destinationPath = 'img/project/'; 
                    $extension = Input::file('thumbnail')->getClientOriginalExtension();
                    $name = explode('.', Input::file('thumbnail')->getClientOriginalName());
                    $fileName = str_slug($name[0]) . '.' . $extension; 
                    Input::file('thumbnail')->move($destinationPath, $fileName);
                    $data = $request->all();
                    $data['thumbnail'] = $fileName;                
                    $project = Project::create($data);
                    $project->technology()->sync($data['technology']);
                return redirect()->route('admin.project');
                }
            else {
              return redirect()->route('admin.project');
            }
          }
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
    public function edit(Project $project)
    {
        $technologies = Technology::all();
        return view('admin.edit_project', compact('project', 'technologies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $file = array('image' => Input::file('thumbnail'));
        $rules = array('image' => 'required'); //mimes:jpeg,bmp,png and for max size max:10000
        $validator = Validator::make($file, $rules);
        
        $data = $request->all();
        
        if($request->input('thumbnail') === '') {
            $data['thumbnail'] = $request->input('old_thumbnail');
        } else {  
            if(!$validator->fails()) {
                $destinationPath = 'img/project/'; 
                $extension = Input::file('thumbnail')->getClientOriginalExtension();
                $name = explode('.', Input::file('thumbnail')->getClientOriginalName());
                $fileName = str_slug($name[0]) . '.' . $extension; 
                Input::file('thumbnail')->move($destinationPath, $fileName);
                $data['thumbnail'] = $fileName;
            }
        } 
        $project->update($data);
        
        $project->technology()->sync($data['technology']);
        
        return redirect()->route('admin.project');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect(URL::previous());
    }
}
