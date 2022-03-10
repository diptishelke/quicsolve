<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function addform() {
        $form = \App\Models\Form::get();
        return view('Form.index')
               ->with('forms',$form);
    }
    
    public function save(Request $request) {
        $input = $request->all();
       
        
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $age = $request->input('age');
       $city = $request->input('city');
        $state= $request->input('state');
        $pincode= $request->input('pincode');
        $password= $request->input('password');
        $image= $request->input('image ');
        
        $form = new \App\Models\Form();
        $form->field['name'] = $name;
        $form->field['email'] = $email;
        $form->field['phone'] = $phone;
        $form->field['age'] = $age;
        $form->field['city'] = $city;
        $form->field['state'] = $state;
        $form->field['pincode'] = $pincode;
        $form->field['password'] = $password;
        $form->field['image'] = $image;
        $form->add();
    }
}