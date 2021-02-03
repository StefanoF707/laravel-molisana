<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <title>Home</title>
</head>
<body>

    <!-- logo e navbar -->
    <header>

        <div class="header-top">
            <img src="{{ asset("img/marchio-sito-test.png") }}" alt="Logo Molisana">
        </div>

        <nav class="header-bottom">
            <ul class="list-inline">
                <li>
                    <a href="#" class="active">Home</a>
                </li>
                <li>
                    <a href="#">Prodotti</a>
                </li>
                <li>
                    <a href="#">News</a>
                </li>
            </ul>
        </nav>

    </header>
    <!-- /logo e navbar -->

    <!-- sections -->
    <main>

        <section>
            <h2 class="section-title">le lunghe</h2>

            <div class="cards">
                @foreach ($longPasta as $item)
                    <div class="card">
                        <img src="{{ $item["src"] }}" alt="{{ $item["titolo"] }}" class="img100">
                        <div class="card-layover animate__animated animate__flipInY">
                            <a href="#">{{ $item["titolo"] }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <section>
            <h2 class="section-title">le corte</h2>

            <div class="cards">
                @foreach ($shortPasta as $item)
                    <div class="card">
                        <img src="{{ $item["src"] }}" alt="{{ $item["titolo"] }}" class="img100">
                        <div class="card-layover animate__animated animate__flipInY">
                            <a href="#">{{ $item["titolo"] }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <section>
            <h2 class="section-title">le cortissime</h2>

            <div class="cards">
                @foreach ($shortestPasta as $item)
                    <div class="card">
                        <img src="{{ $item["src"] }}" alt="{{ $item["titolo"] }}" class="img100">
                        <div class="card-layover animate__animated animate__flipInY">
                            <a href="#">{{ $item["titolo"] }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
    <!-- /sections -->

    <!-- links e credits -->
    <footer>

        <div class="footer-item">
            <img src="{{ asset("img/marchio-sito-test.png") }}" alt="Logo Molisana">

            <ul>
                @foreach ($company as $key => $value)
                    <li>
                        {{ $key . ": " . $value }}
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="footer-item">
            <h3 class="footer-title">pastificio</h3>
            <ul>
                @foreach ($links["pastificio"] as $link)
                    <li>
                        <a href="#">
                            {{ $link }}
                        </a>
                    </li>
                @endforeach
            </ul>

            <h3 class="footer-title">prodotti</h3>
            <ul>
                @foreach ($links["prodotti"] as $link)
                    <li>
                        <a href="#">
                            {{ $link }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="footer-item">
            <h3 class="footer-title">collezione da chef</h3>
            <ul>
                @foreach ($links["collezione da chef"] as $link)
                    <li>
                        <a href="#">
                            {{ $link }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

    </footer>
    <!-- /links e credits -->

</body>
</html>
