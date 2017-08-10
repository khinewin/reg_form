<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Auth;

class StudentController extends Controller
{
    public function postRegister(Request $request){
        $this->validate($request,[
           'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email|unique:students',
            'phone_number'=>'required',
            'course'=>'required',
            'location'=>'required'
        ]);
        $std=new Student();
        $std->first_name=$request['first_name'];
        $std->last_name=$request['last_name'];
        $std->email=$request['email'];
        $std->phone_number=$request['phone_number'];
        $std->course=$request['course'];
        $std->location=$request['location'];
        $std->save();
        return redirect()->back()->with('info','Your registration have been submitted. Thank you very much.');

    }
    public function getStudent(){
        $stds=Student::OrderBy('id', 'desc')->paginate('10');
        return view ('home')->with(['stds'=>$stds]);
    }
    public function getRemoveStudent($id){
        $std=Student::where('id', $id)->first();
        $std->delete();
        return redirect()->back()->with('info', 'The student you selected have been removed.');
    }
}
