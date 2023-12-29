@extends('layouts.main')

@section('content')

<div class="container">
    <div class="starter-template">
        <h1>
            {{$category->name}} {{ $category->products->count() }}
                
        </h1>
        <p>{{$category->code}}</p>
        <p>{{$category->code}}</p>
        <p>
            {{$category->description}}
        </p>
        <div class="row">
        
            @foreach($category->products as $product)
                @include('card', compact('product'))
            @endforeach
        </div>
    </div>
</div>
@endsection