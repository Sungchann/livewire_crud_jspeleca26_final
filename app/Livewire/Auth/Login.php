<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Login extends Component
{
    public $username = '';
    public $password = '';

    public function render()
    {
        return view('livewire.auth.login')->layout('components.layouts.app', [
            'title' => 'Login',
            'bodyClass' => 'auth-background',
            'showNav' => false
        ]);
    }

    public function login(){
        $this->validate([
            'username' => 'required|string',
            'password' => 'required'
        ]);

        if(Auth::attempt(['username' => $this->username, 'password' => $this->password])){
            Session::regenerate();
            return $this->redirect('/products', navigate: true);
        };

        $this->addError('username', 'Invalid credentials.');
    }
}
