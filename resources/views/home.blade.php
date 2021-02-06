@extends("layouts.main")

@section('content')
    <main id="main-home">
        <section>
            <h2 class="section-title">le lunghe</h2>

            <div class="cards">
                @foreach ($longPasta as $item)
                    <div class="card">
                        <img src="{{ $item["src"] }}" alt="{{ $item["titolo"] }}" class="img100">
                        <div class="card-layover animate__animated animate__flipInY">
                            <a href="{{ route("products", ['id' => $item["id"]]) }}">{{ $item["titolo"] }}</a>
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
                            <a href="{{ route("products", ['id' => $item["id"]]) }}">{{ $item["titolo"] }}</a>
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
                            <a href="{{ route("products", ['id' => $item["id"]]) }}">{{ $item["titolo"] }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
@endsection
