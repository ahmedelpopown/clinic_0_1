<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Models\doctors;
use App\Models\majors;
use App\Models\reservations;
use Illuminate\Http\Request;
use Redirect;

class ReservationControllerSite extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReservationRequest $request     ) 
    {
         
        // dd($request->all() );
        // $doctor = doctors::find($id);
    // if (!$doctor) {
        // return Redirect()->back();
    // }

    $data=$request->validated();
    //    dd($data);
        // $id = doctors::find($id);

    reservations::create($data);

     
    }

    /**
     * Display the specified resource.
     */
    public function show(  $doctor)
    {
        $doctors =  doctors::find($doctor);
         foreach ( $doctors->all() as  $value) {

            // dd($value->id);
        } ;
        // $majors =  majors::get();
         
 
    return view('web.site.pages.single.index',compact( 'value')    );
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
