<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\StudentFormRequest;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{
    public function index() {
        return view('student.dashboard'); 
    }
    public function create(){
        return view('admin.create');
    }
    public function store(StudentFormRequest $request){
        $data = $request->validated();
        $student = Student::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($request->password),
        ]);
        return redirect('/add-student')->with('message','Student Added Successfully');
    }
    public function show(){
        $students = Student::all();
        return view('admin.show', compact('students'));
    }
    public function edit($student_id){
        $student = Student::find($student_id);
        return view('admin.edit', compact('student'));
    }

    public function update(StudentFormRequest $request, $student_id){
        $data = $request->validated();

        $student = Student::where('id', $student_id)->update([
            'name' => $data['name'],
            'email' => $data['email'], 
            'password' => Hash::make($request->password),
        ]);
        return redirect('/students')->with('message','Student Updated Successfully');
    }

    public function destroy($student_id){
        $student = Student::find($student_id)->delete();
        return redirect('/students')->with('message','Student Delete Successfully');
    }




    
}
