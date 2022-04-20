<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserData;
class FormController extends Controller
{
    public function formdata(Request $request){
        $user = new UserData;
        $user->Name=$request['Name'];
        $user->Email=$request['Email'];
        $user->Fathername=$request['Fathername'];
        $user->Qualification=$request['Qualification'];
        $user->Dob=$request['Dob'];
        $user->Course=$request['Course'];
        $user->save();
         return redirect('/Admin/userlist');
    }
    
    public function showdata(){
        $data = UserData::all();
        $array = compact('data');
        return view('Admin.Userlist')->with($array);
    }
    public function edit($id){
        $user = UserData::find($id);
        $data = compact('user');
        return view('EditForm')->with($data);
    }
    public function update(Request $request,$id){
        $user = UserData::find($id);
        $user->Name=$request->input('Name');
        $user->Fathername=$request->input('Fathername');
        $user->Qualification=$request->input('Qualification');
        $user->Dob=$request->input('Dob');
        $user->Course=$request->input('Course');
        $user->update();
        return redirect('/Admin/userlist')->with('status','Data has updated');
    }   
    public function delete($id){
        $user = UserData::find($id);
        if(!is_null($user)){
            $user->delete();
        }
        return redirect('/Admin/userlist');
    } 
}
