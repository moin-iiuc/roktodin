<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class SearchController extends Controller
{
    //
    public function index(Request $request)
    {
        Gate::authorize('access_user');
        $data=$request->input('search');
        $thana=Auth::user()->thana;
        $peeps=User::where('bg',$data)->get();
        return view('search',['peeps'=>$peeps]);
    }
}
