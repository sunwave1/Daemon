<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormPostLogin extends Component
{
    public $name;
    public $password;

    public function submit(){

    }

    public function render() {
        return view('livewire.form-post-login');
    }
}
