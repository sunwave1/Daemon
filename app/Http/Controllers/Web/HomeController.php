<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\PlayerDeath;
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

    public function recover() {
        return view('web.recover');
    }

    public function lastkills() {
        return view('web.lastkills');
    }

    public function onlines() {
        return view('web.online');
    }

    public function spells() {
        return view('web.recover');
    }

    public function monsters() {
        return view('web.recover');
    }

    public function items() {
        return view('web.recover');
    }

    public function updates() {
        return view('web.recover');
    }

    public function banneds() {
        return view('web.recover');
    }

    public function shop() {
        return view('web.shop');
    }
}
