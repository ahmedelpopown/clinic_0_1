@include('web.admin.layout.head')
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
   
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="{{route('admin.auth.login')}}" method="POST">
        @csrf
        <div class="input-group mb-3">

          <input type="email" class="form-control" name="email"  placeholder="Email">

          <div class="input-group-append">
   
            <div class="input-group-text">
              
              <span class="fas fa-envelope"></span>
            </div>
            
          </div>
          
        </div>
        @error('email')
<span class="text-danger">{{$message}} </span>

@enderror
        <div class="input-group mb-3">
          <input name="password" type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
           
          </div>
 
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
 
        </div>
      </form>
 
 
 
     
       
    </div>
  
  </div>
</div>
 

 
<script src="{{asset('dashboard/plugins/jquery/jquery.min.js')}}"></script>
 
<script src="{{asset('dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
 
<script src="{{asset('dashboard/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
