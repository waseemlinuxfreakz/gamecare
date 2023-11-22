<?php
namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Services\PayUService\Exception;
use Illuminate\Support\Facades\Log;


class RegisterUser extends Component
{
    public $first_name;
    public $last_name;
    public $nick_name;
    public $college;
    public $newsletter='';
    public $email;
    public $password;
    public $password_confirmation;
    public $registrationComplete=false;
    public $showPassword = false;
    public function render()
    {
        return view('livewire.register-user');
    }

    public function register()
    {
    
        $validatedData = $this->validate([
            'first_name' => 'required|string|max:30',
            'last_name' => 'required|string|max:30',
            'nick_name' => 'required|string|max:30',
            'college' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'name' => $validatedData['first_name']." ". $validatedData['last_name'],
            'nick_name' => $validatedData['nick_name'],
            'college' => $validatedData['college'],
            'email' => $validatedData['email'],
         
            'password' => Hash::make($validatedData['password']),
        ]);
        $this->registrationComplete=true;
        session()->flash('message', 'User registered successfully!');
   
      
    }
    public function togglePasswordVisibility()
    {
        $this->showPassword = !$this->showPassword;
    }
}
