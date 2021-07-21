<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function store(Request $request)
    {
        $info = new Booking();
        $info->to= request('to');
        $info->from= request('from');
        $info->passengers= request('passengers');
        $info->contact= request('contact');
        $info->Mode= request('Mode');

        
        if ($info->save()) {
            $request->session()->flash('success', ' Booking Successfully Created');
        }else{
            $request->session()->flash('error', ' Error in Booking');
        }
        

        return redirect()->route('home');
    }

    
}
