@extends('layouts.app')




@section('title', 'Товар')

<div class="container">
@section('content')
    <div class="starter-template">
        
        <h2>{{$product}}</h2>

        
        <a class="btn btn-success" href="{{route('basket-add', $product)}}">Добавить в корзину</a>
        
    </div>
</div>

@endsection