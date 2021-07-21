<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Role;
use App\Driver;

class DriverController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   //view('drivers.index')->with('drivers', $drivers)
 
        // $drivers = User::whereHas(
        //     'roles', function($q){
        //         $q->where('name', 'staff');
        //     }
        // )->get();
        
        // $drivers->join('drivers' , 'drivers.user_id', 'user_id')
        // ->get();
        //view('schedule')->with('drivers', $drivers);
        
        $drivers = Driver::all();

        // $drivers=  DB::table('users')
        // ->join('drivers', 'drivers.user_id', 'users.id')
        // ->get();
   
        return view('drivers.index')->with('drivers', $drivers);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('drivers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $driver = new Driver();
        $driver->name= request('name');
        $driver->birthdate= request('birthdate');
        $driver->age    = request('age');
        $driver->address= request('address');
        $driver->license= request('license');
        $driver->contact= request('contact');
        $driver->gender = request('gender');
        
       

         if($driver->save()){
           
            $request->session()->flash('success, details has been updated.');
        }else{
            $request->session()->flash('error', 'Error in updating');
        }

         return redirect()->route('drivers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
    //    return view('drivers.details')->with('details', $details);
    //    $user = User::findOrFail($id);
           
     
        // $driver = DB::table('drivers')  
        // ->where('user_id', $id)
        // ->get();
        // if(count($driver)>0){
        //     $user = DB::table('users')
        //     ->where('id', $driver[0]->user_id)
        //     ->get();
        
    
        //     return view('drivers.details')->with([
        //     'driver' => $driver,
        //     'user'    => $user
            
        //     ]);
        // }

        // $user = User::findOrFail($id);

        // return view('drivers.details')->with([
        //     'user' => $user
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $driver = Driver::findOrFail($id);
        return view('drivers.edit', [
            'driver' => $driver
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
        

        $driver = Driver::findOrFail($id);
        $driver->name=request('name');
        $driver->age= request('age');
        $driver->birthdate= request('birthdate');        
        $driver->gender= request('gender');
        $driver->contact= request('contact');
        $driver->license= request('license');
        $driver->address= request('address');

        if($driver->save()){
            $request->session()->flash('success', $driver->name . ' has been uppdated.');
        }else{
            $request->session()->flash('error', 'Error in updating');
        }
        return redirect()->route('drivers.index');

        // if($driver->save()){
        //     $user = DB::table('users')
        //     ->where('id', $driver->user_id)
        //     ->get();
        //     $request->session()->flash('success', $user[0]->name . '  s datails has been updated.');
        // }else{
        //     $request->session()->flash('error', 'Error in updating');
        // }
        
        // return redirect()->route('drivers.show', $driver->user_id); 
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    // {
    //    $user = User::find($id);

    //    $user->roles()->detach();

    //    $user->details->delete();

    //     if($user->delete()){
    //         $request->session()->flash('success', 'deletion successful');
    //     }else{
    //         $request->session()->flash('error', 'Error in deleting' . $driver->name);
    //     }

    //     return redirect()->route('drivers.index');

    // }
    {
        $driver = Driver::findOrFail($id);

        if($driver->delete()){
            $request->session()->flash('success', 'Deletion Successful');
        }else{
            $request->session()->flash('error', 'Error in deleting' . $driver->id);
        }

        return redirect()->route('drivers.index');
    }

}
