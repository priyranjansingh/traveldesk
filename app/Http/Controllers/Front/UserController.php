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

class UserController extends Controller {

    public function __construct() {
        
    }

    public function index(Request $request) {
        return view('frontend.myaccount');
    }

    public function logout(Request $request) {
        $request->session()->forget('user_email');
        return redirect('user/login');
    }

}
