<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="http://laravel-diplom-1.rdavydov.ru/storage/products/iphone_x.jpg" alt="iPhone X 64GB">
        <div class="caption">
            <h3>{{$product->name}}</h3>
            <h3>{{$product->description}}</h3>
            <p>{{$product->price}}</p>
            <p>


            <form action="{{route('basket-add', $product)}}" method="post">
                @csrf
                <button type="submit" class="btn btn-primary"> В корзину</button>


            </form>
            <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="btn btn-default"
                   role="button">Подробнее</a>

            </p>
        </div>
    </div>
</div>