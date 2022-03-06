<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Login extends Component
{
    public $username;
    public $password;
    public function render()
    {
        return view('livewire.admin.login')->layout('layouts.admin');
    }

    public function login()
    {
        $user=User::find(1);
        if ($this->username==$user->name && $this->password==$user->password){
            session()->put('admin', $this->username);
            session()->save();
            $this->redirect(route('dashboard'));
        }else{
            Session::flash('worng_pass', 'Please enter correct credentials');
        }
    }
}
