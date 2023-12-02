<?php

namespace App\Http\Controllers;

use App\Models\Tshirt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function home(){
        $tshirts = Tshirt::orderBy('created_at', 'desc')->take(3)->get()
;        return view('welcome', compact('tshirts'));
    }

    public function profile(){
        return view('profile');
    }

    public function destroy(){
        foreach(Auth::user()->tshirts() as $tshirt){
            $tshirt->categories()->detach();
        }


        Auth::user()->delete();
        
        return redirect('home')->with('message' , 'We see you soon');
    }
}
