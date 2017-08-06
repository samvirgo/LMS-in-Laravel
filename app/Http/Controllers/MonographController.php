<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Monograph;

class MonographController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index(Request $request)
    {
        $monographs = Monograph::orderBy('id','DESC')->paginate(5);
        return view('Monograph.index',compact('monographs'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }



public function searchMonograph(Request $request)
 {
    $search = \Request::get('search');
    $monographs = Monograph::where('name','like','%'.$search.'%')->orderBy('id')->paginate(5);
      return view('Monograph.searchresult',compact('monographs'))
            ->with('i', ($request->input('page', 1) - 1) * 5);

    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Monograph.create');

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
            'name' => 'required',
            'faculty' => 'required',
            'subject' => 'required',
            'book_file_name' => 'required',
        ]);
        $file = $request->file('book_file_name');
        // image upload in public/upload folder.
        $file->move('uploads', $file->getClientOriginalName()); 

        $input = array_except($request->all(),array('_token'));

        $input['book_file_name'] = $file->getClientOriginalName();
        
        \DB::table('monographs')->insert($input);
        return redirect()->route('monograph.create')
                        ->with('success','monograph Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $monograph = Monograph::find($id);
        return view('Monograph.show',compact('monograph'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $monograph = Monograph::find($id);
        return view('Monograph.edit',compact('monograph'));
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
          'name' => 'required',
            'faculty' => 'required',
            'subject' => 'required',
        ]);

       Monograph::find($id)->update($request->all());
        return redirect()->route('monograph.index')
                        ->with('success','Monograph updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Monograph::find($id)->delete();
        return redirect()->route('monograph.index')
                        ->with('success','Monograph deleted successfully');
    }
}