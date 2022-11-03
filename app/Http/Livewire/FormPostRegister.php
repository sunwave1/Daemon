<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormPostRegister extends Component
{
    public $email;
    public $name;
    public $password;

    protected function rules() {
        return [
            'name' => 'required|min:2|max:12',
            'email' => 'required',
            'password' => 'required|min:5|max:12'
        ];
    }

    public function submit() {
        $this->validate();
        // create ...
    }

    public function render() {
        return view('livewire.form-post-register');
    }
}
