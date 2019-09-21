<?php

namespace App\Http\Controllers;

use App\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $username=Student::all();
        //dd($username);
        return view('pages.index',compact('username'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //Student::create($request->all());
      $validatedData=$request->validate([
        'student_name'=>'required |string|max:25',
        'registration_id'=>'required',
        'student_department'=>'required'

      ]);
      $student=New Student;
      $student->student_name=$request->student_name;
      $student->registration_id=$request->registration_id;
      $student->student_department=$request->student_department;
      $student->info=$request->info;
      $student->save();
         return redirect()->route('index')
                         ->with('success','Student created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $id)
    {//dd($id->toArray());
      //$student_info=Student::find($id);
      //dd($student_info->toArray());
      return view('pages.edit',compact('id'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $student=Student::find($id);
      $student->student_name=$request->student_name;
      $student->registration_id=$request->registration_id;
      $student->student_department=$request->student_department;
      $student->info=$request->info;
      $student->save();

      return redirect()->route('index')
                      ->with('success','Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $id)
    {
      //dd($id->toArray());
      $id->delete();
      return redirect()->route('index')
                      ->with('success','Student Deleted successfully');

    }
}
