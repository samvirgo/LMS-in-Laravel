<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;

class BookController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index(Request $request)
    {
        $books = Book::orderBy('id','DESC')->paginate(5);
        return view('Book.index',compact('books'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }


 public function searchBook(Request $request)
 {
    $search = \Request::get('search');
    $books = Book::where('name','like','%'.$search.'%')->orderBy('id')->paginate(5);
      return view('Book.searchbook',compact('books'))
            ->with('i', ($request->input('page', 1) - 1) * 5);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Book.create');

        $this->validate($request, [
      'image' => 'mimes:pdf', //only allow this type extension file.
  ]);

  $file = $request::file('image');
  // image upload in public/upload folder.
  $file->move('uploads', $file->getClientOriginalName());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  public function store(Request $request)
    {
        $this->validate($request, [
            'category' => 'required',
            'name' => 'required',
            'author' => 'required',
            'copyright' => 'required',
            'book_no' => 'required',
            'isbn' => 'required',
            'shelf_no' => 'required',
            'book_file_name' => 'required',
        ]);
        $file = $request->file('book_file_name');
        // image upload in public/upload folder.
        $file->move('uploads', $file->getClientOriginalName()); 

        $input = array_except($request->all(),array('_token'));

        $input['book_file_name'] = $file->getClientOriginalName();
        
        \DB::table('books')->insert($input);
        return redirect()->route('book.create')
                        ->with('success','book Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);
        return view('Book.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        return view('Book.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
           'category' => 'required',
            'name' => 'required',
            'author' => 'required',
            'copyright' => 'required',
            'book_no' => 'required',
            'isbn' => 'required',
            'shelf_no' => 'required',
        ]);

       Book::find($id)->update($request->all());
        return redirect()->route('book.index')
                        ->with('success','Book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::find($id)->delete();
        return redirect()->route('book.index')
                        ->with('success','Book deleted successfully');
    }
}