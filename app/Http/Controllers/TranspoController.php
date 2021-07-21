<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transpo;
class TranspoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transpos = Transpo::all();

        return view('transpos.index')->with('transpos', $transpos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transpos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transpo = new Transpo();
        $transpo->model= request('model');
        $transpo->color= request('color');
        $transpo->plate= request('plate');
        $transpo->registration= request('registration');
        $transpo->capacity= request('capacity');

        
        if ($transpo->save()) {
            $request->session()->flash('success', $transpo->model . ' added to list.');
        }else{
            $request->session()->flash('error', ' Error in creating');
        }
        

        return redirect()->route('transpos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transpo = Transpo::findOrFail($id);
        return view('transpos.edit', [
            'transpo' => $transpo
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { 
        $transpo = Transpo::findOrFail($id);
        $transpo->model= request('model');
        $transpo->color= request('color');
        $transpo->plate= request('plate');
        $transpo->registration= request('registration');
        $transpo->capacity= request('capacity');

        if($transpo->save()){
            $request->session()->flash('success', $transpo->model . ' has been uppdated.');
        }else{
            $request->session()->flash('error', 'Error in updating');
        }
        return redirect()->route('transpos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $transpo = Transpo::findOrFail($id);

        if($transpo->delete()){
            $request->session()->flash('success', 'Deletion Successful');
        }else{
            $request->session()->flash('error', 'Error in deleting' . $transpo->model);
        }

        return redirect()->route('transpos.index');
    }
}
