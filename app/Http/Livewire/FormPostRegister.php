<?php

namespace App\Http\Livewire;

use App\Models\Account;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class FormPostRegister extends Component
{
    public $email;
    public $name;
    public $password;

    protected function rules() {
        return [
            'name' => 'required|min:2|max:12|unique:accounts',
            'email' => 'required|unique:accounts',
            'password' => 'required|min:5'
        ];
    }

    public function submit() {
        $this->validate();
        Account::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password), //sha1($this->password),
                'password_daemon' => Hash::make($this->password)
        ]);
        redirect()->route('home.login');
    }

    public function render() {
        return view('livewire.form-post-register');
    }
}
