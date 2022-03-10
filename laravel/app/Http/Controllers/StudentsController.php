<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student_detail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class StudentsController extends Controller
{
    //public function index()
    //{
       // $countries = \App\Models\Country::pluck('country_name','id');
       // return view('Home.index')->with('countries',$countries);
    //}
function welcome (){
        $student_details = Student_detail::all();
        return View('student.student', compact('student_details'));

       $countries= \App\Models\Country::pluck('country_name','id');
        return view('student.student')->with('countries',$countries);
    }

    function store (Request $request){
     
       try{
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'email|max:255',
            'phone' => 'required',
            'age' => 'required',
            'city' => 'required',
            'password' => 'required',
           'address' => 'required',
        ]);
        

        if ($validator->fails()) {
            return redirect('/student')
                    ->withErrors($validator)
                    ->withInput();
        }       
        DB::beginTransaction();
            $student = new \App\Models\Student();
            $student->name = $request->name;
            $student->email = $request->email;
            $student->phone = $request->phone;
            $student->password = $request->password;
            $student->save();
           
            
//            Storage::put('file.jpg', $contents);

            $Student_detail = new \App\Models\Student_detail();
            $Student_detail->student_id = $student->id;
            $Student_detail->age = $request->age;
            $Student_detail->address = $request->adress;
            $Student_detail->city = $request->city;
            $Student_detail->state = $request->state;
            $student_detail->country = $request->country;
            $Student_detail->pincode = $request->pincode;
            $Student_detail->save();
            DB::commit();
        }
         catch (Exception $ex) {;
            DB::rollBack();
        

      
         \Session::flash('success', 'Student details successfully saved !');
        return redirect()->back();
    }
}
}