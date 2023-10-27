@extends('layouts.app')

@section('content')

<div class="container">
    <div class="starter-template">

        @foreach($categories as $category)
        {{$category->code}}
        <div class="panel">
            <a href="{{ route('category', $category->code) }}">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBChY-GaJAf3Mvr6AlJmc8Hry8zabacZQR6A&usqp=CAU">
                <h2>{{$category->name}}</h2>
            </a>
            <p>
                
                {{$category->description}}
            </p>
        </div>


        @endforeach

    </div>
</div>
@endsection