<?php

namespace App\Http\Controllers;
use App\Models\Pation;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    
public function index(){
    $patients = Pation::all();
    return view('patients.index',compact('patients'));
}

public function create(){
    return view('patients.create');
    
}
public function store(Request $request){
    $Formfields=$request->validate([
        'nom'=>'required',
        'email'=>'required|email|unique:pations',
        'telephone'=>'required',
    ]);
    Pation::create($Formfields);
    return redirect()->route('patients.index')->with('success','patient ajouter');
    
}

public function show(Pation $patient){
    return view('patients.show',compact('patient'));
}
 public function edit(Pation $patient ){
    return view('patients.edit', compact('patient'));
 }

 public function update(Request $request ,Pation $patient){
     $Formfields=$request->validate([
        'nom'=>'required',
        'email'=>'required|email . $patient-|unique:pations,email,'.$patient->id,
        'telephone'=>'required',
    ]);
    $patient->update($Formfields);
    return redirect()->route('patients.index')->with('success','patient modifier');
 }

 public function destroy(Pation $patient){
    $patient->delete();
    return redirect()->route('patients.index')->with('success','patient supprimer');

 }


}


    



