<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SignupController extends Controller
{
    //
    public function index()
    {
        return view('signup.signup');
    }
    public function store()
    {
        request()->validate([
            'name'=>['required','min:4'],
            'email'=>['required','email'],
            'nid'=>'required',
            'phone'=>['required','min:11'],
            'city'=>'required',
            'thana'=>'required',
            'password'=>['required','min:6','max:8','confirmed']
    
        ]);
        $user=User::create([
            'name'=>request('name'),
            'email'=>request('email'),
            'nid'=>request('nid'),
            'bg'=>request('bg'),
            'phone'=>request('phone'),
            'city'=>request('city'),
            'thana'=>request('thana'),
            'blood_last_given'=>request('bg_given'),
            'password'=>request('password'),
        ]);
        Auth::login($user);
        return view('session.show',['user'=>$user]);
    }
    
}
