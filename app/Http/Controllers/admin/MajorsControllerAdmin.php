<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\majorRequest;
 use App\Models\Majors;
use Gate;
use Illuminate\Http\Request;
use Storage;

class MajorsControllerAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort_if(Gate::denies('isAdmin'),403);
        // dd();
        $majors=Majors::orderBy('id','desc')->get();

        return view('web.admin.sections.majors.index',compact('majors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
 
        return view('web.admin.sections.majors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(majorRequest $request)
    {
      
        $data=$request->validated();

        if($request->hasFile('image')){

            $file = $request->file('image');

            $fileName = $file->store('/majors','public');

            $data['image'] = 'storage/'. $fileName;
        }
        
        majors::create($data);
        // dd($data);
        return redirect()->route('admin.majors.index') ;

    }

    /**
     * Display the specified resource.
     */
    public function show(majors $major)
    {
        return view('web.admin.sections.majors.show',compact('major'));
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(  $id)
    {
         
        $major =  majors::find($id);
         
        return view('web.admin.sections.majors.edit',compact('major'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, $id) {
        $major = Majors::find($id);

        if ($major->image && file_exists(public_path($major->image))) {
            unlink(public_path($major->image));
        }
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->store('majors', 'public');
            $major->image = 'storage/' . $fileName;
        }
    
        $major->update($request->except('image'));
        return         redirect()->back()->with('success','update successfully');

    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(majors $major)
    {
        if ($major->image && file_exists(public_path($major->image))) {
            unlink(public_path($major->image));
        }
    
        // حذف العنصر من قاعدة البيانات
        $major->delete();
        // $major->delete();
        return         redirect()->back()->with('success','deleted successfully');

    }
}
