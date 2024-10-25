@extends("web.site.app")
@section("content")
<div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="./index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">login</li>
                </ol>
            </nav>
            <div class="d-flex flex-column gap-3 account-form  mx-auto mt-5">
                <form class="form" action="{{route('login.show')}}" method="POST">
                @csrf
                <!-- @method('PUT') -->
                
                    <div class="mb-3">
                        <label class="form-label required-label"  for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" >
                    </div>
                    @error('email')
<span class="text-danger">{{$message}}</span>
@enderror
                    <div class="mb-3">
                        <label class="form-label required-label"  for="password">password</label>
                        <input type="password" class="form-control" name="password" id="password" >
                    </div>
                    <!-- @error('password')
<span class="text-danger">{{$message}}</span>
@enderror -->
                    <button type="submit" class="btn btn-primary">Login</button>
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
                <div class="d-flex justify-content-center gap-2 flex-column flex-lg-row flex-md-row flex-sm-column">
                    <span>don't have an account?</span><a class="link" href="{{route('register.store')}}">create account</a>
                </div>
            </div>

        </div>
@endsection
