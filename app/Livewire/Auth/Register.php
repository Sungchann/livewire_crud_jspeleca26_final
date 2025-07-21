<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    public $username = '';
    public $password = '';
    public $password_confirmation = '';

    public function render()
    {
        return view('livewire.auth.register')->layout('components.layouts.app',[
            'title' => 'Register',
            'bodyClass' => 'auth-background',
            'showNav' => false
        ]);
    }

    public function register(){
        $this->validate([
            'username' => 'required|string|min:3|unique:users,username',
            'password' => 'required|confirmed|min:6'
        ]);
        
        $user = User::create([
            'username' => $this->username,
            'password' => Hash::make($this->password)
        ]);

        Auth::login($user);

        return $this->redirect('/products', navigate: true);
    }

}
