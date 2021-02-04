<!-- logo e navbar -->
<header>

    <div class="header-top">
        <img src="{{ asset("img/marchio-sito-test.png") }}" alt="Logo Molisana">
    </div>

    <nav class="header-bottom">
        <ul class="list-inline">
            <li>
                <a href="{{ route("home") }}" class="{{ Route::currentRouteName() == "home" ? 'active' : '' }}">Home</a>
            </li>
            <li>
                <a href="{{ route("products") }}" class="{{ Route::currentRouteName() == "products" ? 'active' : '' }}">Prodotti</a>
            </li>
            <li>
                <a href="{{ route("news") }}" class="{{ Route::currentRouteName() == "news" ? 'active' : '' }}">News</a>
            </li>
        </ul>
    </nav>

</header>
<!-- /logo e navbar -->
