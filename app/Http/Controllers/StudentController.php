<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('student', ['students'=>$students, 'layout'=>'create']);
    }


    public function create()
    {
        $students = Student::all();
        return view('student', ['students'=>$students, 'layout'=>'create']);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->first_name = $request->input('first_name');
        $student->last_name = $request->input('last_name');
        $student->age = $request->input('age');
        $student->course = $request->input('course');
        $student->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::find($id);
        $students = Student::all();
        return view('student', ['students'=>$students, 'student'=>$student,'layout'=>'show']);
    }



    public function edit($id)
    {
        $student = Student::find($id);
        $students = Student::all();
        return view('student', ['students'=>$students, 'student'=>$student,'layout'=>'edit']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::find($id);
        $student->first_name = $request->input('first_name');
        $student->last_name = $request->input('last_name');
        $student->age = $request->input('age');
        $student->course = $request->input('course');
        $student->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/');
    }
}
