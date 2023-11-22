<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->intended('account');

        }
        return view('welcome');
    }
    public function home($value = '')
    {
        // code...
    }

    public function authenticate(Request $request)
    {
       
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
            flashy()->success('Login Successfully ...', '#');
            
            return redirect()->intended('account');

        }
        flashy()->error('Invalid Username or Password ', '#');
        return back()->with('loginError', 'Login Failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'You have been log out!');
    }

    public function register()
    {
        return view('register');
    }

    public function registerUser(Request $request)
    {
        $validatedData = $request->validate([
            "username" => ['string:255', 'required', 'unique:users,username'],
            "password" => ['required'],
            "nama_orangtua" => ['required', 'string:255'],
            "nohp_orangtua" => ['required'],
            "name" => ['required'],
            "alamat" => ['required'],
            "tkt_pendidikan" => ['required'],
            "email" => ['required', 'email:rfc,dns', 'unique:users,email'],
        ]);

        if ($validatedData) {
            $validatedData["password"] = Hash::make($validatedData["password"]);

            User::create($validatedData);

            return redirect('/')->with('success', 'Registered Successful!');
        }

        return back()->with('error', 'Registration failed!');

    }
    public function resetPassword($key)
    {
        return view('reset-password', ['key' => $key]);
    }
    public function resetPasswordCh(Request $request)
    {
        $validatedData = $request->validate([
            "password" => ['required', 'confirmed', 'min:3'],
        ]);

        if ($validatedData) {
            $User = User::find(base64_decode($request->key));
            if ($User) {
                $User->update(['password' => Hash::make($validatedData["password"])]);
                flashy()->info('Password has been Updated!', '#');
            } else {

                flashy()->error('Invalid User Id', '#');

            }
        }
        return back()->with('error', 'Password has been not Updated!');
    }
    public function profile()
    {
        return view('admin.profile');
    }

}
