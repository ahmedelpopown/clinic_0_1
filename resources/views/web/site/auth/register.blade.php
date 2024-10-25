@extends("web.site.app")
@section('title', 'sign up')


@section('content')
<div class="d-flex flex-column gap-3 account-form mx-auto mt-5">
  <form class="form" action="{{route('register.store')}}" method="POST">
  @csrf
    <div class="form-items">
      <div class="mb-3">
        <label class="form-label -label" for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name"  >

      </div>
      @error('name')
<span class="text-danger">{{$message}}</span>
@enderror

<div class="mb-3">
        <label class="form-label -label" for="phone">Phone</label>
        <input type="tel"  name="phone" class="form-control" id="phone" >
        @error('phone')
<span class="text-danger">{{$message}}</span>
@enderror

      </div>
      <div class="mb-3">
        <label class="form-label -label" for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" >
        @error('email')
<span class="text-danger">{{$message}}</span>
@enderror

      </div>
      <!-- <div class="mb-3">
        <label class="form-label -label" for="password">password</label>
        <input type="password" name="password" class="form-control" id="password" >
        @error('password')
<span class="text-danger">{{$message}}</span>
@enderror

      </div> -->


      <div class="form-control">
    <label for="patent">patent</label>
    <input type="radio"  name="type"  id="patent" value="Patient" />

    </div>


<div class="form-control">
<label for="Doctor">Doctor</label>
<input type="radio"   name="type" id="doctor" value="doctor" />


</div>
@error('type')
<span class="text-danger">{{$message}}</span>
@enderror
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Password</label>
    <div class="col-md-6">
        <input type="password" class="form-control" name="password">
        @if ($errors->has('password'))
            <span class="help-block text-danger">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Confirm Password</label>
    <div class="col-md-6">
        <input type="password" class="form-control" name="password_confirmation">
        @if ($errors->has('password_confirmation'))
            <span class="help-block">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
        @endif
    </div>
</div>
    </div>

    <button type="submit" class="btn btn-primary">Create account</button>
  </form>
  <div class="d-flex justify-content-center gap-2">
    <span>already have an account?</span><a class="link" href="./login.html"> login</a>
  </div>
</div>
@endsection