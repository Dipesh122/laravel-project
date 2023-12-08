<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;
use Symfony\Contracts\Service\Attribute\Required;

class StudentController extends Controller
{
    public function index() {
        $students = Student::all();
        return view('student.student',['students'=> $students]);
    }

    public function store(Request $request) {
        $parameters = $request->validate([
                'name'=> 'required',
                'age' => 'required',
                'contact' => 'nullable'
        ]);
        $result = Student::create($parameters);
        return redirect('student.student')->with('Success','Student Created Successfully');
    }

    public function edit(string $id)
    {
        $student = Student::find($id);
        return view('student.edit', ['student'=> $student]);
    }

    public function modify(Student $student, Request $request) {

        $parameters = $request->validate([
            'name' => 'required',
            'age' => 'required',
            'contact' => 'nullable'
        ]);
        $student->update($parameters);
        return redirect('/student');
    }
}
