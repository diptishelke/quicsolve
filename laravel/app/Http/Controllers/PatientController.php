<?php

namespace App\Http\Controllers;

use App\Models\patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('patient.patient_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Name, Email, Phone, Age, Gender, Address, Photo

        $res=new Patient;

        $res->name=$request->input('name');
        $res->email=$request->input('email');
        $res->phone=$request->input('phone');
        $res->age=$request->input('age');
        $res->address=$request->input('address');

        $res->save();

        $request->session()->flash('msg','data submitted');
        return redirect('patient_show');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(patient $patient)
    {
        return view ('patient.patient')->with('patientArr',patient::all());
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(patient $patient,$id)
    {
        return view ('patient.patient_edit')->with('patientArr',patient::find($id));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,patient $patient)
    {
        $res=Patient::find($request->id);

        $res->name=$request->input('name');
        $res->email=$request->input('email');
        $res->phone=$request->input('phone');
        $res->age=$request->input('age');
        $res->address=$request->input('address');

        $res->save();

        $request->session()->flash('msg','data updated');
        return redirect('patient_show');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(patient $patient,$id)
    {
        patient::destroy(array('id',$id));

        return redirect('patient_show');
    }
}
