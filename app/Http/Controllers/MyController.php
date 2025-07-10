<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
class MyController extends Controller
{
    public function index(){
        return view('add');
    }
    public function create(Request $req){
     $student= new Students();
     $req->validate([
        "name"=>"required",
        "email"=>"required|email|unique:Students",
        "password"=>"required"
     ]);
     $student->name = $req->name; 
     $student->email = $req->email; 
     $student->password = $req->password; 
     $student->save();
     return redirect("/") ;
    }
    public function select(){
        $student = new students();
        $allstudent = $student::all();
        return view("select" ,compact("allstudent"));
    }
    public  function editData($id){
        $student = new students();
        $findStudent = $student::find($id);
        return view("edit" , compact("findStudent"));
    }
    public function update(Request $req ,$id){
        $student = new students();
        $findStudent = $student::find($id);
        $findStudent->name = $req->name;
        $findStudent->email = $req->email;
        $findStudent->password = $req->password;
        $findStudent->save();
        return redirect("select");
    }
    public function Delete($id){
        $student = students::findOrFail($id);
        $student->delete();
        return redirect("select");

    }
}
