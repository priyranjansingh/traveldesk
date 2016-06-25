<?php

namespace App\Http\Controllers\Front;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Country;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Validator;
use Input;
use DB;

class LoginController extends Controller {

    public function __construct() {
        
    }

    public function index() {
        return view('frontlogin.index');
    }

    public function login(Request $request) {

        $email = $request->email;
        $password = md5($request->password);
        session(['email' => $email, 'password' => $password]);

        $messages = [
            'foo' => 'Invalid Credentials',
        ];
        Validator::extend('foo', function($attribute, $value, $parameters) {
            $email = session('email');
            $password = session('password');
            $user = DB::table('users')
                    ->where('email', $email)
                    ->where('password', $password)
                    ->select('*')
                    ->first();
            if (empty($user)) {
                return false;
            } else {
                return true;
            }
        });

        $validator = Validator::make($request->all(), [
                    'email' => 'required|foo',
                    'password' => 'required',
                        ], $messages);




        if ($validator->fails()) {
            return redirect('user/login')
                            ->withErrors($validator)
                            ->withInput();
        }
        echo "final_here";
    }

    public function somethingElseIsInvalid($email, $password) {
        $email = $email;
        $password = md5($password);
        $user = DB::table('users')
                ->where('email', $email)
                ->where('password', $password)
                ->select('*')
                ->first();
        if (empty($user)) {
            return true;
        } else {
            return false;
        }
    }

}
