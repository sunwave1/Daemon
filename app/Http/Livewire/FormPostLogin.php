<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FormPostLogin extends Component
{
    public $name;
    public $password;

    protected function rules() {
        return [
           'name' => 'required',
           'password' => 'required'
        ];
    }

    public function submit(){
        if(Auth::attempt([
            'name' => $this->name,
            'password' => $this->password
        ])){
            session()->regenerate();
            redirect()->route('user.profile');
        } else {
            $this->addError('account', 'You credentials does not match. Please try again later');
        }
    }

    public function render() {
        return view('livewire.form-post-login');
    }
}
