@extends('web.admin.app')
@section('title','Majors')


@section('content')
<!-- <section class="content">
      <div class="container-fluid">
        <div class="row">
          
         
        <div class="col-md-6">
             <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
            
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
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
      /.container-fluid -->

<div class="card">
  <div class="card-header">
    <a href="{{route('admin.doctors.create')}}" class="btn btn-primary">Add New doctor</a>
    <h3 class="card-title">Condensed Full Width Table</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body p-0">
    <table class="table table-sm">
      <thead>
        <tr>
          <th style="width: 10px">#</th>
          <th>name</th>
          <th>image</th>
          <th style="width: 40px">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($doctors as $doctor )
        <tr>
          <!-- 35.56 -->
          <td>{{$loop->iteration}}</td>
  
          <td>{{$doctor->name}}</td>
          <!-- 23.8 -->

          <td class="col-6"> 
   <img src="{{\App\Helpers\FileHelper::git_file_url($doctor->image)}}" alt="" width="40%" height="40%"/>
    
          </td>
          <td class="col-3 d-flex">

            <a href="{{route('admin.doctors.edit',$doctor )}}" class="btn btn-secondary  ">edit</a>
            <a href="{{route('admin.doctors.show',$doctor->id)}}" class="btn btn-primary  ">go</a>
            <form action="{{route('admin.doctors.destroy',$doctor->id)}}" method="POST">
              @csrf
              <button  class="btn btn-danger">DELETE</button>
              @method('DELETE')
            </form>

          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>

@endsection