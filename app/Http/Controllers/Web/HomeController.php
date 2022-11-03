<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('web.home');
    }

    public function terms() {
        return view('web.terms');
    }

    public function highscores() {
        return view('web.highscores');
    }

    public function download() {
        return view('web.download');
    }

    public function guilds() {
        return view('web.guilds');
    }

    public function register() {
        return view('web.register');
    }

    public function login() {
        return view('web.login');
    }
}
