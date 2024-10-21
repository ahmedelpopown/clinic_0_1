@extends('site.app')

@section('title', 'products')

@section('content')
<div class="text-center col-12 d-flex flex-direction: column;">
    <style>
        .style_1 {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        </style>
    <div class="text-center col-10 style_1 ">
        @include('fun.success')
        <a class="btn btn-primary" href="{{route('products.create')}}">add</a>

        <style>
            .crud {
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                align-content: center;
                justify-content: center;
                align-items: center;
            }
        </style>

        <div class="col-12 crud align-items-center">
            @foreach ($products as $item)
                <div class="col-4">
                    <h4>{{$item->id}}</h4>
                    <h4>{{$item->text}}</h4>
                    <h4>{{$item->price}}</h4>
                    <h4>{{$item->description}}</h4>
               
                    <style>
                        .buttons{
                    display: flex;
                            align-items: center;
                        justify-content: space-around;
                    
                        }
                    </style>
                    <div class="col-12 buttons">
                    <form action="{{route('products.destroy', $item->id)}}" method="POST" class="col-3">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-primary col-12" placeholder="Delete">Delete</button>
                    </form>
                    <a href="{{route('products.show', $item->id)}}" class=" col-3 btn btn-dark">go</a>

                    <a class="btn btn-success col-3" href="{{route('products.edit', $item)}}" placeholder="edit">edit</a>

                    </div>
                    <hr />
                </div>
            @endforeach

        </div>
    </div>
    @endsection