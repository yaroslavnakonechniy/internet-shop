<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('index') }}">Интернет Магазин</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li @routeactive('index')><a href="{{ route('index') }}">Все товары</a></li>
                <li @routeactive('categor*')><a href="{{ route('categories') }}">Категории</a>
                </li>
                <li @routeactive('basket*')><a href="{{ route('basket') }}">В корзину</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
            @guest
                    <li><a href="{{ route('login') }}">Панель администратора</a></li>
                @endguest
                @auth
                    <li><a href="{{ route('home') }}">Панель администратора</a></li>

                    <li><a href="{{ route('get-logout') }}">Выйти</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>