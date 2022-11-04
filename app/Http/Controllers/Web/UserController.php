<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function profile() {
        return view('web.user.profile');
    }

    public function create() {
        return view('web.user.createcharacter');
    }

    public function changePassword() {
        return view('web.user.changepassword');
    }

    public function logout(){

    }
}
