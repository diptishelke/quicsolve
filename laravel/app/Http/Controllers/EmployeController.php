<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employe;

class EmployeController extends Controller
{
    public function index(){

        $employe = employe::all();

        return view('employe.index',compact('Employe'));
    }

    public function create(){
        return view('employe.create');
    }

    public function storeEmploye(){

        $Employe= new Employe();

        $name = $request->('name');
        $email =$request->('email');

        $employe->save();

        

    }

}