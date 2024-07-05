<div class="col-4">
    <div class="content">
        <img class="main-image" src="{{ Vite::asset('public/img/' . $product['frontImage']) }}"
            alt="{{ $product['name'] }}">
        <img class="hover-image" src="{{ Vite::asset('public/img/' . $product['backImage']) }}"
            alt="{{ $product['name'] }}">
        <div class="heart">&hearts;</div>
        <div class="label">
            @foreach ($product['badges'] as $badge)
                <span class="badge-{{ $badge['type'] }}">{{ $badge['value'] }}</span>
            @endforeach
        </div>
        <!-- INFORMAZIONI PRODOTTO -->
        <div>
            <div class="brand">{{ $product['brand'] }}</div>
            <div class="prod-name">{{ $product['name'] }}</div>
            <div class="new-price"> &euro;</div>
            <div class="old-price">{{ $product['price'] }} &euro;</div>
        </div>
    </div>
</div>
