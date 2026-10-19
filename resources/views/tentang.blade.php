@extends('layouts.app')

@section('title', 'Tentang Kami - Toko Alat Musik')

@section('content')

<section class="about-section">
    <div class="container">
        <div class="about-card">

            <div class="text-center mb-4">
                <span class="section-kicker">Tentang Kami</span>
            </div>

            <p class="about-text text-center mx-auto mb-4">
                Temukan bebagai pilihan alat musik berkualitas untuk menemani
                perjalanan musik anda. Mulai dari gitar, keyboard, drum, hingga
                biola, kami hadir untuk membantu Anda menemukan alat musik yang 
                sesuai dengan minat dan kebutuhan Anda.
            </p>

            <div class="row g-3">
                <div class="col-12 col-md-4">
                    <div class="about-feature">
                        <strong>Ragam Instrumen</strong>
                        <span>Dari gitar hingga keyboard, temukan instrumen yang sesuai dengan gaya musikmu</span>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="about-feature">
                        <strong>Kenali Setiap Produk</strong>
                        <span>Temukan informasi harga, merek, jenis, dan detail alat musik sebelum memilih.</span>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="about-feature">
                        <strong>Praktis dan Mudah</strong>
                        <span>Jelajahi koleksi alat musik dengan nyaman melalui laptop maupun ponsel.</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
