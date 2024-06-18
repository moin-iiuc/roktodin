<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Gate;

use App\Models\User;

class SessionController extends Controller
{
    //
    public function index()
    {
        if(Auth::check()){
            return redirect('/');
        }
        return view('session.index');
    }
    public function store()
    {

        $data = request()->validate([
            'phone' =>['required','min:11'],
            'password' =>'required',
        ]);
        if(!Auth::attempt($data)){
            throw ValidationException::withMessages([
                'email' =>'Phone/Password does not match'
            ]);
        };
        
        request()->session()->regenerate();
        return redirect('/');
        
    }
    public function show(User $user)
    {
        Gate::authorize('access_user');
        $user_is=Auth::user();
        return view('session.show',['user'=>$user_is]);
    }
    public function edit(User $user){

        
        /*if(Auth::guest()){
            return redirect('/session');
        }*/
        Gate::authorize('access_user');
        /*if($employer->isNot(Auth::user())){
            abort(403);
        }*/
        $user_is=Auth::user();
        return view('session.edit',['user'=>$user_is]);
    }
    public function update(User $user)
    {
        Gate::authorize('access_user');
        request()->validate([
            'name'=>['required','min:4'],
            'email'=>['required','email'],
            'nid'=>'required',
            'phone'=>['required','min:11'],
            'city'=>'required',
            'thana'=>'required',
            'password'=>['required','min:6','max:8','confirmed']
    
        ]);
        $user=User::find(Auth::user()->id);
        $user->update([
            'name'=>request('name'),
            'email'=>request('email'),
            'nid'=>request('nid'),
            'phone'=>request('phone'),
            'city'=>request('city'),
            'thana'=>request('thana'),
            'password'=>request('password')
        ]);
        return redirect('/');
    }
    
    public function destroy(User $user)
    {
        $user=User::find(Auth::user()->id);
        $user->delete();
        return redirect('/');
    }

}
