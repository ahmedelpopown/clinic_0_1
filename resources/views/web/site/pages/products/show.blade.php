@extends('site.app')

@section('title','products')

@section('content')
 
<div class="text-center">
<h4>{{$product['title']}}</h4>
<h4>{{$product['price']}}</h4>
<h4>{{$product['description']}}</h4>
 
</div>
@endsection