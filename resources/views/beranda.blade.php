@extends('layouts.app')

@section('title', 'Beranda - Toko Alat Musik')

@section('content')

<style>
    .welcome-page {
        --navy: #172554;
        --gold: #D4A853;
        --surface: #F4F6FA;
        background: var(--surface);
        color: var(--charcoal);
        font-family: Georgia, "Times New Roman", "Palatino Linotype", serif;
        min-height: calc(100vh - 125px);
        padding: clamp(1.4rem, 4.5vw, 2.4rem) 0 clamp(1.75rem, 5vw, 2.75rem);
        position: relative;
        overflow: hidden;
    }

    .welcome-logo {
        width: clamp(64px, 13vw, 86px);
        height: clamp(64px, 13vw, 86px);
        margin: 0 auto;
        border-radius: 50%;
        background: linear-gradient(145deg, var(--navy) 0%, var(--charcoal) 100%);
        color: var(--gold);
        display: flex;
        align-items: center;
        justify-content: center;
        border: 4px solid #ffffff;
        outline: 2px dashed rgba(212, 168, 83, 0.6);
        outline-offset: 6px;
        box-shadow: 0 18px 35px -18px rgba(23, 37, 84, 0.65);
    }

    .welcome-logo svg {
        width: 44%;
        height: 44%;
    }

    .welcome-brand {
        margin: 1rem 0 0;
        font-size: clamp(0.88rem, 2.5vw, 1.05rem);
        font-weight: 700;
        letter-spacing: 4px;
        text-transform: uppercase;
        color: var(--charcoal);
    }

    .welcome-arc {
        display: block;
        width: min(86vw, 440px);
        height: auto;
        margin: clamp(0.4rem, 1.5vw, 0.8rem) auto 0;
    }

    .welcome-arc text {
        font-family: Georgia, "Times New Roman", serif;
        font-weight: 700;
        font-size: 42px;
        letter-spacing: 4px;
        fill: var(--navy);
    }

    .welcome-title {
        font-family: Georgia, "Times New Roman", serif;
        font-weight: 700;
        font-size: clamp(1.3rem, 4.8vw, 2.35rem);
        letter-spacing: 2px;
        line-height: 1.18;
        color: var(--charcoal);
        max-width: 900px;
        margin: 0 auto;
        text-transform: uppercase;
        text-shadow: 0 2px 0 rgba(255, 255, 255, 0.7);
    }

    .welcome-rule {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        color: var(--gold);
        margin: clamp(1rem, 2.5vw, 1.35rem) auto;
        font-size: 0.95rem;
    }

    .welcome-rule::before,
    .welcome-rule::after {
        content: "";
        width: clamp(32px, 10vw, 60px);
        height: 2px;
        border-radius: 2px;
        background: var(--gold);
        opacity: 0.85;
    }

    .welcome-identity {
        max-width: 370px;
        margin: 0 auto;
        display: grid;
        gap: 0.55rem;
    }

    .welcome-identity .identity-row {
        background: #ffffff;
        border: 1px solid rgba(23, 37, 84, 0.08);
        border-radius: 1rem;
        box-shadow: 0 14px 28px -20px rgba(23, 37, 84, 0.5);
        color: var(--charcoal);
        font-family: Georgia, "Times New Roman", serif;
        font-size: 0.9rem;
        letter-spacing: 0.4px;
        padding: 0.55rem 1rem;
    }

    .deco-note {
        position: absolute;
        pointer-events: none;
        user-select: none;
        line-height: 1;
        font-family: Georgia, "Times New Roman", serif;
        color: rgba(23, 37, 84, 0.1);
    }

    .deco-note.is-blue {
        color: rgba(212, 168, 83, 0.35);
    }

    .note-1 {
        top: 7%;
        left: 5%;
        font-size: clamp(2rem, 6vw, 3.4rem);
        transform: rotate(-14deg);
    }

    .note-2 {
        top: 15%;
        right: 6%;
        font-size: clamp(1.6rem, 5vw, 2.9rem);
        transform: rotate(12deg);
    }

    .note-3 {
        bottom: 13%;
        left: 8%;
        font-size: clamp(1.6rem, 4.2vw, 2.5rem);
        transform: rotate(9deg);
    }

    .note-4 {
        bottom: 9%;
        right: 9%;
        font-size: clamp(2rem, 5vw, 3rem);
        transform: rotate(-11deg);
    }

    @media (max-width: 575.98px) {
        .note-3,
        .note-4 {
            display: none;
        }

        .welcome-brand {
            letter-spacing: 4px;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .welcome-navbar .nav-link {
            transition: none;
        }
    }
</style>

<section class="welcome-page">

    <span class="deco-note note-1" aria-hidden="true">&#9834;</span>
    <span class="deco-note note-2 is-blue" aria-hidden="true">&#9835;</span>
    <span class="deco-note note-3 is-blue" aria-hidden="true">&#9834;</span>
    <span class="deco-note note-4" aria-hidden="true">&#9835;</span>

    <div class="container text-center position-relative">

        <div class="welcome-logo" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z"/>
            </svg>
        </div>
        <p class="welcome-brand">SI UNPAM</p>

        <svg class="welcome-arc" viewBox="0 -50 600 215" role="img" aria-label="Welcome to"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs>
                <path id="welcome-arc-path" d="M 70,148 Q 300,12 530,148" fill="none"/>
            </defs>
            <text>
                <textPath href="#welcome-arc-path" xlink:href="#welcome-arc-path" startOffset="50%" text-anchor="middle">
                    WELCOME TO
                </textPath>
            </text>
        </svg>

        <h1 class="welcome-title">SISTEM PENJUALAN ALAT MUSIK</h1>

        <div class="welcome-rule" aria-hidden="true">&#9835;</div>

        <div class="welcome-identity">
            <div class="identity-row">251011700042</div>
            <div class="identity-row">dfahmiilmi@gmail.com</div>
            <div class="identity-row">Prodi Sistem Informasi</div>
            <div class="identity-row">DANI FAHMI ILMI</div>
        </div>

    </div>
</section>

@endsection
