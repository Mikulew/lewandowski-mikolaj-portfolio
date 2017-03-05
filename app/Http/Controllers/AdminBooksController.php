<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\URL;

class AdminBooksController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $books = Book::orderBy('id', 'ASC')->paginate(10);
        
        return view('admin.book', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book();
        $file = array('image' => Input::file('thumbnail'));
        $rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
        $validator = Validator::make($file, $rules);
        
        if ($validator->fails()) {
            return redirect()->route('admin.book')->withInput()->withErrors($validator);
        } else {
            if (Input::file('thumbnail')->isValid()) {               

                $destinationPath = 'img/book/'; 
                $extension = Input::file('thumbnail')->getClientOriginalExtension();
                $name = explode('.', Input::file('thumbnail')->getClientOriginalName());
                $fileName = str_slug($name[0]) . '.' . $extension; 
                Input::file('thumbnail')->move($destinationPath, $fileName);
                $data = $request->all();
                $data['thumbnail'] = $fileName;
                Book::create($data);
                return redirect()->route('admin.book');
                }
            else {
              return redirect()->route('admin.book');
            }
          }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
    {
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
    public function edit(Book $book)
    {   
        return view('admin.edit_book', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $file = array('image' => Input::file('thumbnail'));
        $rules = array('image' => 'required');
        $validator = Validator::make($file, $rules);
        
        $data = $request->all();
        
        if($request->input('thumbnail') === '') {
            $data['thumbnail'] = $request->input('old_thumbnail');
        } else {
            if(!$validator->fails()) {
                $destinationPath = 'img/book/';
                $extension = Input::file('thumbnail')->getClientOriginalExtension();
                $name = explode('.', Input::file('thumbnail')->getClientOriginalName());
                $fileName = str_slug($name[0] . '.' . $extension);
                Input::file('thumbnail')->move($destinationPath, $fileName);
                $data['thumbnail'] = $fileName;
            }
        }
        
        $book->update($data);
        
        return redirect()->route('admin.book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {   
        $book->delete();
        return redirect(URL::previous());
    }
}
