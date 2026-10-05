@extends('layouts.app')

@section('content')

<div class="aksesoris-detail-page">

    <a href="{{ route('aksesoris') }}" class="back-button">
        ← Kembali ke Aksesoris
    </a>

    <div class="detail-box">

        <div class="detail-image">
            <img
                src="{{ asset('images/aksesoris/' . $item['image']) }}"
                alt="{{ $item['name'] }}">
        </div>

        <div class="detail-info">

            <span class="detail-category">
                {{ $item['category'] ?? 'Aksesoris' }}
            </span>

            <h1>{{ $item['name'] }}</h1>

            <div class="detail-rating">
                ★ {{ $item['rating'] ?? '0.0' }}
            </div>

            <div class="detail-price">
                {{ $item['price'] }}
            </div>

            <p>
                {{ $item['description'] ?? 'Aksesoris berkualitas untuk kebutuhan fotografi dan videografi.' }}
            </p>

            <form action="{{ route('aksesoris.pesan', ['id' => $item['id']]) }}"
                  method="POST">

                @csrf

                <button type="submit" class="pesan-button">
                    Pesan Sekarang
                </button>

            </form>

        </div>

    </div>

</div>


<style>

.aksesoris-detail-page {
    max-width: 1120px;
    width: 90%;
    margin: auto;
    padding: 40px 0;
}

.back-button {
    display: inline-block;
    margin-bottom: 25px;
    color: #777;
    font-size: 12px;
    text-decoration: none;
}

.back-button:hover {
    color: #f0527e;
}

.detail-box {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 45px;
    align-items: center;
}

.detail-image {
    height: 400px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.detail-image img {
    max-width: 90%;
    max-height: 380px;
    object-fit: contain;
}

.detail-category {
    color: #999;
    font-size: 11px;
}

.detail-info h1 {
    font-size: 28px;
    margin: 8px 0;
    color: #202020;
}

.detail-rating {
    color: #f5b400;
    font-size: 13px;
    margin: 8px 0;
}

.detail-price {
    color: #f0527e;
    font-size: 20px;
    font-weight: 700;
    margin: 15px 0;
}

.detail-info p {
    color: #777;
    font-size: 13px;
    line-height: 1.7;
    margin-bottom: 25px;
}

.pesan-button {
    border: none;
    background: #f0527e;
    color: white;
    padding: 12px 25px;
    border-radius: 6px;
    font-family: 'Poppins', sans-serif;
    font-size: 12px;
    font-weight: 600;
    cursor: pointer;
}

.pesan-button:hover {
    opacity: 0.9;
}

@media (max-width: 800px) {

    .detail-box {
        grid-template-columns: 1fr;
        gap: 20px;
    }

    .detail-image {
        height: 300px;
    }

}

</style>

@endsection