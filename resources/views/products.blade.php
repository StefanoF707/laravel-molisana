@extends("layouts.main")

@section('content')
<main id="main-product">

    @if ($id > 0)
        <a href="{{ route("products", ['id' => $id - 1]) }}" class="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
    @endif

    <section class="product-top">
        <img src="{{ $product["src-h"] }}" alt="{{ $product["titolo"] }}" class="img100">
    </section>
    <section class="product-middle">
        <img src="{{ $product["src-p"] }}" alt="{{ $product["titolo"] }}" class="img100">
    </section>
    <section class="product-bottom">
        <p>
            {!! $product["descrizione"] !!}
        </p>
    </section>

    @if ($id < count($pasta) - 1))
        <a href="{{ route("products", ['id' => $id + 1]) }}" class="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    @endif
</main>
@endsection
