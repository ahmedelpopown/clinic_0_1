<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\doctorsRequest;
 
 use App\Http\Requests\ReservationRequest;
 use App\Models\doctors;
 
 use App\Models\majors;
 use App\Models\reservations;
 use App\Models\User;
 use Illuminate\Http\Request;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $doctor=doctors::get();
     return response()->json([
        'success'=>true,
        'message'=>'data Retrieved successfully',
        'data'=>$doctor
     ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(doctors $request,doctorsRequest $reservations)
    {
 
    $data=  $reservations->validated();
     
    doctors::create($data);
    return response()->json([
        'success'=>true,
        'message'=>'data Retrieved successfully',
        'data'=>$data
        ])  ;
        
    }

    /**
     * Display the specified resource.
     */
    public function show(doctors $doctors)
    {
         $data=$doctors->first();
            return response()->json([
        'success'=>true,
        'message'=>'doctors Retrieved successfully',
        'data'=>$data
     ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(doctorsRequest $request,doctors $doctors  )
    {
        $data=$doctors->first();
        $data->update($request->validated());
        return response()->json([
            'success'=>true,
            'message'=>'doctors Retrieved successfully',
            'data'=>$data,
         ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(doctors $doctors)
    {
        $data=$doctors->first();
        $data->delete();
        return response()->json([
            'success'=>true,
            'message'=>'doctors deleted successfully',
          
         ]);
    }
}
