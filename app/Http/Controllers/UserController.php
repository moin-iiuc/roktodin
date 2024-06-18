<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users_info;

class UserController extends Controller
{
    //
    
    
    
    
    public function destroy(users_info $user)
    {
        $user->delete();
        return redirect('/');
    }
}
