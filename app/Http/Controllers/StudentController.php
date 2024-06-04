<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentFormRequest;
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
        return view('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentFormRequest $request)
    {
        $data = $request->validated();

        $student = new Student;

        $student->name = $data['stu_name'];

        $student->age = $data['stu_age'];

        $student->department = $data['stu_depart'];

        $student->address = $data['stu_add'];

        $student->save();

        return redirect(route('student.index'))->with('status','Student Added Successfully!');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($student_id)
    {
        $student = Student::find($student_id);
        return view('student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentFormRequest $request,$student_id)
    {
        $data = $request->validated();

        $student = Student::find($student_id);

        $student->name = $data['stu_name'];

        $student->age = $data['stu_age'];

        $student->department = $data['stu_depart'];

        $student->address = $data['stu_add'];

        $student->update();

        return redirect(route('student.index'))->with('status','Student Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
