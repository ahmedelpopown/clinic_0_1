@extends('web.admin.app')
@section('title','Majors')


@section('content')
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          
         
        <div class="col-md-6">
             <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
            
              <form action="{{route('admin.majors.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
            
@error('name')
<span>{{$message}}</span> 

@enderror
@error('image')
<span>{{$message}}</span> 

@enderror
                <div class="card-body">
                  <div class="form-group">

                    <label for="name"> name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="name">
                  </div>
                  
                  <div class="form-group">
                    <label for="image">image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                 
                </div>
      

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
    
        </div>
 
      </div>
       
    </section>
    @endsection