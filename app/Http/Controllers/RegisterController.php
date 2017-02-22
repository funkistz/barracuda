<?php

namespace funkistz\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){

      return view('register');
    }

    public function insert(Request $request){

      $this->validate($request, [
        'first_name' => 'required|max:255',
        'last_name' => 'required|max:255',
        'id' => 'required|unique:user|max:255',
        'email' => 'required|unique:user|max:255',
        'password' => 'required|max:255|min:6',
        'confirmpassword' => 'required|same:password',
        'gender' => 'required'
      ]);

      $user = new \funkistz\User;
      $user->first_name         = $request->input('first_name');
      $user->last_name         = $request->input('last_name');
      $user->id = $request->input('id');
      $user->email         = $request->input('email');
      $user->password         = $request->input('password');
      $user->gender = $request->input('gender');
      $user->save();

      if($user){

        echo "Student register successfully.<br/>";
        echo '<a href = "../addstudent">Click Here</a> to go back.';
      }else{
        App::abort(500, 'Error');
      }
    }
}
