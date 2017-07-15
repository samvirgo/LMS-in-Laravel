<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;

class StudentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index(Request $request)
    {
        $students = Student::orderBy('id','DESC')->paginate(5);
        
        return view('Student.index',compact('students'))
            ->with('i', ($request->input('page', 1) - 1) * 5);

    }





 public function searchStudent(Request $request)
 {
    $search = \Request::get('search');
    $students = Student::where('id','like','%'.$search.'%')->orderBy('id')->paginate(5);
      return view('Student.search',compact('students'))
            ->with('i', ($request->input('page', 1) - 1) * 5);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Student.create');
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
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'position' => 'required',
        ]);

        Student::create($request->all());
        return redirect()->route('student.create')
                        ->with('success','student Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('Student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('Student.edit',compact('student'));
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
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'position' => 'required',
        ]);

       Student::find($id)->update($request->all());
        return redirect()->route('student.index')
                        ->with('success','student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
    {
        Student::find($id)->delete();
        return redirect()->route('student.index')
                        ->with('success','Student deleted successfully');
    }
}