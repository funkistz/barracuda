<?php

namespace funkistz\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;

class LoginController extends Controller
{
    public function index(){

      return view('login');
    }

    public function authenticate(Request $request){

      $this->validate($request, [
        'id' => 'required',
        'password' => 'required',
      ]);

      $user = \funkistz\User::where('id', '=', $request->input('id'))
            ->where('password', '=', $request->input('password'))
            ->first();

      if($user === null){
        return Redirect::back()->withErrors(['Wrong id/password']);
      }else{
        return redirect('/');
      }

    }
}
