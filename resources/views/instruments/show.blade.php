@extends('layouts.app')

@section('title', $instrument->name)

@section('content')

<section class="detail-section">
    <div class="container">

        <div class="detail-card">

            <div class="detail-media">
                <img
                    src="{{ asset($instrument->image) }}"
                    class="detail-image"
                    alt="{{ $instrument->name }}"
                >
            </div>

            <div class="detail-body">

                <span class="type-badge mb-2">
                    {{ $instrument->type }}
                </span>

                <h1 class="detail-name">
                    {{ $instrument->name }}
                </h1>

                <p class="detail-meta mb-0">
                    Merek: {{ $instrument->brand }}
                </p>

                <div class="detail-divider" aria-hidden="true"></div>

                <h2 class="detail-heading">
                    Deskripsi
                </h2>

                <p class="detail-description">
                    {{ $instrument->description }}
                </p>

                <div class="detail-price-card">
                    <span class="detail-price-label">Tahun Produksi</span>
                    <span class="price-tag">
                        {{ $instrument->production_year ?? '-' }}
                    </span>
                </div>

                <div class="detail-price-card">
                    <span class="detail-price-label">Harga</span>
                    <span class="price-tag">
                        Rp {{ number_format($instrument->price, 0, ',', '.') }}
                    </span>
                </div>

                <div class="detail-price-card">
                    <span class="detail-price-label">Stok</span>
                    <span class="price-tag">
                        {{ $instrument->stock }}
                    </span>
                </div>

                <a
                    href="{{ route('instruments.index') }}"
                    class="btn btn-back detail-back"
                >
                    BACK
                </a>

            </div>
        </div>

    </div>
</section>

@endsection
