<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PayUService\Exception;
use Illuminate\Validation\Rule;
use App\Models\User;
use Auth;

class AccountController extends Controller
{
    public function profile_update(REQUEST $request) {
        try { 
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:30',
            'last_name' => 'required|string|max:30',
            'nick_name' => 'required|string|max:30',
            'college' => 'required',
            'state' => 'required',
            'email' => 'required','email',Rule::unique('users')->ignore(auth()->user()->id),
        ]);
        $user = auth()->user();

        $user->update([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'name' => $validatedData['first_name']." ". $validatedData['last_name'],
            'nick_name' => $validatedData['nick_name'],
            'college' => $validatedData['college'],
            'state' => $validatedData['state'],
            'email' => $validatedData['email'],
        ]);
    
        flashy()->success('Profile Has been Updated', '#');
        return redirect()->back();
    } catch (\Exception $e) {
        flashy()->error('Profile Has been Updated', '#');
        return $e->getMessage();
     }
    }
}
