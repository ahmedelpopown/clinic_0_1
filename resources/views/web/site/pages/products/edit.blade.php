@extends('site.app')

@section('title','edit Product')

@section('content')
<div class="text-center col-12 d-flex justify-content-center">
@include('fun.success')
<form action="{{route('products.update',compact('product'))}}" method="POST" class="my-3 col-6 " >
    @csrf
    @method('PUT')
<input class="form-control form-control-lg" name="title"  type="text" placeholder="title">
 <!-- {{$product}} -->
 
<input class="form-control" type="text" name="price"   placeholder="price">
 
<input class="form-control form-control-sm" name="description" type="text"  placeholder="description">
 
<button type="submit" class="btn btn-primary">send Date</button>
</form>

</div>
@endsection