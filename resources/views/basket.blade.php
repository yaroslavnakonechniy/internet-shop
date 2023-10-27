@extends('layouts.app')

@section('title', 'Корзина')

@section('content')
    <div class="starter-template">
        <h1>Корзина</h1>
        <p>Оформление заказа</p>
        <div class="panel">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Название</th>
                    <th>Кол-во</th>
                    <th>Цена</th>
                    <th>Стоимость</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <a href="/mobiles/iphone_x_64">
                            <img height="56px" src="storage/products/iphone_x.jpg">
                            iPhone X 64GB
                        </a>
                    </td>
                    <td><span class="badge">1</span>
                        <div class="btn-group">
                            <a type="button" class="btn btn-danger" href="/basket/1/remove"><span
                                    class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
                            <a type="button" class="btn btn-success" href="/basket/1/add"><span
                                    class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
                        </div>
                    </td>
                    <td>71990 руб.</td>
                    <td>71990 руб.</td>
                </tr>
                <tr>
                    <td colspan="3">Общая стоимость:</td>
                    <td>71990 руб.</td>
                </tr>
                </tbody>
            </table>
            <br>
            <div class="btn-group pull-right" role="group">
                <a type="button" class="btn btn-success" href="/basket/place">Оформить заказ</a>
            </div>
        </div>
    </div>
@endsection