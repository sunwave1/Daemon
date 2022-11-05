<?php

namespace App\Http\Livewire;

use App\Models\Account;
use App\Models\DaemonAccount;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class FormPostRegister extends Component
{
    public $email;
    public $name;
    public $password;

    protected function rules() {
        return [
            'name' => 'required|min:2|max:12|unique:daemon_accounts',
            'email' => 'required|unique:daemon_accounts',
            'password' => 'required|min:5'
        ];
    }

    public function submit() {
        $this->validate();

        DaemonAccount::create([
            'name' => $this->name,
            'password' => Hash::make($this->password),
            'email' => $this->email
        ]);
        Account::create([
            'name' => $this->name,
            'password' => sha1($this->password)
        ]);
        return redirect()->route('home.login');
    }

    public function render() {
        return view('livewire.form-post-register');
    }
}
