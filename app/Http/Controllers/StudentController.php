<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students=Student::paginate(10);
        return view('students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'gender' => 'required|in:Male,Femail,Other',
            'contact_number' => 'required|string|max:15',
            'email' => 'required|email|unique:Students,email',
            'address' => 'required|string',
        ]);
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
    public function edit(Student $student)
    {
        return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $validate = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'gender' => 'required|in:Male,Femail,Other',
            'contact_number' => 'required|string|max:15',
            'email' => 'required|email|unique:Students,email', $student->stu_id,
            'address' => 'required|string',
            ]);
            $student->update($validate);

            return redirect()->route('student.index')->with('success','Student updated successfully!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Student::delete();
        return redirect()->route('studrnt.index')->with('success','Student deleted successfully!');

    }
}