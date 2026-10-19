@extends('layouts.app')

@section('title', 'Contact - Toko Alat Musik')

@section('content')

<section class="contact-section">
    <div class="container">

        <div class="text-center mb-5">
            <span class="section-kicker">Contact</span>
            <h1 class="section-title fw-bold mb-2">Hubungi Kami</h1>
            <p class="text-muted section-subtitle mb-0">
                Punya pertanyaan tentang produk atau pesanan? Tim kami siap membantu kamu.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-12 col-md-6 col-lg-3">
                <div class="contact-card text-center">
                    <span class="contact-icon" aria-hidden="true"><span class="contact-glyph">&#x2302;</span></span>
                    <span class="contact-label">Alamat</span>
                    <p class="contact-value mb-0">
                        Jl. BSD City, Serpong, Tangerang Selatan, Banten 15310
                    </p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="contact-card text-center">
                    <span class="contact-icon" aria-hidden="true"><span class="contact-glyph">&#x2709;</span></span>
                    <span class="contact-label">Email</span>
                    <p class="contact-value mb-0">
                        info@alatmusik.id
                    </p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="contact-card text-center">
                    <span class="contact-icon" aria-hidden="true"><span class="contact-glyph">&#x2706;</span></span>
                    <span class="contact-label">Telepon</span>
                    <p class="contact-value mb-0">
                        (021) 1234 5678
                    </p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="contact-card text-center">
                    <span class="contact-icon" aria-hidden="true"><span class="contact-glyph">&#x1F550;</span></span>
                    <span class="contact-label">Jam Operasional</span>
                    <p class="contact-value mb-0">
                        Senin &ndash; Sabtu, 09.00 &ndash; 18.00 WIB
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
