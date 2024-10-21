@extends('site.app')

@section('title','products')

@section('content')
<div class="text-center col-12 d-flex justify-content-center">
@include('fun.success')
<form action="{{route('products.store')}}"method="POST" class="my-3 col-6 " >
    @csrf
<input class="form-control form-control-lg" name="title" value="{{old('title')}}"type="text" placeholder="title">
 @error('title')
 <span class="text-danger">{{$message}}</span>
 @enderror
 
<input class="form-control" type="text" name="price" value="{{old('price')}}" placeholder="price">
@error('price')
<span class="text-danger">{{$message}}</span>
@enderror
<input class="form-control form-control-sm" name="description" type="text" value="{{old('description')}}" placeholder="description">
@error('description')
<span class="text-danger">{{$message}}</span>
@enderror
<button type="submit" class="btn btn-primary">send Date</button>
</form>

</div>
@endsection