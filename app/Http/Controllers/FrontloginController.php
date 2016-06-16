<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Front_login;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;

class FrontloginController extends Controller {

    public function __construct() {
       // $this->middleware('auth');
    }

    public function index() {
        return view('frontlogin.index');
    }
    public function signup() {
        return view('frontlogin.signup');
    }
    public function forgot_password() {
        return view('frontlogin.forgot_password');
    }
    public function registration(Request $request) {
         $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'password' => 'required|min:3|confirmed',
            'phone' => 'required|numeric',
            'email' => 'required|email|unique:users',
            
        ]);
         // $password = 
        $input = $request->all();
        DB::table('users')
            
            ->insert(array(
                'name' => $input['fname'].' '.$input['lname'],
                'email' => $input['email'],
                'phone' => $input['phone'],
                'fname' => $input['fname'],
                'lname' => $input['lname'],
                'password' => bcrypt($input['password']),
				'type' => 1
                ));
        return redirect('login');
        
    }
}
