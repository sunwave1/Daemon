<?php

namespace App\Http\Controllers\AuthExternal;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    //
    public function redirect($driver){
        Validator::validate(compact('driver'), ['driver' => 'required|in:facebook|google']);
        return Socialite::driver($driver)->redirect();
    }

    public function callback($driver){
        $socialite_user = Socialite::driver($driver)->user();
        dd($socialite_user);
    }
}
