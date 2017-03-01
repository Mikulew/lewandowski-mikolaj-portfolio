<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Canvas;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\URL;
use App\Technology;

class AdminCanvasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $canvases = Canvas::orderBy('id', 'ASC')->paginate(10);
        
        return view('admin.canvas', compact('canvases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $technologies = Technology::all();
        return view('admin.create_canvas', compact('technologies'));
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
        $rules = array('image' => 'required'); //mimes:jpeg,bmp,png and for max size max:10000
        $validator = Validator::make($file, $rules);
        
        if ($validator->fails()) {
            return redirect()->route('admin.canvas')->withInput()->withErrors($validator);
        } else {
            if (Input::file('thumbnail')->isValid()) {

                    $destinationPath = 'img/canvas/'; 
                    $extension = Input::file('thumbnail')->getClientOriginalExtension();
                    $name = explode('.', Input::file('thumbnail')->getClientOriginalName());
                    $fileName = str_slug($name[0]) . '.' . $extension; 
                    Input::file('thumbnail')->move($destinationPath, $fileName);
                    $data = $request->all();
                    $data['thumbnail'] = $fileName;
                    $canvas = Canvas::create($data);
                    $canvas->technology()->sync($data['technology']);
                return redirect()->route('admin.canvas');
                }
            else {
              return redirect()->route('admin.canvas');
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
    public function edit(Canvas $canvas)
    {
        $technologies = Technology::all();
        return view('admin.edit_canvas', compact('canvas', 'technologies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Canvas $canvas)
    {
        $file = array('image' => Input::file('thumbnail'));
        $rules = array('image' => 'required');
        $validator = Validator::make($file, $rules);
        
        $data = $request->all();
        
        if($request->input('thumbnail') === '') {
            $data['thumbnail'] = $request->input('old_thumbnail');
        } else {
            if(!$validator->fails()) {
                $destinationPath = 'img/canvas/';
                $extension = Input::file('thumbnail')->getClientOriginalExtension();
                $name = explode('.', Input::file('thumbnail')->getClientOriginalName());
                $fileName = str_slug($name[0]) . '.' . $extension;
                Input::file('thumbnail')->move($destinationPath, $fileName);
                $data['thumbnail'] = $fileName;
            }
        }
        $canvas->update($data);
        
        $canvas->technology()->sync($data['technology']);
        
    return redirect()->route('admin.canvas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Canvas $canvas)
    {
        $canvas->delete();
        return redirect(URL::previous());
    }
}
