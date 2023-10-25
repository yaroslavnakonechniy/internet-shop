@extends('layouts.app')

@section('content')

<div class="container">
    <div class="starter-template">
        <div class="panel">
            <a href="/mobiles">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBChY-GaJAf3Mvr6AlJmc8Hry8zabacZQR6A&usqp=CAU">
                <h2>Мобильные телефоны</h2>
            </a>
            <p>
                В этом разделе вы найдёте самые популярные мобильные телефонамы по отличным ценам!
            </p>
        </div>
        <div class="panel">
            <a href="/portable">
                <img src="">
                <h2>Портативная техника</h2>
            </a>
            <p>
                Раздел с портативной техникой.
            </p>
        </div>
        <div class="panel">
            <a href="/appliances">
                <img src="">
                <h2>Бытовая техника</h2>
            </a>
            <p>
                Раздел с бытовой техникой
            </p>
        </div>
    </div>
</div>
@endsection