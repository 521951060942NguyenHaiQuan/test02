<?php

namespace App\Http\Controllers;


use App\Models\Student;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //Lay tat ca sinh vien cho vao bang student
    public function get_all_student(){
        $students=Student::all();
        return view(view:'students.student_manage',data:['students'=>$students]);
    }
    public function create_student(){
        return view(view:'students.create_student');

    }

    public function edit($student){
        $object=Student::where('id',$student)->first();
        return view('students.edit', ['student'=>$object]);
    }
    public function update(Request $request, $student){
        $student = Student::query()->findOrFail($student);
        $student->fill($request->except(['_token','_method']));
        $student->save();

        return redirect()->route('get_all_student');
    }
    //Luu lai sinh vien them
    public function store_student(Request $request){
        $object = new Student();
        $object->full_name=$request->get('full_name');
        $object->birthday=$request->get('birthday');
        $object->address=$request->get('address');
        $object ->save();
//$request->except(['_created_at','updated_at','_token','method'])

    }
    public function destroy(Student $student){
        Student::destroy($student->id);
        return redirect()->route('get_all_student');
    }
    public function home(){
        return view('students.home');
    }
}
