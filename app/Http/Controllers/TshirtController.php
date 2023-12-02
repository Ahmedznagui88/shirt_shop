<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\Tshirt;
use App\Models\Category;
use App\Mail\ThankYouMail;
use Illuminate\Http\Request;
use App\Http\Requests\TshirtRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class TshirtController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index' , 'show');
    }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tshirts = Tshirt::orderBy('created_at' , 'desc')->get();
        return view('tshirt.index', compact('tshirts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genders = Gender::all();
        $categories = Category::all();
       return view('tshirt.create' , compact('genders' , 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TshirtRequest $request)
    {
        $tshirt = Tshirt::create([
            'name' => $request->name,
            'brand' => $request->brand,
            'logo' => $request->file('logo')->store('public/logo'),
            'size' => $request-> size,
            'user_id' => Auth::user()->id,
            'gender_id' => $request->gender_id,
        ]);
        $tshirt->categories()->attach($request->categories);
        
        Mail::to(Auth::user()->email)->send(new ThankYouMail());

        return redirect(route('tshirt.index'))->with('message', 'You have succesfully add a new product');

        
    }

    /**
     * Display the specified resource.
     */
    public function show(Tshirt $tshirt)
    {
       return view('tshirt.show' , compact('tshirt'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tshirt $tshirt)
    {
        $genders = Gender::all();
        $categories = Category::all();
        return view('tshirt.edit' , compact('tshirt', 'genders', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tshirt $tshirt)
    {
        $tshirt->update([
            'name' => $request->name,
            'brand' => $request->brand,
            'logo' => $request->file('logo') ? $request->file('logo')->store('public/logo') : $tshirt->logo,
            'size' => $request-> size,
            'user_id' => Auth::user()->id,
            'gender_id' => $request->gender_id,
        ]);
        /* $tshirt->categories()->detach();
        $tshirt->categories()->attach($request->categories); */
        $tshirt->categories()->sync($request->categories);
        return redirect(route('tshirt.index' , $tshirt))->with('message' , 'You have succesfully updated your product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tshirt $tshirt)
    {
        $tshirt->categories()->detach();
        $tshirt->delete();
        return redirect(route('tshirt.index' , $tshirt))->with('message' , 'You have DELETED your product');
    }
}
