<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Technology;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class AdminTechnologiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $technologies = Technology::orderBy('id', 'ASC')->paginate(100);
        
        return view('admin.technology', compact('technologies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Technology $technology)
    {
        return view('admin.create_technology', compact('technology'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $technology = new Technology();
        $file = array('image' => Input::file('thumbnail'));
        $rules = array('image' => 'required');
        $validator = Validator::make($file, $rules);
        
        if ($validator->fails()) {
            return redirect()->route('admin.technology')->withInput->withErrors($validator);
        } else {
            if (Input::file('thumbnail')->isValid()) {
                
                $destinationPath = 'img/technology';
                $extension = Input::file('thumbnail')->getClientOriginalExtension();
                $name = explode('.', Input::file('thumbnail')->getClientOriginalName());
                $fileName = str_slug($name[0]) . '.' . $extension;
                Input::file('thumbnail')->move($destinationPath, $fileName);
                $data = $request->all();
                $data['thumbnail'] = $fileName;
                Technology::create($data);
                return redirect()->route('admin.technology');
            } else {
                return redirect()->route('admin.technology');
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
    public function edit(Technology $technology)
    {
        return view('admin.edit_technology', compact('technology'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Technology $technology)
    {
        $file = array('image' => Input::file('thumbnail'));
        $rules = array('image' => 'required');
        $validator = Validator::make($file, $rules);
        
        $data = $request->all();
        if ($request->input('thumbnail') === "") {
            $data['thumbnail'] = $request->input('old_thumbnail');
        } else {
            if (!$validator->fails()) {
                $destinationPath = 'img/technology/';
                $extension = Input::file('thumbnail')->getClientOriginalExtension();
                $name = explode('.', Input::file('thumbnail')->getClientOriginalName());
                $fileName = str_slug($name[0] . '.' . $extension);
                Input::file('thumbnail')->move($destinationPath, $fileName);
                $data['thumbnail'] = $fileName;
            } 
        }
        $technology->update($data);
        
        return redirect()->route('admin.technology');
    }

    /**
     * Remove the specified resource from storage.
     *
             * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Technology $technology)
    {
        //
    }
}




























