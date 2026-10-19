@extends('layouts.app')

@section('title', 'Produk - Toko Alat Musik')

@section('content')

<section class="products-section">
    <div class="container">

        <div class="text-center mb-4">
            <span class="section-kicker">Katalog</span>
            <h1 class="section-title fw-bold mb-2">Produk Alat Musik</h1>
            <p class="text-muted section-subtitle mb-0">
                Daftar {{ $total }} alat musik. Geser dengan tombol panah untuk melihat produk lainnya.
            </p>
        </div>

        <div class="filter-bar">
            <a
                href="{{ route('instruments.index') }}"
                class="filter-pill {{ $kategori === null ? 'active' : '' }}"
            >
                Semua <span class="filter-count">{{ $total }}</span>
            </a>
            @foreach ($types as $type)
            <a
                href="{{ route('instruments.index', ['kategori' => $type]) }}"
                class="filter-pill {{ $kategori === $type ? 'active' : '' }}"
            >
                {{ ucfirst($type) }} <span class="filter-count">{{ $counts[$type] ?? 0 }}</span>
            </a>
            @endforeach
        </div>

        <div class="product-carousel" data-carousel>
            <button
                type="button"
                class="product-arrow prev"
                aria-label="Produk sebelumnya"
            >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path d="M15.41 7.41 14 6l-6 6 6 6 1.41-1.41L10.83 12z"/>
                </svg>
            </button>

            <div class="product-track">
                @foreach ($instruments as $instrument)
                <div class="product-slide">
                    <div class="card h-100 product-card">

                        <img
                            src="{{ asset($instrument->image) }}"
                            class="card-img-top"
                            alt="{{ $instrument->name }}"
                        >

                        <div class="card-body d-flex flex-column">

                            <span class="type-badge align-self-start mb-2">
                                {{ $instrument->type }}
                            </span>

                            <h5 class="card-title">
                                {{ $instrument->name }}
                            </h5>

                            <p class="text-muted mb-2 small">
                                Merek: {{ $instrument->brand }}
                            </p>

                            <p class="card-text small">
                                {{ Str::limit($instrument->description, 80) }}
                            </p>

                            <h5 class="price-tag mt-auto mb-3">
                                Rp {{ number_format($instrument->price, 0, ',', '.') }}
                            </h5>

                            <a
                                href="{{ route('instruments.show', $instrument->id) }}"
                                class="btn btn-detail btn-sm"
                            >
                                Lihat Detail
                            </a>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <button
                type="button"
                class="product-arrow next"
                aria-label="Produk berikutnya"
            >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path d="M8.59 16.59 10 18l6-6-6-6-1.41 1.41L13.17 12z"/>
                </svg>
            </button>
        </div>

    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('[data-carousel]').forEach(function (carousel) {
            var track = carousel.querySelector('.product-track');
            var prev = carousel.querySelector('.product-arrow.prev');
            var next = carousel.querySelector('.product-arrow.next');
            if (!track || !prev || !next) return;

            function metrics() {
                var slide = track.querySelector('.product-slide');
                if (!slide) return { step: track.clientWidth, max: 0 };
                var style = window.getComputedStyle(track);
                var gap = parseFloat(style.columnGap || style.gap) || 16;
                var slideWidth = slide.getBoundingClientRect().width + gap;
                var perView = Math.max(1, Math.round((track.clientWidth + gap) / slideWidth));
                return {
                    step: slideWidth * perView,
                    max: track.scrollWidth - track.clientWidth
                };
            }

            function update() {
                var m = metrics();
                prev.disabled = track.scrollLeft <= 1;
                next.disabled = track.scrollLeft >= m.max - 1;
            }

            prev.addEventListener('click', function () {
                track.scrollBy({ left: -metrics().step, behavior: 'smooth' });
            });

            next.addEventListener('click', function () {
                track.scrollBy({ left: metrics().step, behavior: 'smooth' });
            });

            track.addEventListener('scroll', update, { passive: true });
            window.addEventListener('resize', update);
            update();
        });
    });
</script>

@endsection
