<?php

namespace App\Http\Controllers\site;
use App\Http\Controllers\Controller;

 use App\Http\Requests\doctorsRequest;
use App\Models\doctors;
 use App\Models\Majors;
 use Request;
 
class MajorControllerSite extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $majors = majors::orderBy('id', 'desc')->get();

        //  dd($majors); 
        
        $majors=Majors::get();
        
        response()->json([
            'success'=>true,
            'message'=>'data Retrieved successfully',
            'data'=>$majors
         ])  ;
         return   view('web.site.pages.majors.index', compact('majors'));
       
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $majors=majors::get();
        
        return view('web.admin.sections.doctors.index',compact('majors'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(doctorsRequest $request )
    {
        $data=$request->validated();
      
     dd($data);
     if($request->hasFile('image')){

        $file = $request->file('image');

        $fileName = $file->store('/doctors','public');

        $data['image'] = 'storage/'. $fileName;
    }
    
    // doctors::create($data);
    // return response()->json([
    //     'success'=>true,
    //     'message'=>'data Retrieved successfully',
    //     'data'=>$data
    //  ])  ;
    return redirect()->route('admin.doctors.index') ;


         }

    /**
     * Display the specified resource.
     */
    public function show(doctors $doctor)
    {
        return view('web.admin.sections.doctors.show',compact('doctor'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $doctor =  doctors::find($id);
        $majors =  majors::get();
         
        return view('web.admin.sections.doctors.edit',compact('doctor','majors'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $doctor = doctors::find($id);

        if ($doctor->image && file_exists(public_path($doctor->image))) {
            unlink(public_path($doctor->image));
        }
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->store('majors', 'public');
            $doctor->image = 'storage/' . $fileName;
        }
    
        $doctor->update($request->except('image'));
        return         redirect()->back()->with('success','update successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(doctors  $doctor)
    {
        if ($doctor->image && file_exists(public_path($doctor->image))) {
            unlink(public_path($doctor->image));
        }
    
        // حذف العنصر من قاعدة البيانات
        $doctor->delete();
        // $major->delete();
        return         redirect()->back()->with('success','deleted successfully');

    }
}
