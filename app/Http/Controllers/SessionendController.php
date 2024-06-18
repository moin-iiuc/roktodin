<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionendController extends Controller
{
    //
    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
