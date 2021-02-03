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
