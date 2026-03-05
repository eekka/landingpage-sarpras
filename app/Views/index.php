<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sarana Prasarana Balatkop Jateng</title>
        <!-- Font -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&family=Lora:wght@400;600&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
        <!-- Bootstap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <!-- Swiper JS -->
        <link href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./css/output.css">
    </head>
    <body class="bg-blue-100 overflow-x-hidden">
        <style>
            .facility-highlight-btn-blue:hover,
            .facility-highlight-btn-blue:focus,
            .facility-highlight-btn-blue:active {
                color: #1e40af !important;
                border-color: #1e40af !important;
            }
            /* menu navbar-humbergermenu */
            .nav-link:hover,
            .nav-link:focus,
            .nav-link:active {
                color: #FFD700 !important;
                transition: color 0.2s;
            }
            .nav-link {
            position: relative;
            text-decoration: none;
            cursor: pointer;
            }
            .nav-link::after {
            content: "";
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: currentColor;
            transition: width 0.3s;
            }
            .nav-link:hover::after {
            width: 100%;
            }
            .mobile-menu {
            display: none;
            background: #ffffff;
            border-radius: 0.75rem;
            padding: 0.4rem 0.5rem 0.7rem;
            }
            .mobile-menu.active {
            display: block;
            }

            @media (max-width: 767px) {
                .mobile-menu {
                    border-radius: 0;
                }

                .mobile-menu.active {
                    position: absolute;
                    top: 100%;
                    right: 0;
                    width: min(76vw, 360px);
                    min-height: calc(100vh - 5rem);
                    padding: 1rem 0.75rem 1.25rem;
                    overflow-y: auto;
                    box-shadow: -8px 10px 24px -16px rgba(0, 0, 0, 0.45);
                    z-index: 60;
                }
            }

            #mobileMenu a {
                display: block;
                color: #111827;
                text-decoration: none;
                font-weight: 600;
                border-radius: 0.5rem;
                .mobile-menu.active {
                    position: absolute;
                    top: 100%;
                    right: 0;
                    left: 0;
                    width: 100vw;
                    min-height: calc(100vh - 5rem);
                    padding: 1rem 0.75rem 1.25rem;
                    overflow-y: auto;
                    box-shadow: -8px 10px 24px -16px rgba(0, 0, 0, 0.45);
                    z-index: 60;
                    border-radius: 0;
                }
                content: "";
                position: absolute;
                left: 0;
                bottom: -3px;
                width: 0;
                height: 2px;
                background-color: currentColor;
                transition: width 0.25s ease;
            }

            #mobileMenu a:hover,
            #mobileMenu a:focus-visible,
            #mobileMenu a:active,
            #mobileMenu a.is-pressing,
            #mobileMenu a.is-selected {
                color: #111827;
                background-color: #f3f4f6;
                text-decoration: none;
                transform: translateX(4px);
            }

            #mobileMenu a:hover .mobile-link-text::after,
            #mobileMenu a:focus-visible .mobile-link-text::after,
            #mobileMenu a:active .mobile-link-text::after,
            #mobileMenu a.is-pressing .mobile-link-text::after,
            #mobileMenu a.is-selected .mobile-link-text::after {
                width: 100%;
            }

            #mobileMenu a.is-pressing .mobile-link-text::after {
                transition-duration: 0.18s;
            }

            /* swiper */

            .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            }

            .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            }

            .swiper-item {
            font-size: 0.5rem;
            }
            /* swiper galeri */
            .swiperGaleri .swiper-wrapper {
                transition-timing-function: linear !important;
            }

            .swiperGaleri .swiper-slide {
                width: auto;
                flex-shrink: 0;
            }

            .swiperGaleri .swiper-slide img {
                max-width: 280px;
                transition: transform 0.3s ease;
            }

            .swiperGaleri .swiper-slide:hover img {
                transform: scale(1.05);
            }
            
            /* font title */

            .section-title-fancy {
                font-family: 'Playfair Display', serif;
                letter-spacing: 0.02em;
            }

            /* Modal */

            .modal-overlay {
                background: rgba(15, 23, 42, 0.45);
                backdrop-filter: blur(2px);
            }

            .modal-title-fancy {
                font-family: 'Playfair Display', serif;
                letter-spacing: 0.02em;
            }

            .modal-panel .swiper-button-prev,
            .modal-panel .swiper-button-next {
                top: 50%;
                transform: translateY(-50%);
                width: 28px;
                height: 28px;
                border-radius: 6px;
                background: rgba(0, 0, 0, 0.40);
                color: #fff;
                transition: background 0.2s;
                margin-top: 0;
            }
            .modal-panel .swiper-button-prev:hover,
            .modal-panel .swiper-button-next:hover {
                background: rgba(0, 0, 0, 0.68);
            }
            .modal-panel .swiper-button-prev { left: 8px; }
            .modal-panel .swiper-button-next { right: 8px; }
            .modal-panel .swiper-button-prev::after,
            .modal-panel .swiper-button-next::after {
                font-size: 10px;
                font-weight: 800;
            }
            .modal-img-swiper {
                /* allow partial neighbors to be visible */
                overflow: visible;
            }
            .modal-img-swiper {
                /* allow partial neighbors to be visible */
                overflow: visible;
            }
            .modal-img-swiper .swiper-slide {
                display: block;
                /* don't force full width, letting Swiper calculate based on slidesPerView */
                width: auto;
            }

            .modal-img-swiper .swiper-pagination-fraction {
                bottom: 10px;
                left: 12px;
                width: auto;
                background: rgba(0,0,0,0.52);
                color: white;
                font-size: 13px;
                font-weight: 600;
                padding: 2px 9px;
                border-radius: 20px;
                text-align: left;
            }

            .modal-info-block {
                color: #1f2937;
            }

            .modal-info-block h3 {
                font-size: 1.6rem;
                margin-bottom: 0.6rem;
            }

            .modal-info-block p {
                margin-bottom: 0.35rem;
                line-height: 1.65;
            }

            .modal-info-block p strong {
                display: inline-block;
                min-width: 110px;
                color: #111827;
                font-weight: 400;
            }

            .modal-info-block .keep-strong strong {
                font-weight: 700;
            }

            .modal-info-desc {
                margin-top: 0.35rem;
                margin-bottom: 0.8rem;
            }

            .modal-info-list {
                margin-top: 0.75rem;
                padding-left: 1.2rem;
                color: #374151;
                line-height: 1.7;
            }

            .modal-info-list li {
                margin-bottom: 0.2rem;
            }

            .feature-list {
                list-style: none;
                padding-left: 0;
                margin-left: 0;
                margin-top: -0.35rem;
            }

            .feature-item {
                display: grid;
                grid-template-columns: 20px 1fr;
                column-gap: 0.5rem;
                align-items: start;
            }

            .feature-item svg {
                width: 18px;
                height: 18px;
                flex-shrink: 0;
                justify-self: center;
                margin-top: 0.2rem;
            }

            /* animasi float */
            @keyframes float {
                0%, 100% { transform: translateY(0) translateX(-50%); }
                50% { transform: translateY(-15px) translateX(-50%); }
            }
            .float-animation {
                animation: float 2s ease-in-out infinite;
            }

            /* Force hover text color for CTA when Bootstrap text-white is present */
            .hover-text-amber:hover {
                color: #fbbf24 !important; /* amber-400 */
            }

            .hover-text-gold:hover,
            .hover-text-gold:focus-visible,
            .hover-text-gold:active {
                color: #fbbf24 !important;
            }

            /* Scroll reveal helpers */
            @keyframes fadeUpSoft {
                from { opacity: 0; transform: translateY(18px); }
                to { opacity: 1; transform: translateY(0); }
            }
            .reveal-on-scroll {
                opacity: 0;
                transform: translateY(18px);
            }
            .reveal-on-scroll.show {
                opacity: 1;
                animation: fadeUpSoft 0.7s ease-out forwards;
            }

            /* Side slide variants for About section */
            @keyframes slideInLeft {
                from { opacity: 0; transform: translateX(-50px); }
                to { opacity: 1; transform: translateX(0); }
            }
            @keyframes slideInRight {
                from { opacity: 0; transform: translateX(50px); }
                to { opacity: 1; transform: translateX(0); }
            }
            .reveal-left {
                transform: translateX(-50px);
            }
            .reveal-right {
                transform: translateX(50px);
            }
            .reveal-left.show {
                animation: slideInLeft 0.8s ease-out forwards;
            }
            .reveal-right.show {
                animation: slideInRight 0.8s ease-out forwards;
            }

            /* Highlight facility card icon on hover/click/focus */
            .facility-card:hover .card-icon,
            .facility-card:active .card-icon,
            .facility-card:focus-visible .card-icon {
                color: #FFD700; /* gold */
            }

            /* Highlight facility title text on hover/click/focus */
            .facility-card:hover .facility-title,
            .facility-card:active .facility-title,
            .facility-card:focus-visible .facility-title {
                color: #FFD700; /* gold */
            }
            .facility-highlight-banner {
                overflow: hidden;
                border-radius: 1rem;
                background: #FFD700;
                box-shadow: 0 18px 34px -20px rgba(15, 23, 42, 0.6);
            }

            .facility-highlight-media {
                position: relative;
                min-height: 230px;
            }

            .facility-highlight-media img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                display: block;
            }

            .facility-highlight-overlay {
                position: absolute;
                inset: 0;
                background: linear-gradient(90deg, rgba(30, 64, 175, 0.08) 0%, rgba(30, 64, 175, 0.32) 55%, rgba(30, 64, 175, 0.65) 100%);
            }

            .facility-highlight-logo {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                width: 120px;
                height: 120px;
                border-radius: 1.4rem;
                background: #0f2b5f;
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 0 12px 28px -18px rgba(15, 23, 42, 0.8);
            }

            .facility-highlight-logo img {
                width: 72px;
                height: 72px;
                object-fit: contain;
            }

            .facility-highlight-content {
                color: #ffffff;
                padding: 2rem;
            }

            .facility-highlight-content h3 {
                font-size: clamp(1.8rem, 2.6vw, 3.3rem);
                line-height: 1.18;
                font-weight: 600;
                margin-bottom: 1.45rem;
            }

            .facility-highlight-btn {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                border: 1.7px solid #ffffff;
                border-radius: 0.75rem;
                background: transparent;
                color: #ffffff;
                font-weight: 700;
                padding: 0.65rem 1.5rem;
                text-decoration: none;
                cursor: pointer;
                transition: all 0.25s ease;
            }

            .flow-mini-card {
                border: 1px solid #bfdbfe;
                border-radius: 1rem;
                background: #f8fbff;
                padding: 1rem;
            }

            .flow-mini-list {
                list-style: none;
                padding: 0;
                margin: 0;
            }

            .flow-mini-item {
                position: relative;
                display: grid;
                grid-template-columns: 36px 1fr;
                align-items: start;
                gap: 0.65rem;
                padding-bottom: 0.8rem;
            }

            .flow-mini-item:not(:last-child)::after {
                content: "";
                position: absolute;
                left: 17px;
                top: 38px;
                bottom: 0;
                width: 2px;
                background: linear-gradient(180deg, #60a5fa 0%, #bfdbfe 100%);
            }

            .flow-mini-step {
                width: 36px;
                height: 36px;
                border-radius: 999px;
                border: 1px solid #93c5fd;
                background: #dbeafe;
                color: #1d4ed8;
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 1;
            }

            .flow-mini-step svg {
                width: 15px;
                height: 15px;
            }

            .flow-mini-text {
                padding-top: 0.25rem;
                color: #334155;
                line-height: 1.55;
                font-size: 0.9rem;
            }

            .flow-alur-title {
                font-size: clamp(1.6rem, 2.2vw, 2.2rem);
                line-height: 1.2;
            }

            .flow-alur-subtitle {
                font-size: clamp(0.95rem, 1.1vw, 1.05rem);
                line-height: 1.55;
                max-width: 760px;
                margin: 0.75rem auto 0;
            }

            .flow-alur-grid {
                gap: 1rem;
            }

            .flow-alur-panel {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .flow-alur-image {
                width: min(100%, 620px);
                max-height: clamp(250px, 42vh, 430px);
                height: auto;
                object-fit: contain;
                display: block;
            }

            @media (min-width: 1024px) {
                .flow-alur-grid {
                    align-items: stretch;
                }

                .flow-alur-panel {
                    height: clamp(300px, 46vh, 500px);
                }

                .flow-alur-image,
                .flow-alur-image-online {
                    width: 100%;
                    height: 100%;
                    max-height: none;
                }
            }

            .facility-highlight-btn:hover,
            .facility-highlight-btn:focus-visible {
                background: #ffffff;
                color: #1d4ed8;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             text-decoration: none;
            }

            @media (max-width: 767px) {
                .facility-highlight-content {
                    padding: 1.35rem;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
                }

                .facility-highlight-logo {
                    width: 92px;
                    height: 92px;
                }

                .facility-highlight-logo img {
                    width: 56px;
                    height: 56px;
                }

                .flow-alur-image {
                    max-height: clamp(200px, 36vh, 300px);
                }

                .flow-alur-subtitle {
                    margin-top: 0.6rem;
                }
            }


            /* Remove underline from brand text */
            .brand-link {
                text-decoration: none;
            }
            .brand-link:hover,
            .brand-link:focus-visible {
                text-decoration: none;
            }

            /* Hero button custom styles */
            .hero-cta-btn {
                background-color: transparent;
                border: 2px solid white;
                color: white;
                transition: all 0.3s ease;
            }
            .hero-cta-btn:hover {
                background-color: #fff;
                color: #000 !important;
                border: 2px solid black;
                transform: scale(1.05) translateY(-5px);
                box-shadow: 0 25px 30px -5px rgba(0, 0, 0, 0.4);
                animation: float-hover 1.5s ease-in-out infinite;
            }
            /* Swiper hero indicators (text + underline) */
            .swiper-pagination { list-style: none; padding: 0; margin: 0; }
            .swiper-pagination li {
                position: relative;
                cursor: pointer;
                padding: 6px 10px;
                opacity: 0.85;
                transition: opacity 0.22s ease, transform 0.22s ease;
                display: inline-flex;
                align-items: center;
                gap: 10px;
            }
            .swiper-pagination li .label { font-weight:600; }
            .swiper-pagination li .underline {
                position: absolute;
                left: 0;
                right: 0;
                bottom: -4px;
                height: 1px;
                background: #fff;
                transform-origin: center;
                transform: scaleX(0);
                transition: transform 0.45s cubic-bezier(.2,.9,.2,1);
                border-radius: 3px;
            }
            .swiper-pagination li.active {
                opacity: 1;
                transform: translateY(-2px);
            }
            .swiper-pagination li.active .underline {
                transform: scaleX(1);
            }

            /* Hero text animation - initial state */
            .hero-anim {
                opacity: 0;
                transform: translateY(14px);
                transition: opacity 0.6s ease, transform 0.6s ease;
            }
            .hero-anim.in {
                opacity: 1;
                transform: translateY(0);
            }
            .hero-cta-btn:active,
            .hero-cta-btn:focus-visible {
                animation: pulse 1s ease-in-out;
                transform: scale(0.95);
            }
            @keyframes pulse {
                0%, 100% { opacity: 1; }
                50% { opacity: 0.5; }
            }
            @keyframes float-hover {
                0%, 100% { transform: scale(1.05) translateY(-5px); }
                50% { transform: scale(1.05) translateY(-10px); }
            }

        </style>

        <!-- whatsapp -->
        <a class="fixed bottom-4 right-4 z-50 md:z-0 group" href="https://wa.me/6281234567890?text=Halo%20Admin%20Balatkop,%20saya%20ingin%20tanya%20mengenai%20sarana%20prasarana..."target="_blank">                
            <span class="absolute inline-flex h-2 w-2 rounded-full opacity-75"></span>                
            <div class="relative bg-green-500 text-white p-3 rounded-full shadow-2xl flex items-center justify-center group-hover:scale-110">
                <svg class="w-8 h-8 md:w-10 md:h-10" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.72.94 3.659 1.437 5.63 1.438h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                </svg>                   
            </div>
        </a>
        <!-- navbar -->
        <nav class="bg-blue-950 shadow-lg sticky top-0 z-30">
            <div class="px-2 lg:px-8 relative">
                <div class="flex justify-between items-center h-20">
                    <!-- logo -->
                    <div class="flex items-center gap-3 slide-in">
                        <a href="#home" class="flex items-center group brand-link">
                            <div class="w-12 h-12 rounded-full flex items-center justify-center mr-3 group-hover:scale-110 transition-transform">
                                <img src="<?= base_url('images/core/logo11.png') ?>" alt="Logo BalatKop" class="w-12 h-12 mr-2 inline-block rounded-full">
                            </div>
                            <div class="flex flex-col leading-tight">
                                <span style="font-family: 'Lora', serif; font-weight: 600;" class="text-2xl md:text-3xl lg:text-4xl">
                                    <span style="color: #fff;">Sarana-</span><span style="color: #FFD700;">Prasarana</span>
                                </span>
                                <span style="font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 400; letter-spacing: 0.03em;" class="text-xs sm:text-sm md:text-sm">
                                    <span style="color: #FFD700;">Balatkop</span> <span style="color: #fff;">UKMK Jateng</span>
                                </span>
                            </div>
                        </a>
                    </div>
                    <!-- menu + actions (kanan) -->
                    <div class="flex items-center gap-6">
                        <!-- menu -->
                        <div class="hidden md:flex space-x-8">
                            <a href="#home" class="nav-link text-white font-medium transition" style="transition:color .2s;" onmouseover="this.style.color='#FFD700'" onmouseout="this.style.color=''" onfocus="this.style.color='#FFD700'" onblur="this.style.color=''">Beranda</a>
                            <a href="#tentang" class="nav-link text-white font-medium transition" style="transition:color .2s;" onmouseover="this.style.color='#FFD700'" onmouseout="this.style.color=''" onfocus="this.style.color='#FFD700'" onblur="this.style.color=''">Tentang</a>
                            <a href="#fasilitas" class="nav-link text-white font-medium transition" style="transition:color .2s;" onmouseover="this.style.color='#FFD700'" onmouseout="this.style.color=''" onfocus="this.style.color='#FFD700'" onblur="this.style.color=''">Fasilitas</a>
                            <a href="#galeri" class="nav-link text-white font-medium transition" style="transition:color .2s;" onmouseover="this.style.color='#FFD700'" onmouseout="this.style.color=''" onfocus="this.style.color='#FFD700'" onblur="this.style.color=''">Galeri</a>
                            <a href="#kontak" class="nav-link text-white font-medium transition" style="transition:color .2s;" onmouseover="this.style.color='#FFD700'" onmouseout="this.style.color=''" onfocus="this.style.color='#FFD700'" onblur="this.style.color=''">Kontak</a>
                        </div>
                        <!-- icon night mode  --> 
                        <div>
                            <button id="theme-toggle" class="p-2 rounded-lg hover:bg-gray-100 transition">
                                <svg id="theme-toggle-dark-icon" class="w-6 h-6 text-gray-700 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 118.646 3.646 9.003 9.003 0 0020.354 15.354z"></path>
                                </svg>
                                <svg id="theme-toggle-light-icon" class="w-6 h-6 text-gray-700 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">                            
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-10h1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </button>
                        </div>
                        <!-- humberger --> 
                        <div>
                            <button onclick="toggleMenu()" class="md:hidden p-2 rounded-lg bg-blue-950 border border-gray-300 transition">
                                <svg class="w-6 h-6" fill="none" stroke="#fff" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                                </svg>
                            </button>
                        </div>
                    </div><!-- end: menu + actions -->
                </div>
                <!-- Mobile Menu -->
                <div id="mobileMenu" class="mobile-menu md:hidden pb-4">
                    <a href="#home" class="block py-2 transition"><span class="mobile-link-text">Beranda</span></a>
                    <a href="#tentang" class="block py-2 transition"><span class="mobile-link-text">Tentang</span></a>
                    <a href="#fasilitas" class="block py-2 transition"><span class="mobile-link-text">Fasilitas</span></a>
                    <a href="#galeri" class="block py-2 transition"><span class="mobile-link-text">Galeri</span></a>
                    <a href="#kontak" class="block py-2 transition"><span class="mobile-link-text">Kontak</span></a>
                </div>
            </div>
        </nav>
        <!-- /navbar -->
        
        <!-- Hero section -->
         <section id="home" class=" flex items-center justify-center h-screen w-full overflow-hidden">
            <div class="h-screen w-full overflow-x-hidden relative swiper mySwiper">
                <!-- slide -->
                <div class="swiper-wrapper">                    
                    <!-- 1 -->
                    <div class="swiper-slide h-screen w-full relative bg-black">
                        <img src="<?= base_url('images/core/slide1.png') ?>" alt="Slide 1" class="w-full h-full object-cover mask-l-from-20% mask-l-to-90%">
                        <div class="absolute inset-0 flex flex-col justify-center text-white text-left p-4 pl-16 md:pl-20">
                            <div class="md:max-w-2/3 lg:max-w-1/2 lg:ml-15">
                                <p class="text-lg reveal-left reveal-on-scroll">Slide 1</p>
                                <h1 class="text-9xl leading-8 mt-4 md:text-6xl font font-bold mb-4 uppercase reveal-left reveal-on-scroll">
                                    <span style="color:#FFD700;">Selamat Datang di </span>
                                    <span style="color:#fff;">Sarana Prasarana</span>
                                    <span style="color:#FFD700;"> Balatkop UKMK</span><span style="color:#FFD700; margin-left:8px;">JATENG</span>
                                </h1>
                                <p class="text-sm mt-2 md:text-lg mb-8 reveal-left reveal-on-scroll">Siap melayani kebutuhan koperasi, UKM, dan masyarakat Provinsi Jawa Tengah</p>
                                <a href="#tentang" class="reveal-left reveal-on-scroll hero-cta-btn mt-5 text-sm w-62.5 justify-center uppercase inline-flex items-center gap-3 text-white text-decoration-none px-8 py-4 shadow-2xl focus-visible:animate-pulse active:scale-95">
                                    Jelajahi Sekarang
                                </a>
                                <style>
                                    .hero-cta-btn {
                                        background-color: #172554 !important;
                                        border: 2px solid #172554 !important;
                                        color: #FFD700 !important;
                                    }
                                    .hero-cta-btn:hover {
                                        background-color: #FFD700 !important;
                                        color: #172554 !important;
                                        border: 2px solid #FFD700 !important;
                                    }
                                </style>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="swiper-slide h-screen w-full relative bg-black">
                        <img src="<?= base_url('images/core/slide2.png') ?>" alt="Slide 2" class="w-full h-full object-cover mask-l-from-20% mask-l-to-90%">
                        <div class="absolute inset-0 flex flex-col justify-center text-white text-left p-4 pl-16 md:pl-20">
                            <div class="md:max-w-2/3 lg:max-w-1/2 lg:ml-15">
                                <p class="text-lg">Slide 2</p>
                                <h1 class="text-9xl leading-8 mt-4 md:text-6xl font font-bold mb-4 uppercase">
                                    <span style="color:#fff;">BALATKOP</span>
                                    <span style="color:#FFD700;">UKMK</span>
                                    <span style="color:#FFD700; margin-left:8px;">JATENG</span>
                                </h1>
                                <p class="text-sm mt-2 md:text-lg mb-8">Sebuah instansi pelatihan yang memberikan pelatihan dan pendampingan terbaik untuk koperasi dan UKM di Provinsi Jawa Tengah.</p>
                                <a href="#tentang" class="hero-cta-btn mt-5 text-sm w-62.5 justify-center uppercase inline-flex items-center gap-3 text-white text-decoration-none px-8 py-4 shadow-2xl focus-visible:animate-pulse active:scale-95">
                                    Cari Tahu Lebih Lanjut!
                                </a>
                            </div>
                        </div>
                    </div>                         
                    <!-- 3 -->
                    <div class="swiper-slide h-screen w-full relative bg-black">
                        <img src="<?= base_url('images/core/slide3.png') ?>" alt="Slide 3" class="w-full h-full object-cover mask-l-from-20% mask-l-to-90%">
                        <div class="absolute inset-0 flex flex-col justify-center text-white text-left p-4 pl-16 md:pl-20">
                            <div class="md:max-w-2/3 lg:max-w-1/2 lg:ml-15">
                                <p class="text-lg">Slide 3</p>
                                <h1 class="text-9xl leading-8 mt-4 md:text-6xl font font-bold mb-4 uppercase">Ruang <span style="color:#FFD700;">KELAS & RAPAT</span></h1>
                                <p class="text-sm mt-2 md:text-lg mb-8">Ruangan dengan berbagai fasilitas penunjang acara baik untuk kegiatan pelatihan maupun pertemuan.</p>
                                <a href="#fasilitas" class="hero-cta-btn mt-5 text-sm w-62.5 justify-center uppercase inline-flex items-center gap-3 text-white text-decoration-none px-8 py-4 shadow-2xl focus-visible:animate-pulse active:scale-95">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    </div>  
                    <!-- 4 -->
                    <div class="swiper-slide h-screen w-full relative bg-black">
                        <img src="<?= base_url('images/core/slide4.png') ?>" alt="Slide 4" class="w-full h-full object-cover mask-l-from-20% mask-l-to-90%">
                        <div class="absolute inset-0 flex flex-col justify-center text-white text-left p-4 pl-16 md:pl-20">
                            <div class="md:max-w-2/3 lg:max-w-1/2 lg:ml-15">
                                <p class="text-lg">Slide 4</p>
                                <h1 class="text-9xl leading-8 mt-4 md:text-6xl font font-bold mb-4 uppercase">Gedung <span style="color:#FFD700;">AULA</span></h1>
                                <p class="text-sm mt-2 md:text-lg mb-8">Ruangan dengan daya tampung yang besar serta fasilitas-fasilitas yang dijamin memuaskan.</p>
                                <a href="#fasilitas" class="hero-cta-btn mt-5 text-sm w-62.5 justify-center uppercase inline-flex items-center gap-3 text-white text-decoration-none px-8 py-4 shadow-2xl focus-visible:animate-pulse active:scale-95">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    </div>                             
                    <!-- 5 -->
                    <div class="swiper-slide h-screen w-full relative bg-black">
                        <img src="<?= base_url('images/core/slide5.png') ?>" alt="Slide 5" class="w-full h-full object-cover mask-l-from-20% mask-l-to-90%">
                        <div class="absolute inset-0 flex flex-col justify-center text-white text-left p-4 pl-16 md:pl-20">
                            <div class="md:max-w-2/3 lg:max-w-1/2 lg:ml-15">
                                <p class="text-lg">Slide 5</p>
                                <h1 class="text-9xl leading-8 mt-4 md:text-6xl font font-bold mb-4 uppercase"><span style="color:#FFD700;">LABORATORIUM</span></h1>
                                <p class="text-sm mt-2 md:text-lg mb-8">Ruangan pelatihan dengan berbagai fasilitas yang sesuai dengan acara atau kegiatan yang dilaksanakan.</p>
                                <a href="#fasilitas" class="hero-cta-btn mt-5 text-sm w-62.5 justify-center uppercase inline-flex items-center gap-3 text-white text-decoration-none px-8 py-4 shadow-2xl focus-visible:animate-pulse active:scale-95">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    </div>   
                    <!-- 6 -->
                </div>

                <!-- indikator -->
                <div class="absolute bottom-0 left-0 right-0 w-full flex justify-center p-4">
                    <ul class="swiper-pagination flex absolute bottom-4 mb-5 justify-center w-full gap-4 p-4 text-white">
                        <li class="nav-link" data-index="0"><span class="label">Slide 1</span><span class="underline"></span></li>
                        <li class="nav-link" data-index="1"><span class="label">Slide 2</span><span class="underline"></span></li>
                        <li class="nav-link" data-index="2"><span class="label">Slide 3</span><span class="underline"></span></li>
                        <li class="nav-link" data-index="3"><span class="label">Slide 4</span><span class="underline"></span></li>
                        <li class="nav-link" data-index="4"><span class="label">Slide 5</span><span class="underline"></span></li>
                    </ul>   
                </div>
            </div>
        </section>
        <!-- /Section Hero -->

        <!-- About Section -->
        <section id="tentang"class="pt-36" >
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mb-4 reveal-on-scroll">
                <div class="bg-blue-950 rounded-2xl px-4 py-2 shadow text-center mx-auto" style="white-space:nowrap; display:inline-block; margin-left:auto; margin-right:auto;">
                    <span class="font-bold heading-modern bounce-3s section-title-fancy text-white" style="font-size:2rem;">Tentang Sarana </span>
                    <span class="font-bold heading-modern bounce-3s section-title-fancy" style="color:#FFD700;font-size:2rem;">Prasarana Kami</span>
                </div>
                <style>
                @media (max-width: 600px) {
                    .section-title-fancy {
                        font-size: 1.2rem !important;
                    }
                }
                </style>
            </div>
            <div class="max-w-7xl mx-auto md:px-4 sm:px-6 lg:px-8 bg-blue-950 rounded-3xl shadow p-8 mt-2 reveal-on-scroll">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="space-y-6 reveal-left reveal-on-scroll">
                        <h3 class="text-3xl font-bold text-white">Deskripsi <span style="color:#FFD700;">Umum</span></h3>
                        <p class="text-white text-lg leading-relaxed">
                            Sarana dan prasarana kami dirancang untuk mendukung penuh kelancaran operasional kegiatan baik formal maupun non-formal. 
                            Dengan infrastruktur modern dan fasilitas lengkap serta kebersihan yang terjaga, kami berkomitmen memberikan layanan terbaik kepada masyarakat.
                        </p>
                        <p class="text-white text-lg leading-relaxed">
                            Setiap fasilitas telah direncanakan dengan matang untuk memastikan kenyamanan pengguna dan efisiensi kerja maksimal.
                        </p>
                        <div class="flex gap-4 pt-4">
                            <div class="flex-1 bg-blue-50 p-6 rounded-xl">
                                <div class="text-3xl font-bold text-blue-600">2000+</div>
                                <div class="text-gray-600">m² Area</div>
                            </div>
                            <div class="flex-1 bg-green-50 p-6 rounded-xl">
                                <div class="text-3xl font-bold text-green-600">24/7</div>
                                <div class="text-gray-600">Keamanan</div>
                            </div>
                        </div>
                    </div>
                    <div class="relative reveal-right reveal-on-scroll">
                        <div class="absolute inset-0 bg-gray-300 rounded-2xl transform rotate-3"></div>
                        <div class="relative bg-transparent rounded-2xl overflow-hidden shadow-2xl transform -rotate-1 hover:rotate-0 transition-transform h-96 flex items-center justify-center">
                            <img id="aboutAutoImage" src="<?= base_url('images/core/bg-balatkop1.jpeg') ?>" alt="About Image" class="w-full h-full object-cover about-auto-image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /about section -->

        <!-- Gedung section -->
        <section class="pt-20" id="fasilitas">
            <div class="mx-auto reveal-on-scroll">
                <div class="bg-blue-950 p-6 md:p-10 shadow-inner">
                    <p class="text-4xl font-extrabold text-center text-white heading-modern bounce-3s section-title-fancy reveal-on-scroll mb-6">Gedung | <span style="color:#FFD700;"> Ruangan</span></p>
                    <!-- Swiper -->
                        <div class="swiper2 mySwiper2 overflow-hidden mt-5">
                            <div class="swiper-wrapper">
                                <!-- Aula -->
                                <div class="w-max-xl h-auto swiper-slide flex justify-center">                            
                                    <div class="w-full max-w-md sm:max-w-lg md:max-w-6xl bg-white rounded shadow-xl overflow-hidden card-hover hover:shadow-2xl transition-shadow text-left h-full flex flex-col reveal-on-scroll">
                                        <div class="h-52 md:h-70 flex items-center justify-center">
                                            <img src="<?= base_url('images/gedung%20aula/teratai.JPG') ?>" alt="Gedung Aula" class="w-full h-full object-cover block">
                                        </div>
                                        <div class="p-6 flex flex-col flex-1">
                                            <h3 class="text-2xl font-bold text-blue-600 mb-2">Gedung Aula</h3>
                                            <div class="space-y-2 mb-1">
                                                <div class="flex items-center text-gray-700">
                                                    <p class="text-gray-600">Gedung besar yang dapat digunakan untuk melakukan berbagai kegiatan</p> 
                                                </div>
                                            </div>
                                            <ul class="space-y-3 mb-4 text-sm text-gray-700 feature-list">
                                                <li class="feature-item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-blue-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16v12H4z"/><path d="M8 20h8"/><path d="M12 16v4"/></svg>
                                                    <span>Ruangan luas cocok dengan berbagai kegiatan</span>
                                                </li>
                                                <li class="feature-item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-blue-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M8 9h8"/><path d="M8 13h6"/></svg>
                                                    <span>Dilengkapi dengan fasilitas pendukung</span>
                                                </li>
                                                <li class="feature-item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-blue-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z"/><path d="M4 20a8 8 0 0 1 16 0"/></svg>
                                                    <span>Kapasitas yang dapat menampung ±200 orang</span>
                                                </li>
                                            </ul>
                                            <button onclick="openBuildingModal('aula')" class="w-full bg-blue-950 text-white py-3 rounded-lg font-semibold hover:bg-blue-800 transition mt-auto hover:scale-105 focus-visible:animate-pulse hover-text-amber">Lihat Detail</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Ruang Kelas/Rapat -->
                                <div class="w-max-xl h-auto md: swiper-slide flex justify-center">                                
                                    <div class="w-full max-w-md sm:max-w-lg md:max-w-6xl bg-white rounded shadow-xl overflow-hidden card-hover hover:shadow-2xl transition-shadow text-left h-full flex flex-col reveal-on-scroll">
                                        <div class="h-52 md:h-70 flex items-center justify-center">
                                            <video class="w-full h-full object-cover block" autoplay muted loop playsinline>
                                                <source src="<?= base_url('images/core/office1.mp4') ?>" type="video/mp4">
                                            </video>
                                        </div>
                                        <div class="p-6 flex flex-col flex-1">
                                            <h3 class="text-2xl font-bold text-blue-600 mb-2">Ruang Kelas | Rapat</h3>
                                            <div class="space-y-2 mb-1">
                                                <div class="flex items-center text-gray-700">
                                                    <p class="text-gray-600">Area fungsionalitas yang dilengkapi dengan berbaagi perangkat pendukung.</p>
                                                </div>
                                            </div>
                                            <ul class="space-y-3 mb-4 text-sm text-gray-700 feature-list">
                                                <li class="feature-item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-blue-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18"/><path d="M7 21V9l5-3 5 3v11"/></svg>
                                                    <span>Rapat Formal & Corporate Meeting</span>
                                                </li>
                                                <li class="feature-item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-blue-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="12" rx="2"/><path d="M8 20h8"/><path d="M12 16v4"/></svg>
                                                    <span>Workshop & Pelatihan Kelas</span>
                                                </li>
                                                <li class="feature-item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-blue-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 7H4"/><path d="M20 11H4"/><path d="M20 15H4"/><path d="M20 19H4"/></svg>
                                                    <span>Sosialisasi & Seminar Kecil</span>
                                                </li>
                                            </ul>
                                            <button onclick="openBuildingModal('ruang')" class="w-full bg-blue-950 text-white py-3 rounded-lg font-semibold hover:bg-blue-800 transition mt-auto hover:scale-105 focus-visible:animate-pulse hover-text-amber">Lihat Detail</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Asrama -->
                                <div class="w-max-xl h-auto swiper-slide flex justify-center">                                
                                    <div class="w-full max-w-md sm:max-w-lg md:max-w-6xl bg-white rounded shadow-xl overflow-hidden card-hover hover:shadow-2xl transition-shadow text-left h-full flex flex-col reveal-on-scroll">
                                        <div class="h-52 md:h-70 flex items-center justify-center">
                                            <video class="w-full h-full object-cover block" autoplay muted loop playsinline>
                                                <source src="<?= base_url('images/core/Asrama1.mp4') ?>" type="video/mp4">
                                            </video>
                                        </div>
                                        <div class="p-6 flex flex-col flex-1">
                                            <h3 class="text-2xl font-bold text-blue-600 mb-2">Asrama Matahari</h3>
                                            <div class="space-y-2 mb-1">
                                                <div class="flex items-center text-gray-700">
                                                    <p class="text-gray-600">Asrama dan fasilitas pedukung yang ada di Balatkop.</p>
                                                </div>
                                            </div>
                                            <ul class="space-y-3 mb-4 text-sm text-gray-700 feature-list">
                                                <li class="feature-item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-blue-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5V5.5A1.5 1.5 0 0 1 5.5 4H20"/><path d="M8 7h8"/><path d="M8 11h8"/><path d="M8 15h6"/></svg>
                                                    <span>Kamar tidur yang nyaman dengan harga terjangkau</span>
                                                </li>
                                                <li class="feature-item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-blue-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 12h8"/><path d="M12 8v8"/><circle cx="12" cy="12" r="9"/></svg>
                                                    <span>Pelayanan dan keamanan yang memuaskan</span>
                                                </li>
                                                <li class="feature-item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-blue-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 20h20"/><path d="M7 20V9l5-3 5 3v11"/></svg>
                                                    <span>Kebersihan fasilitas yang terjaga</span>
                                                </li>
                                            </ul>
                                            <button onclick="openBuildingModal('asrama')" class="w-full bg-blue-950 text-white py-3 rounded-lg font-semibold hover:bg-blue-800 transition mt-auto hover:scale-105 focus-visible:animate-pulse hover-text-amber">Lihat Detail</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Laboratorium -->
                                <div class="w-max-xl h-auto swiper-slide flex justify-center">                            
                                    <div class="w-full max-w-md sm:max-w-lg md:max-w-6xl bg-white rounded shadow-xl overflow-hidden card-hover hover:shadow-2xl transition-shadow text-left h-full flex flex-col reveal-on-scroll">
                                        <div class="h-52 md:h-70 flex items-center justify-center">
                                            <video class="w-full h-full object-cover block" autoplay muted loop playsinline>
                                                <source src="<?= base_url('images/core/Aula%20Anggrek.mp4') ?>" type="video/mp4">
                                            </video>
                                        </div>
                                        <div class="p-6 flex flex-col flex-1">
                                            <h3 class="text-2xl font-bold text-blue-600 mb-2">Laboratorium</h3>
                                            <div class="space-y-2 mb-1">
                                                <div class="flex items-center text-gray-700">
                                                    <p class="text-gray-600">Gedung dengan beragam fungsi yang berbeda-beda, tergantung dengan kebutuhan.</p> 
                                                </div>
                                            </div>
                                            <ul class="space-y-3 mb-4 text-sm text-gray-700 feature-list">
                                                <li class="feature-item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-blue-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16v12H4z"/><path d="M8 20h8"/><path d="M12 16v4"/></svg>
                                                    <span>Kelengkapan alat dan fasilitas pendukung</span>
                                                </li>
                                                <li class="feature-item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-blue-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M8 9h8"/><path d="M8 13h6"/></svg>
                                                    <span>Dapat digunakan sebagi workshop & pelatihan</span>
                                                </li>
                                                <li class="feature-item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-blue-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z"/><path d="M4 20a8 8 0 0 1 16 0"/></svg>
                                                    <span>Kebersihan dan kerapian yang terjaga</span>
                                                </li>
                                            </ul>
                                            <button onclick="openBuildingModal('laboratorium')" class="w-full bg-blue-950 text-white py-3 rounded-lg font-semibold hover:bg-blue-800 transition mt-auto hover:scale-105 focus-visible:animate-pulse hover-text-amber">Lihat Detail</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination mt-5"></div>
                        </div>    
                    </div>
                </div>
            </div>
        </section>
        <!-- /gedung section -->

        <!-- Fasilitas Section -->
        <section id="fasilitas" class="py-20 ">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 reveal-on-scroll">
                <div class="facility-highlight-banner mb-10 reveal-on-scroll" style="background:#172554;">
                    <div class="row g-0 align-items-stretch">
                        <div class="col-md-5">
                            <div class="facility-highlight-media">
                                <img src="<?= base_url('images/core/slide1.png') ?>" alt="Banner fasilitas">
                                <div class="facility-highlight-overlay"></div>
                                <div class="facility-highlight-logo">
                                    <img src="<?= base_url('images/core/logo11.png') ?>" alt="Logo Balatkop">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 d-flex align-items-center">
                            <div class="facility-highlight-content">
                                <h3>
                                    Pesan <span style="color:#FFD700;">mudah</span><br>
                                    <span style="color:#FFD700;">nikmati</span> harga <span style="color:#FFD700;">terbaik</span>
                                </h3>
                                <button type="button" onclick="openModal('alurPenyewaan')" class="facility-highlight-btn facility-highlight-btn-blue">Alur Penyewaan</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center mb-4">
                    <div class="bg-blue-950 rounded-2xl px-4 py-2 shadow inline-block text-center">
                            <span class="text-4xl font-bold heading-modern bounce-3s section-title-fancy text-white whitespace-nowrap" style="font-size:2rem;">Fasilitas Lengkap</span>
                        <div class="h-2 border-b-2 border-yellow-400"></div>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Fasilitas Card - Kesehatan -->
                    <button onclick="openModal('kesehatan')" class="bg-blue-950 rounded-3xl p-6 shadow-xl transition cursor-pointer text-left facility-card reveal stagger-1 reveal-on-scroll hover:bg-blue-950 hover:scale-105 hover:shadow-2xl focus-visible:animate-pulse group text-white">
                        <div class="facility-hero mb-5">
                            <svg class="card-icon" style="color:#FFD700;" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold facility-title mb-2">Kesehatan</h3>
                        <p class="text-sm facility-description">Klinik kesehatan dengan kelengkapan p3k</p>
                    </button>

                    <!-- Fasilitas Card - Perpustakaan -->
                    <button onclick="openModal('perpustakaan')" class="bg-blue-950 rounded-3xl p-6 shadow-xl transition cursor-pointer text-left facility-card reveal stagger-2 reveal-on-scroll hover:bg-blue-950 hover:scale-105 hover:shadow-2xl focus-visible:animate-pulse group text-white">
                        <div class="facility-hero mb-5">
                            <svg class="card-icon" style="color:#FFD700;" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
                                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold facility-title mb-2">Perpustakaan</h3>
                        <p class="text-sm facility-description">Koleksi buku lengkap dengan ruang baca nyaman</p>
                    </button>

                    <!-- Fasilitas Card - Kantin -->
                    <button onclick="openModal('ruangtransit')" class="bg-blue-950 rounded-3xl p-6 shadow-xl transition cursor-pointer text-left facility-card reveal stagger-3 reveal-on-scroll hover:bg-blue-950 hover:scale-105 hover:shadow-2xl focus-visible:animate-pulse group text-white">
                        <div class="facility-hero mb-5">
                            <svg class="card-icon" style="color:#FFD700;stroke:#FFD700;" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#FFD700" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="7" width="20" height="13" rx="2"/>
                                <path d="M6 7V5a4 4 0 0 1 8 0v2"/>
                                <path d="M9 13h6"/>
                                <path d="M9 16h6"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold facility-title mb-2">Ruang Transit</h3>
                        <p class="text-sm facility-description">Ruang transit nyaman untuk istirahat dan persiapan sebelum kegiatan utama</p>
                    </button>

                    <!-- Fasilitas Card - Parkir -->
                    <button onclick="openModal('parkir')" class="bg-blue-950 rounded-3xl p-6 shadow-xl transition cursor-pointer text-left facility-card reveal stagger-4 reveal-on-scroll hover:bg-blue-950 hover:scale-105 hover:shadow-2xl focus-visible:animate-pulse group text-white">
                        <div class="facility-hero mb-5">
                            <svg class="card-icon" style="color:#FFD700;stroke:#FFD700;" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#FFD700" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="3" width="18" height="18" rx="2"/>
                                <path d="M9 17V7h4a3 3 0 0 1 0 6H9"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold facility-title mb-2">Parkir</h3>
                        <p class="text-sm facility-description">Lahan parkir luas dengan sistem keamanan modern</p>
                    </button>

                    <button onclick="openModal('ruangtunggu')" class="bg-blue-950 rounded-3xl p-6 shadow-xl transition cursor-pointer text-left facility-card reveal stagger-5 reveal-on-scroll hover:bg-blue-950 hover:scale-105 hover:shadow-2xl focus-visible:animate-pulse group text-white">
                        <div class="facility-hero mb-5">
                            <svg class="card-icon" style="color:#FFD700;stroke:#FFD700;" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#FFD700" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                                <polyline points="9 22 9 12 15 12 15 22"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold facility-title mb-2">Ruang Tunggu</h3>
                        <p class="text-sm facility-description">Ruang tunggu modern dengan fasilitas nyaman dan lengkap untuk peserta</p>
                    </button>
                    <!-- Fasilitas Card - Mushola -->
                    <button onclick="openModal('mushola')" class="bg-blue-950 rounded-3xl p-6 shadow-xl transition cursor-pointer text-left facility-card reveal stagger-6 reveal-on-scroll hover:bg-blue-950 hover:scale-105 hover:shadow-2xl focus-visible:animate-pulse group text-white">
                        <div class="facility-hero mb-5">
                            <svg class="card-icon" style="color:#FFD700;stroke:#FFD700;" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#FFD700" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 21h18"/>
                                <path d="M5 21V11l7-6 7 6v10"/>
                                <circle cx="12" cy="5" r="1.5" fill="#FFD700"/>
                                <path d="M12 3v2.5"/>
                                <path d="M8 13h8v8H8z"/>
                                <path d="M12 8.5c-2.5 0-4 1.5-4 3v1.5h8V11.5c0-1.5-1.5-3-4-3z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold facility-title mb-2">Mushola</h3>
                        <p class="text-sm facility-description">Mushola bersih dan nyaman dengan fasilitas ibadah lengkap</p>
                    </button>

                    <!-- Fasilitas Card - Smoking Area -->
                    <button onclick="openModal('smokingarea')" class="bg-blue-950 rounded-3xl p-6 shadow-xl transition cursor-pointer text-left facility-card reveal stagger-7 reveal-on-scroll hover:bg-blue-950 hover:scale-105 hover:shadow-2xl focus-visible:animate-pulse group text-white">
                        <div class="facility-hero mb-5">
                            <img src="https://img.icons8.com/?size=100&id=8060&format=png&color=000000" alt="Smoking Icon" width="32" height="32" style="filter: brightness(0) saturate(100%) invert(77%) sepia(80%) saturate(500%) hue-rotate(0deg);" />
                        </div>
                        <h3 class="text-xl font-bold facility-title mb-2">Smoking Area</h3>
                        <p class="text-sm facility-description">Area khusus merokok yang nyaman dan terpisah dari ruang utama</p>
                    </button>

                    <!-- Fasilitas Card - Keamanan -->
                    <button onclick="openModal('keamanan')" class="bg-blue-950 rounded-3xl p-6 shadow-xl transition cursor-pointer text-left facility-card reveal stagger-8 reveal-on-scroll hover:bg-blue-950 hover:scale-105 hover:shadow-2xl focus-visible:animate-pulse group text-white">
                        <div class="facility-hero mb-5">
                            <svg class="card-icon" style="color:#FFD700;stroke:#FFD700;" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#FFD700" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                <path d="m9 12 2 2 4-4"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold facility-title mb-2">Keamanan</h3>
                        <p class="text-sm facility-description">Sistem keamanan berlapis dengan CCTV 24 jam</p>
                    </button>
                </div>
            </div>
        </section>
        <!-- /fasilitas section -->

        <!-- Gallery Section -->
        <section id="galeri" class="pt-20">
            <div class="w-full bg-blue-950 p-10 mx-auto px-4 sm:px-6 lg:px-8 reveal-on-scroll">
                <p class="text-4xl font-bold text-center heading-modern bounce-3s section-title-fancy reveal-on-scroll">
                    <span class="text-white">Galeri</span><span style="color: #FFD700;"> Foto</span>
                </p>
                
                <!-- Swiper Marquee -->
                <div class="swiperGaleri swiperGaleriTop marquee">
                    <div class="swiper-wrapper marquee-wrapper">
                        <div class="swiper-slide marquee-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                            <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                            </div>
                        </div>
                        <div class="swiper-slide marquee-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                            <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                            </div>
                        </div>                            
                        <div class="swiper-slide marquee-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                            <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                            </div>
                        </div>
                        <div class="swiper-slide marquee-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                            <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                            </div>
                        </div>
                        <div class="swiper-slide marquee-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                            <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                            </div>
                        </div>
                        <div class="swiper-slide marquee-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                            <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                            </div>
                        </div>                                                                                                            
                    </div>
                </div>

                <div class="swiperGaleri swiperGaleriBottom marquee mt-4">
                    <div class="swiper-wrapper marquee-wrapper">
                        <div class="swiper-slide marquee-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                            <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                            </div>
                        </div>
                        <div class="swiper-slide marquee-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                            <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                            </div>
                        </div>                            
                        <div class="swiper-slide marquee-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                            <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                            </div>
                        </div>
                        <div class="swiper-slide marquee-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                            <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                            </div>
                        </div>
                        <div class="swiper-slide marquee-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                            <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                            </div>
                        </div>
                        <div class="swiper-slide marquee-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                            <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                            </div>
                        </div>                                                                                                            
                    </div>
                </div>                
            </div>
        </section>
                <!-- <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="group relative overflow-hidden rounded-2xl shadow-lg card-hover h-64 bg-gray-200 reveal-scale stagger-1 reveal-on-scroll cursor-pointer transition-transform duration-300 hover:scale-105 active:scale-100 gallery-item" data-img="<?= base_url('images/core/bg-balatkop1.jpeg') ?>" data-alt="Gedung Utama">
                        <img src="<?= base_url('images/core/bg-balatkop1.jpeg') ?>" alt="Gedung Utama" class="absolute inset-0 w-full h-full object-cover gallery-img">
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 group-active:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Gedung Utama</span>
                        </div>
                    </div>
                    
                    <div class="group relative overflow-hidden rounded-2xl shadow-lg card-hover h-64 bg-gray-200 reveal-scale stagger-2 reveal-on-scroll cursor-pointer transition-transform duration-300 hover:scale-105 active:scale-100 gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruangan">
                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" alt="Ruangan" class="absolute inset-0 w-full h-full object-cover gallery-img">
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 group-active:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruangan</span>
                        </div>
                    </div>
                    
                    <div class="group relative overflow-hidden rounded-2xl shadow-lg card-hover h-64 bg-gray-200 reveal-scale stagger-3 reveal-on-scroll cursor-pointer transition-transform duration-300 hover:scale-105 active:scale-100 gallery-item" data-img="<?= base_url('images/core/bg-balatkop3.jpeg') ?>" data-alt="Lobby">
                        <img src="<?= base_url('images/core/bg-balatkop3.jpeg') ?>" alt="Lobby" class="absolute inset-0 w-full h-full object-cover gallery-img">
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 group-active:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Lobby</span>
                        </div>
                    </div>
                    
                    <div class="group relative overflow-hidden rounded-2xl shadow-lg card-hover h-64 bg-gray-200 reveal-scale stagger-4 reveal-on-scroll cursor-pointer transition-transform duration-300 hover:scale-105 active:scale-100 gallery-item" data-img="<?= base_url('images/core/bg-balatkop4.jpeg') ?>" data-alt="Fasilitas">
                        <img src="<?= base_url('images/core/bg-balatkop4.jpeg') ?>" alt="Fasilitas" class="absolute inset-0 w-full h-full object-cover gallery-img">
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 group-active:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Fasilitas</span>
                        </div>
                    </div>
                    
                    <div class="group relative overflow-hidden rounded-2xl shadow-lg card-hover h-64 bg-gray-200 reveal-scale stagger-5 reveal-on-scroll cursor-pointer transition-transform duration-300 hover:scale-105 active:scale-100 gallery-item" data-img="<?= base_url('images/core/bg-balatkop5.jpeg') ?>" data-alt="Kantin">
                        <img src="<?= base_url('images/core/bg-balatkop5.jpeg') ?>" alt="Kantin" class="absolute inset-0 w-full h-full object-cover gallery-img">
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 group-active:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Kantin</span>
                        </div>
                    </div>
                    
                    <div class="group relative overflow-hidden rounded-2xl shadow-lg card-hover h-64 bg-gray-200 reveal-scale stagger-6 reveal-on-scroll cursor-pointer transition-transform duration-300 hover:scale-105 active:scale-100 gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Meeting">
                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" alt="Ruang Meeting" class="absolute inset-0 w-full h-full object-cover gallery-img">
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 group-active:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Meeting</span>
                        </div>
                    </div>
                    
                    <div class="group relative overflow-hidden rounded-2xl shadow-lg card-hover h-64 bg-gray-200 reveal-scale stagger-7 reveal-on-scroll cursor-pointer transition-transform duration-300 hover:scale-105 active:scale-100 gallery-item" data-img="<?= base_url('images/core/mushola.jpg') ?>" data-alt="Mushola">
                        <img src="<?= base_url('images/core/mushola.jpg') ?>" alt="Mushola" class="absolute inset-0 w-full h-full object-cover gallery-img">
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 group-active:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Lab</span>
                        </div>
                    </div>
                    
                    <div class="group relative overflow-hidden rounded-2xl shadow-lg card-hover h-64 bg-gray-200 reveal-scale stagger-8 reveal-on-scroll cursor-pointer transition-transform duration-300 hover:scale-105 active:scale-100 gallery-item" data-img="<?= base_url('images/core/timbalatkop2.jpeg') ?>" data-alt="Parkir">
                        <img src="<?= base_url('images/core/timbalatkop2.jpeg') ?>" alt="Parkir" class="absolute inset-0 w-full h-full object-cover gallery-img">
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 group-active:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Parkir</span>
                        </div>
                    </div>
                </div> -->
        <!-- /gallery section -->

        <!-- CTA -->
        <section id="kontak" class="py-20 bg-blue-800 text-white relative overflow-hidden">
            <div class="">
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full -translate-x-1/2 -translate-y-1/2"></div>
                    <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full translate-x-1/2 translate-y-1/2"></div>
                </div>
                <div class="relative flex w-full mx-auto sm:px-6 lg:px-8 text-center">
                    <div class="flex-1">
                        <h2 class="text-4xl md:text-5xl font-bold mb-6">Tertarik untuk Menggunakan <span style="color:#FFD700;">Layanan Kami?</span></h2>
                        <p class="text-xl md:text-2xl mb-10 text-gray-100">
                            <span class="font text-white">Kunjungi </span>
                            <span class="font" style="color:#FFD700;">Balai Pelatihan Koperasi dan UKM Jateng</span>
                            <span class="font text-white"> atau hubungi tim kami untuk </span>
                            <span class="font text-white">informasi </span><span class="font" style="color:#FFD700;">lebih lanjut</span>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- /cta -->


        <!-- footer -->
        <footer class="bg-gray-900 text-white py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 justify-center">
                <!-- Footer Content - 4 Columns Grid -->
                <div class="row g-5 mb-5">
                    <!-- Column 1: Ikuti Kami (Social Media) -->
                    <div class="col-md-3">
                        <h3 class="text-xl font-bold mb-6 text-white" style="display:inline-block;border-bottom:3px solid #FFD700;padding-bottom:0.2em;">Ikuti <span style="color:#fff;">Kami</span></h3>
                        <div class="d-flex flex-column gap-3">
                            <a href="https://www.instagram.com/balatkopukmjateng?igsh=MW1sNWpqNTdndHNmaA==" target="_blank" rel="noopener noreferrer" class="d-flex align-items-center gap-2 text-gray-400 hover:text-pink-500 transition duration-300 text-decoration-none">
                                <svg class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zM5.838 12a6.162 6.162 0 1 1 12.324 0 6.162 6.162 0 0 1-12.324 0zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm4.965-10.322a1.44 1.44 0 1 1 2.881.001 1.44 1.44 0 0 1-2.881-.001z"/>
                                </svg>
                                <span class="text-sm text-white">balatkopukmjateng</span>
                            </a>
                            <a href="https://www.facebook.com/share/1MekEv6wAC/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" class="d-flex align-items-center gap-2 text-gray-400 hover:text-blue-600 transition duration-300 text-decoration-none">
                                <svg class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                                <span class="text-sm text-white">Balatkopukmjateng</span>
                            </a>
                            <a href="https://x.com/balatkopukmjtg?s=21" target="_blank" rel="noopener noreferrer" class="d-flex align-items-center gap-2 text-gray-400 hover:text-gray-100 transition duration-300 text-decoration-none">
                                <svg class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24h-6.6l-5.165-6.744L2.881 21.25H.577l7.732-8.835L.126 2.25h6.775l4.978 6.586L17.414 2.25h.83zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                                </svg>
                                <span class="text-sm text-white">balatkopukmjtg</span>
                            </a>
                            <a href="https://www.tiktok.com/@balatkopukmjateng?_r=1&_t=ZS-93J5ZQopP8v" target="_blank" rel="noopener noreferrer" class="d-flex align-items-center gap-2 text-gray-400 hover:text-cyan-400 transition duration-300 text-decoration-none">
                                <svg class="w-6 h-6 shrink-0" fill="none" viewBox="0 0 24 24">
                                    <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" fill="url(#tiktokGradient)"/>
                                    <defs>
                                        <linearGradient id="tiktokGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                            <stop offset="0%" style="stop-color:#25F4EE;stop-opacity:1" />
                                            <stop offset="100%" style="stop-color:#FE2C55;stop-opacity:1" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <span class="text-sm text-white">balatkopukmjateng</span>
                            </a>
                            <a href="https://youtube.com/@balatkopjateng?si=4KCNmm5Q9VOJD2Wq" target="_blank" rel="noopener noreferrer" class="d-flex align-items-center gap-2 text-gray-400 hover:text-red-600 transition duration-300 text-decoration-none">
                                <svg class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                </svg>
                                <span class="text-sm text-white">BALATKOP JATENG</span>
                            </a>
                        </div>
                    </div>

                    <!-- Column 2: Jam Operasional -->
                    <div class="col-md-3">
                        <h3 class="text-xl font-bold mb-6 text-white" style="display:inline-block;border-bottom:3px solid #FFD700;padding-bottom:0.2em;">Jam <span style="color:#fff;">Operasional</span></h3>
                        <div class="space-y-4">
                            <div>
                                <p class="text-gray-400 text-sm"><span class="font-semibold">Senin - Kamis:</span></p>
                                <p class="text-white text-sm">07:00 - 16:00 WIB</p>
                                <!-- <p class="text-white text-sm">Istirahat: 12:00 - 13:00 WIB</p> -->
                            </div>
                            <div>
                                <p class="text-gray-400 text-sm"><span class="font-semibold">Jumat:</span></p>
                                <p class="text-white text-sm">07:00 - 14:00 WIB</p>
                                <!-- <p class="text-white text-sm">Istirahat: 12:00 - 13:00 WIB</p> -->
                            </div>                            
                            <div>
                                <p class="text-gray-400 text-sm"><span class="font-semibold">Sabtu & Minggu:</span></p>
                                <p class="text-white text-sm">Libur</p>
                            </div>
                        </div>
                    </div>

                    <!-- Column 3: Kontak -->
                    <div class="col-md-3">
                        <h3 class="text-xl font-bold mb-6 text-white" style="display:inline-block;border-bottom:3px solid #FFD700;padding-bottom:0.2em;">Kontak</h3>
                        <ul class="text-gray-400 text-sm space-y-3 list-unstyled">
                            <li class="d-flex align-items-start gap-2">
                                <span class="text-lg shrink-0">📍</span>
                                <span>JL BERDIKARI RAYA No.9, Srondol Kulon, Banyumanik, Semarang City, Central Java 50263</span>
                            </li>
                            <li class="flex items-center gap-2">
                            <span class="text-lg shrink-0">📞</span>
                            <span>(0XX) XXXX-XXXX</span>
                        </li>
                            <li class="d-flex align-items-center gap-2">
                                <span class="text-lg shrink-0">📧</span>
                                <span>balatkopukm.jateng@gmail.com</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="mt-10">
                    <h3 class="text-xl font-bold mb-4 text-white" style="display:inline-block;border-bottom:3px solid #FFD700;padding-bottom:0.2em;">Lokasi Kami</h3>
                    <div class="relative w-full rounded-lg overflow-hidden shadow-lg border border-gray-800/40" style="height: 350px;">
                        <iframe src="https://maps.google.com/maps?q=Balatkop+UMKM,+Semarang&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <!-- Copyright Section -->
                <hr class="border-gray-8teks 00 mb-8">
                <div class="text-center text-gray-400 text-sm">
                    <p>© 2026 Sarana dan Prasarana Balatkop UKMK Jateng. Created by Handy & Eka</p>
                </div>
            </div>
        </footer>
        <!-- /footer -->

        <!-- Modal -->
        <!-- Modal Alur Penyewaan -->
            <div id="modalAlurPenyewaan" class="hidden fixed inset-0 z-40 modal-overlay flex items-center justify-center p-4">
                <div class="bg-white rounded-2xl max-w-none w-full max-h-[90vh] overflow-y-auto shadow-2xl modal-panel" style="max-width:min(96vw, 1600px);">
                    <div class="static md:sticky md:top-0 z-20 bg-white px-6 py-4 text-center">
                        <div style="display:inline-block;background:#172554;padding:0.7em 2em;border-radius:0.7em;">
                            <h2 class="inline font-bold flow-alur-title" style="color:#fff;">Alur <span style="color:#FFD700;">Penyewaan</span></h2>
                        </div>
                        <p class="text-gray-600 mb-0 text-center flow-alur-subtitle">Silakan pilih alur sesuai kebutuhan: via online atau via offline.</p>
                    </div>
                    <div class="p-6">
                        <div class="grid grid-cols-1 lg:grid-cols-2 flow-alur-grid">
                            <section class="flow-alur-panel">
                                <img src="<?= base_url('images/core/online.png') ?>" alt="Alur Penyewaan Online" class="flow-alur-image flow-alur-image-online rounded-xl">
                            </section>

                            <section class="flow-alur-panel">
                                <img src="<?= base_url('images/core/offline.png') ?>" alt="Alur Penyewaan Offline" class="flow-alur-image rounded-xl">
                            </section>
                        </div>

                        <div class="mt-4">
                            <button onclick="closeModal('alurPenyewaan')" class="w-full bg-blue-950 text-white py-3 rounded-lg font-bold hover:bg-blue-800 transition hover-text-gold">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Alur Penyewaan -->
            <div id="modalAlurPenyewaan" class="hidden fixed inset-0 z-40 modal-overlay flex items-center justify-center p-4">
                <div class="bg-white rounded-2xl max-w-none w-full max-h-[90vh] overflow-y-auto shadow-2xl modal-panel" style="max-width:min(96vw, 1600px);">
                    <div class="static md:sticky md:top-0 z-20 bg-white px-6 py-4 text-center">
                        <h2 class="inline-block text-2xl sm:text-3xl font-bold text-blue-700" style="color:#1d4ed8 !important;">Alur Penyewaan</h2>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4 lg:w-1/2">Silakan pilih alur sesuai kebutuhan: via online atau via offline.</p>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                            <div class="flow-mini-card">
                                <h3 class="text-xl font-bold text-blue-600 mb-3">Via Online</h3>
                                <ol class="flow-mini-list" aria-label="Langkah via online">
                                    <li class="flow-mini-item">
                                        <span class="flow-mini-step" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="14" rx="2"/><path d="M8 20h8"/></svg></span>
                                        <p class="flow-mini-text">Isi formulir permohonan penyewaan melalui website.</p>
                                    </li>
                                    <li class="flow-mini-item">
                                        <span class="flow-mini-step" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><path d="m9 15 8.5-8.5a2.1 2.1 0 1 0-3-3L6 12v3h3Z"/></svg></span>
                                        <p class="flow-mini-text">Unggah dokumen persyaratan yang diminta.</p>
                                    </li>
                                    <li class="flow-mini-item">
                                        <span class="flow-mini-step" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-blue-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16v12H4z"/><path d="M8 20h8"/><path d="M12 16v4"/></svg>
                                                    <span>Ruang tunggu publik luas</span>
                                                </li>
                                                <li class="feature-item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-blue-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 7h16v10H4z"/><path d="m8 11 2 2 4-4"/></svg>
                                                    <span>Loket informasi & verifikasi</span>
                                                </li>
                                                <li class="feature-item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-blue-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 9h20"/><rect x="2" y="5" width="20" height="14" rx="2"/></svg>
                                                    <span>Lakukan pembayaran setelah disetujui.</span>
                                                </li>
                                                <li class="feature-item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-blue-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 12 2 2 4-4"/><circle cx="12" cy="12" r="9"/></svg>
                                                    <span>Terima konfirmasi jadwal dan bukti penyewaan.</span>
                                                </li>
                                </ol>
                                            <button onclick="closeModal('alurPenyewaan')" class="w-full bg-blue-950 text-white py-3 rounded-lg font-bold hover:bg-blue-800 transition hover-text-gold">Tutup</button>
                                        </span>
                                    </li>
                            </div>
                                <div class="flow-mini-card">
                                    <h3 class="text-xl font-bold text-blue-600 mb-3">Via Offline</h3>
                                    <ol class="flow-mini-list" aria-label="Langkah via offline">
                                        <li class="flow-mini-item">
                                            <span class="flow-mini-step" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M3 21h18"/><path d="M5 21V8l7-4 7 4v13"/></svg></span>
                                            <p class="flow-mini-text">Datang ke kantor pengelola sarana prasarana.</p>
                                        </li>
                                        <li class="flow-mini-item">
                                            <span class="flow-mini-step" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M8 2h8"/><path d="M7 6h10"/><rect x="4" y="10" width="16" height="11" rx="2"/></svg>
                                            <p class="flow-mini-text">Ambil dan isi formulir permohonan penyewaan.</p>
                                        </li>
                                        <li class="flow-mini-item">
                                            <span class="flow-mini-step" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-blue-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 7h16v10H4z"/><path d="m8 11 2 2 4-4"/></svg>
                                            <p class="flow-mini-text">Serahkan berkas persyaratan ke petugas.</p>
                                        </li>
                                        <li class="flow-mini-item">
                                            <span class="flow-mini-step" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M2 9h20"/><rect x="2" y="5" width="20" height="14" rx="2"/></svg>
                                            <p class="flow-mini-text">Lakukan pembayaran di loket yang tersedia.</p>
                                        </li>
                                        <li class="flow-mini-item">
                                            <span class="flow-mini-step" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-blue-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 12 2 2 4-4"/><circle cx="12" cy="12" r="9"/></svg>
                                            <p class="flow-mini-text">Dapatkan bukti penyewaan dan informasi jadwal.</p>
                                        </li>
                                    </ol>
                                    <button onclick="closeModal('alurPenyewaan')" class="w-full bg-blue-950 text-white py-3 rounded-lg font-bold hover:bg-blue-800 transition hover-text-gold">Tutup</button>
                                </section>
                            </div>

                            <div class="mt-4">
                                <button onclick="closeModal('alurPenyewaan')" class="w-full bg-blue-950 text-white py-3 rounded-lg font-bold hover:bg-blue-800 transition hover-text-gold">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- gedung -->
            <!-- Modal Gedung Aula -->
            <div id="modalAula" class="hidden fixed inset-0 z-40 modal-overlay flex items-center justify-center p-4">
                <div class="bg-white rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto overflow-x-hidden shadow-2xl modal-panel">
                    <!-- Gambar slide -->
                    <div class="relative">
                        <div class="swiper modal-img-swiper" id="swiperAula" style="height: 360px;">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/gedung%20aula/anggrek.JPG') ?>" data-alt="Aula Anggrek">
                                    <img src="<?= base_url('images/gedung%20aula/anggrek.JPG') ?>" class="w-full h-full object-cover">
                                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                        <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Aula Anggrek</span>
                                    </div>
                                </div>
                                <div class="swiper-slide group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/gedung%20aula/teratai.JPG') ?>" data-alt="Aula Teratai">
                                    <img src="<?= base_url('images/gedung%20aula/teratai.JPG') ?>" class="w-full h-full object-cover">
                                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                        <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Aula Teratai</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                    <!-- isi konten aula -->
                    <div>
                        <!-- aula anggrek -->
                        <div class="p-6 modal-info-utama modal-info-block" data-slide="0">
                            <div class="flex flex-col items-start">
                                <div class="justify-between bg-blue-950 text-white px-4 py-2 rounded-lg mb-3 item-center justify-center">            
                                    <h3 class="text-2xl font-bold text-center">Aula Anggrek</h3>                                    
                                </div>
                                <div class="inline-block bg-blue-100 border border-blue-300 px-3 py-2 rounded-lg mb-3">
                                    <p class="text-gray-700 text-sm mb-1">
                                        <span class="font-bold">Ukuran :</span> (80) m<sup>2</sup>
                                    </p>
                                    <p class="text-gray-700 text-sm">
                                        <span class="font-bold">Kapasitas :</span> 200± orang
                                    </p>
                                </div>
                            </div>
                            <!-- gambar2 -->
                            <div class="swiperimg mySwiperimg">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/gedung%20aula/anggrek.JPG') ?>" data-alt="Aula Anggrek - Gambar 1">
                                        <img src="<?= base_url('images/gedung%20aula/anggrek.JPG') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Aula Anggrek</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/gedung%20aula/anggrek1.JPG') ?>" data-alt="Aula Anggrek - Gambar 2">
                                        <img src="<?= base_url('images/gedung%20aula/anggrek1.JPG') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Aula Anggrek</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/gedung%20aula/anggrek2.JPG') ?>" data-alt="Aula Anggrek - Gambar 3">
                                        <img src="<?= base_url('images/gedung%20aula/anggrek2.JPG') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Aula Anggrek</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/gedung%20aula/anggrek3.JPG') ?>" data-alt="Aula Anggrek - Gambar 4">
                                        <img src="<?= base_url('images/gedung%20aula/anggrek3.JPG') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Aula Anggrek</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/gedung%20aula/anggrek4.JPG') ?>" data-alt="Aula Anggrek - Gambar 5">
                                        <img src="<?= base_url('images/gedung%20aula/anggrek4.JPG') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Aula Anggrek</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/gedung%20aula/anggrek5.JPG') ?>" data-alt="Aula Anggrek - Gambar 6">
                                        <img src="<?= base_url('images/gedung%20aula/anggrek5.JPG') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Aula Anggrek</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/gedung%20aula/anggrek6.JPG') ?>" data-alt="Aula Anggrek - Gambar 7">
                                        <img src="<?= base_url('images/gedung%20aula/anggrek6.JPG') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Aula Anggrek</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/gedung%20aula/anggrek7.JPG') ?>" data-alt="Aula Anggrek - Gambar 8">
                                        <img src="<?= base_url('images/gedung%20aula/anggrek7.JPG') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Aula Anggrek</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>

                            <p class="text-gray-600 text-sm mb-3 modal-info-desc">Mencari tempat pertemuan berukuran menengah tidak akan sulit karena Aula Anggrek telah mempresentasikannya kepada Anda. Sempurna untuk acara formal maupun gathering dan reuni.</p>
                            <p class="text-gray-600 text-sm mb-3">Aula Anggrek<br> Aula anggrek berada di lantai 2 Gedung Asrama Matahari.</p>
                            <ul class="modal-info-list">
                                <li>Aula anggrek berada di lantai 2 Gedung Asrama Matahari</li>
                                <li>Memiliki kapasitas 200± orang</li>
                                <li>LCD dan proyektor</li>
                                <li>Sound system lengkap</li>
                                <li>Meja dan kursi peserta serta narasumber</li>
                                <li>Ruang monitor</li>
                            </ul>
                        </div>
                        <!-- aula teratai -->
                        <div class="p-6 modal-info-utama modal-info-block hidden" data-slide="1">
                            <div class="flex flex-col items-start">
                                <div class="bg-blue-950 text-white px-4 py-2 rounded-lg mb-3">
                                    <h3 class="text-2xl font-bold text-center">Aula Teratai</h3>
                                </div>
                                <div class="inline-block bg-blue-100 border border-blue-300 px-3 py-2 rounded-lg mb-3">
                                    <p class="text-gray-700 text-sm mb-1">
                                        <span class="font-bold">Ukuran :</span> (120) m<sup>2</sup>
                                    </p>
                                    <p class="text-gray-700 text-sm">
                                        <span class="font-bold">Kapasitas :</span> 300+ orang
                                    </p>
                                </div>
                            </div>
                            <!-- gambar2 -->
                            <div class="swiperimg mySwiperimg">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/gedung%20aula/teratai.JPG') ?>" data-alt="Aula Teratai - Gambar 1">
                                        <img src="<?= base_url('images/gedung%20aula/teratai.JPG') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Aula Teratai</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/gedung%20aula/teratai1.JPG') ?>" data-alt="Aula Teratai - Gambar 2">
                                        <img src="<?= base_url('images/gedung%20aula/teratai1.JPG') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Aula Teratai</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/gedung%20aula/teratai2.JPG') ?>" data-alt="Aula Teratai - Gambar 3">
                                        <img src="<?= base_url('images/gedung%20aula/teratai2.JPG') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Aula Teratai</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/gedung%20aula/teratai3.JPG') ?>" data-alt="Aula Teratai - Gambar 4">
                                        <img src="<?= base_url('images/gedung%20aula/teratai3.JPG') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Aula Teratai</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                            <p class="text-gray-600 text-sm mb-3 modal-info-desc">Mencari tempat pertemuan berukuran besar dengan daya tampung yang banyak tidak akan sulit lagi karena Aula Teratai telah mempresentasikannya kepada Anda. Sempurna untuk acara formal maupun gathering dan reuni.</p>
                            <p class="text-gray-600 text-sm mb-3">Aula teratai :<br>Dimensi ruangan 120 m2</p>
                            <ul class="modal-info-list">
                                <li>Aula teratai berada di Gedung Tengah Balatkop</li>
                                <li>Memiliki kapasitas 300± orang.</li>
                                <li>Dipergunakan untuk pembukaan pelatihan maupun acara formail lainnya.</li>
                                <li>Meja dan kursi peserta serta narasumber</li>
                                <li>LCD dan proyektor</li>
                                <li>Sound system lengkap</li>
                                <li>Toilet</li>
                                <li>Ruang transit</li>
                                <li>Ruang monitor</li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-4 border-t">
                        <button onclick="closeBuildingModal('aula')" class="w-full bg-blue-950 text-white py-3 rounded-xl font-bold hover:bg-blue-800 transition hover-text-gold">Tutup</button>
                    </div>
                </div>
            </div>

            <!-- Modal Ruang Kelas | Rapat -->
            <div id="modalRuang" class="hidden fixed inset-0 z-40 modal-overlay flex items-center justify-center p-4">
                <div class="bg-white rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto overflow-x-hidden shadow-2xl modal-panel">
                    <!-- gambar slide -->
                    <div class="relative">
                        <div class="swiper modal-img-swiper overflow-x-hidden" id="swiperRuang" style="height: 360px;">
                            <div class="swiper-wrapper ">
                                <div class="swiper-slide group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                    <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                        <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                    </div>
                                </div>
                                <div class="swiper-slide group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop3.jpeg') ?>" data-alt="Ruang Kelas - Gambar 2">
                                    <img src="<?= base_url('images/core/bg-balatkop3.jpeg') ?>" class="w-full h-full object-cover">
                                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                        <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 2</span>
                                    </div>
                                </div>
                                <div class="swiper-slide group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop4.jpeg') ?>" data-alt="Ruang Kelas - Gambar 3">
                                    <img src="<?= base_url('images/core/bg-balatkop4.jpeg') ?>" class="w-full h-full object-cover">
                                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                        <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 3</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                    <!-- isi konten modal asrama -->
                    <div>
                        <!-- mawar -->
                        <div class="p-6 modal-info-pendukung modal-info-block" data-slide="0">
                            <div class="flex flex-col items-start">
                                <div class="bg-blue-950 text-white px-4 py-2 rounded-lg mb-3">
                                    <h3 class="text-2xl font-bold text-center">Ruang Mawar</h3>
                                </div>
                                <div class="inline-block bg-blue-100 border border-blue-300 px-3 py-2 rounded-lg mb-3">
                                    <p class="text-gray-700 text-sm mb-1">
                                        <span class="font-bold">Ukuran :</span> 25m<sup>2</sup>
                                    </p>
                                    <p class="text-gray-700 text-sm">
                                        <span class="font-bold">Kapasitas :</span> 25± orang
                                    </p>
                                </div>
                            </div>
                            <!-- gambar2 -->
                            <div class="swiperimg mySwiperimg">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>                            
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>                                                                                                            
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                            <p class="text-gray-600 text-sm mb-3 modal-info-desc">Ruang Mawar dirancang bagi Anda yang mengutamakan kedekatan komunikasi dan privasi maksimal. Dengan kapasitas yang lebih sedikit, ruangan ini menghilangkan jarak antara narasumber dan audiens, menciptakan suasana diskusi yang hangat namun tetap profesional. Sangat ideal untuk pengambilan keputusan strategis atau pelatihan intensif.</p>
                            <p class="text-gray-600 text-sm mb-3">Ruang Mawar<br>Dimensi ruangan 25m<sup>2</sup></p>
                            <ul class="modal-info-list">
                                <li>Terletak di lantai 1, tepatnya ada di gedung kantor Balatkop Jateng</li>
                                <li>Akses yang mudah dimana ruangan berada di sebelah area parkir</li>
                                <li>Kapasitas ruangan yang dapat menampung 25± orang</li>
                                <li>Suasana tenang dan fokus, ideal untuk diskusi mendalam yang membutuhkan privasi lebih terjaga.</li>
                                <li>LCD & Proyektor</li>
                                <li>Sound system yang lengkap</li>
                                <li>Meja dan kursi yang nyaman</li>
                            </ul>
                        </div>
                        <!-- dahlia -->
                        <div class="p-6 modal-info-pendukung modal-info-block hidden" data-slide="1" style="display: none;">
                            <div class="flex flex-col items-start">
                                <div class="bg-blue-950 text-white px-4 py-2 rounded-lg mb-3">
                                    <h3 class="text-2xl font-bold text-center">Ruang Dahlia</h3>
                                </div>
                                <div class="inline-block bg-blue-100 border border-blue-300 px-3 py-2 rounded-lg mb-3">
                                    <p class="text-gray-700 text-sm mb-1">
                                        <span class="font-bold">Ukuran :</span> 50 m<sup>2</sup>
                                    </p>
                                    <p class="text-gray-700 text-sm">
                                        <span class="font-bold">Kapasitas :</span> 40± orang
                                    </p>
                                </div>
                            </div>
                            <!-- gambar2 -->
                            <div class="swiperimg mySwiperimg">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Dahlia - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Dahlia - Gambar 1</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop3.jpeg') ?>" data-alt="Ruang Dahlia - Gambar 2">
                                        <img src="<?= base_url('images/core/bg-balatkop3.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Dahlia - Gambar 2</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>

                            <p class="text-gray-600 text-sm mb-3 modal-info-desc">Ruang Dahlia adalah pilihan utama untuk acara yang membutuhkan kapasitas lebih luas dan atmosfer yang serius. Dengan pengaturan tempat duduk yang rapi dan ruang gerak yang lega, ruangan ini memastikan setiap peserta tetap fokus pada narasumber tanpa merasa sesak.</p>
                            <p class="text-gray-600 text-sm mb-3">Ruang Dahlia<br>Dimensi ruangan 50 m<sup>2</sup></p>
                            <ul class="modal-info-list">
                                <li>Akses yang mudah, dimana ruangan ini terletak di dekat area parkir</li>                            
                                <li>Ruang paling luas, ideal untuk presentasi formal dengan jumlah audiens yang besar.</li>
                                <li>Kapasitas ruangan dapat menampung 40± orang</li>
                                <li>LCD & Proyektor berkualitas tinggi</li>
                                <li>Sound system jernih</li>
                                <li>Meja dan kursi untuk peserta dan narasumber yang ergonomis</li>
                            </ul>
                        </div>
                        <!-- bougenville -->
                        <div class="p-6 modal-info-pendukung modal-info-block hidden" data-slide="2" style="display: none;">
                            <div class="flex flex-col items-start">
                                <div class="bg-blue-950 text-white px-4 py-2 rounded-lg mb-3">
                                    <h3 class="text-2xl font-bold text-center">Ruang Bougenville</h3>
                                </div>
                                <div class="inline-block bg-blue-100 border border-blue-300 px-3 py-2 rounded-lg mb-3">
                                    <p class="text-gray-700 text-sm mb-1">
                                        <span class="font-bold">Ukuran :</span> 40 m<sup>2</sup>
                                    </p>
                                    <p class="text-gray-700 text-sm">
                                        <span class="font-bold">Kapasitas :</span> 30± guests
                                    </p>
                                </div>
                            </div>
                            <!-- gambar slide R.bougenville -->
                            <div class="swiperimg mySwiperimg">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>                            
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>                                                                                                            
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                            <p class="text-gray-600 text-sm mb-3 modal-info-desc">Bougenville dirancang untuk interaksi yang lebih intens. Ukurannya yang pas membuat komunikasi dua arah antara narasumber dan peserta menjadi lebih akrab dan efisien. Sangat cocok untuk acara yang membutuhkan durasi pertemuan lebih lama dan memerlukan kenyamanan ekstra.</p>
                            <p class="text-gray-600 text-sm mb-3">Ruang Bougenville:<br>Dimensi ruangan 40 m<sup>2</sup></p>
                            <ul class="modal-info-list">
                                <li>Terletak di gedung kantor Balatkop UKM Jateng, tepatnya ada di lantai 2</li>
                                <li>Keseimbangan antara ruang gerak dan privasi, mendukung kolaborasi tim yang lebih efektif</li>
                                <li>LCD & Proyektor</li>
                                <li>Sound system lengkap</li>
                                <li>Serta set meja dan kursi siap pakai</li>
                            </ul>
                        </div>
                    </div>
                    <!-- tombol close -->
                    <div class="p-4 border-t">
                        <button onclick="closeBuildingModal('ruang')" class="w-full bg-blue-950 text-white py-3 rounded-xl font-bold hover:bg-blue-800 transition hover-text-gold">Tutup</button>
                    </div>
                </div>
            </div>

            <!-- Modal Asrama -->
            <div id="modalAsrama" class="hidden fixed inset-0 z-40 modal-overlay flex items-center justify-center p-4">
                <div class="bg-white rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto overflow-x-hidden shadow-2xl modal-panel">
                    <div class="relative">
                        <!-- gambar slide -->
                        <div class="swiper modal-img-swiper" id="swiperAsrama" style="height: 360px;">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/asrama/kamar/a.jpg') ?>" data-alt="Asrama - Gambar 1">
                                    <img src="<?= base_url('images/asrama/kamar/a.jpg') ?>" class="w-full h-full object-cover">
                                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                        <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Asrama - Gambar 1</span>
                                    </div>
                                </div>
                                <div class="swiper-slide group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/asrama/r-transit/t.jpg') ?>" data-alt="Asrama - Gambar 2">
                                    <img src="<?= base_url('images/asrama/r-transit/t.jpg') ?>" class="w-full h-full object-cover"><div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                        <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Asrama - Gambar 2</span>
                                    </div>
                                </div>
                                <div class="swiper-slide group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/asrama/r-makan/rm.jpg') ?>" data-alt="Asrama - Gambar 2">
                                    <img src="<?= base_url('images/asrama/r-makan/rm.jpg') ?>" class="w-full h-full object-cover"><div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                        <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Asrama - Gambar 3</span>
                                    </div>
                                </div>></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>

                    <!-- isi konten modal asrama -->
                    <div>
                        <!-- kamar -->
                        <div class="p-6 modal-info-publik modal-info-block" data-slide="0">
                            <div class="flex flex-col items-start">
                                <div class="bg-blue-950 text-white px-4 py-2 rounded-lg mb-3">
                                    <h3 class="text-2xl font-bold text-center">Kamar Asrama</h3>
                                </div>
                                <div class="inline-block bg-blue-100 border border-blue-300 px-3 py-2 rounded-lg mb-3">
                                    <p class="text-gray-700 text-sm mb-1">
                                        <span class="font-bold">Ukuran :</span> 5m<sup>2</sup>
                                    </p>
                                    <p class="text-gray-700 text-sm">
                                        <span class="font-bold">Kapasitas :</span> 4 orang
                                    </p>
                                </div>
                            </div>
                            <!-- gambar slide kamar asrama -->
                            <div class="swiperimg mySwiperimg">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/asrama/kamar/k.jpg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/asrama/kamar/k.jpg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);"></div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/asrama/kamar/k1.jpg') ?>" data-alt="Ruang Kelas - Gambar 2">
                                        <img src="<?= base_url('images/asrama/kamar/k1.jpg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);"></div>
                                    </div>                            
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/asrama/kamar/k2.jpg') ?>" data-alt="Ruang Kelas - Gambar 3">
                                        <img src="<?= base_url('images/asrama/kamar/k2.jpg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);"></div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/asrama/kamar/k3.jpg') ?>" data-alt="Ruang Kelas - Gambar 4">
                                        <img src="<?= base_url('images/asrama/kamar/k3.jpg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);"></div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/asrama/kamar/k4.jpg') ?>" data-alt="Ruang Kelas - Gambar 5">
                                        <img src="<?= base_url('images/asrama/kamar/k4.jpg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);"></div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/asrama/kamar/k5.jpg') ?>" data-alt="Ruang Kelas - Gambar 6">
                                        <img src="<?= base_url('images/asrama/kamar/k5.jpg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);"></div>
                                    </div>                                                                                                            
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                            <p class="text-gray-600 text-sm mb-3 modal-info-desc">Mencari akomodasi rombongan yang tetap mengutamakan privasi dan fasilitas lengkap? Asrama Matahari adalah jawaban bagi instansi, komunitas, atau keluarga besar yang memerlukan hunian kolektif dengan standar kenyamanan hotel. Dengan total 46 kamar yang didesain modern, kami siap menyambut rombongan Anda dalam suasana yang hangat dan tertata rapi.</p>
                            <p class="text-gray-600 text-sm mb-3">Kamar Tidur<br>Dimensi ruangan 5m<sup>2</sup></p>
                            <ul class="modal-info-list">
                                <li>Terletak di Asrama Matahari</li>
                                <li>Akses langsung menuju pintu masuk dekat dengan area parkir</li>
                                <li>terdapat 46 kamar dengan kapasitas setiap kamar 4 orang</li>
                                <li>4 Bed (Lengkap dengan bantal & selimut bersih di setiap kamar)</li>
                                <li>Kamar Mandi Dalam dilengkapi dengan Shower</li>
                                <li>Full AC untuk kenyamanan istirahat maksimal</li>
                                <li>TV di setiap kamar sebagai sarana relaksasi</li>
                                <li>3 Titik Lampu (Pengaturan cahaya yang fleksibel sesuai kebutuhan)</li>
                                <li>Sirkulasi udara yang baik</li>
                                <li>Layanan pembersihan kamar</li>
                                <li>Rak Laci fungsional untuk barang bawaan peserta</li>
                            </ul>
                        </div>

                        <!-- Ruang Transit asrama -->
                        <div class="p-6 modal-info-publik modal-info-block hidden" data-slide="1">
                            <div class="flex flex-col items-start">
                                <div class="bg-blue-950 text-white px-4 py-2 rounded-lg mb-3">
                                    <h3 class="text-2xl font-bold text-center">Ruang Transit Asrama</h3>
                                </div>
                                <div class="inline-block bg-blue-100 border border-blue-300 px-3 py-2 rounded-lg mb-3">
                                    <p class="text-gray-700 text-sm mb-1">
                                        <span class="font-bold">Ukuran :</span> 10m<sup>2</sup>
                                    </p>
                                    <p class="text-gray-700 text-sm">
                                        <span class="font-bold">Kapasitas :</span> 6± orang
                                    </p>
                                </div>
                            </div>
                            <!-- gambar slide  -->
                            <div class="swiperimg mySwiperimg">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/asrama/r-transit/t1.jpg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/asrama/r-transit/t1.jpg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>                            
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/asrama/r-transit/t2.jpg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/asrama/r-transit/t2.jpg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/asrama/r-transit/t3.jpg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/asrama/r-transit/t3.jpg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/asrama/r-transit/t4.jpg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/asrama/r-transit/t4.jpg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/asrama/r-transit/t5.jpg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/asrama/r-transit/t5.jpg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>                                                                                                           
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                            <p class="text-gray-600 text-sm mb-3 modal-info-desc">Ruangan sementara yang bisa ditempati oleh tamu Balatkop UKM Jateng, ketika hendak menginap di Asrama Matahari.</p>
                            <p class="text-gray-600 text-sm mb-3">Ruang Transit Asrama<br>Dimensi ruangan 10 m<sup>2</sup></p>
                            <ul class="modal-info-list">
                                <li>Terletak di lantai 1, ruangan berada di dekat resepsionis</li>
                                <li>Meja dan Kursi yang nyaman</li>
                                <li>Pendingin Ruangan (AC)</li>
                            </ul>
                        </div>
                    
                        <!-- Ruang Makan -->
                        <div class="p-6 modal-info-publik modal-info-block hidden" data-slide="2">
                            <div class="flex flex-col items-start">
                                <div class="bg-blue-950 text-white px-4 py-2 rounded-lg mb-3">
                                    <h3 class="text-2xl font-bold text-center">Ruang Makan</h3>
                                </div>
                                <div class="inline-block bg-blue-100 border border-blue-300 px-3 py-2 rounded-lg mb-3">
                                    <p class="text-gray-700 text-sm mb-1">
                                        <span class="font-bold">Ukuran :</span> 60m<sup>2</sup>
                                    </p>
                                    <p class="text-gray-700 text-sm">
                                        <span class="font-bold">Kapasitas :</span> 60± orangg
                                    </p>
                                </div>
                            </div>
                            <!-- gambar slide R.makan -->
                            <div class="swiperimg mySwiperimg">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/asrama/r-makan/rm1.jpg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/asrama/r-makan/rm1.jpg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/asrama/r-makan/rm2.jpg') ?>" data-alt="Ruang Makan - Gambar 2">
                                        <img src="<?= base_url('images/asrama/r-makan/rm2.jpg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Makan - Gambar 2</span>
                                        </div>
                                    </div>                            
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/asrama/r-makan/rm3.jpg') ?>" data-alt="Ruang makan - Gambar 3">
                                        <img src="<?= base_url('images/asrama/r-makan/rm3.jpg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Makan - Gambar 3</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/asrama/r-makan/rm4.jpg') ?>" data-alt="Ruang makan - Gambar 4">
                                        <img src="<?= base_url('images/asrama/r-makan/rm4.jpg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Makan - Gambar 4</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/asrama/r-makan/rm5.jpg') ?>" data-alt="Ruang makan - Gambar 5">
                                        <img src="<?= base_url('images/asrama/r-makan/rm5.jpg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Makan - Gambar 5</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/asrama/r-makan/rm6.jpg') ?>" data-alt="Ruang makan - Gambar 6">
                                        <img src="<?= base_url('images/asrama/r-makan/rm6.jpg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Makan - Gambar 6</span>
                                        </div>
                                    </div>                                                                                                            
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>                        
                            <p class="text-gray-600 text-sm mb-3 modal-info-desc">Ruangan luas yang ada di Asrama Matahari. Tempat tamu Asrama Matahari yang mengikuti pelatihan dapat menyantap makanan yang telah disediakan.</p>
                            <p class="text-gray-600 text-sm mb-3">Ruang Makan<br>Dimensi ruangan ±60 m<sup>2</sup></p>
                            <ul class="modal-info-list">
                                <li>Terletak di lantai 1. Ruangan berada di dekat resepsionis </li>
                                <li>Meja dan kursi makan</li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-4 border-t">
                        <button onclick="closeBuildingModal('asrama')" class="w-full bg-blue-950 text-white py-3 rounded-xl font-bold hover:bg-blue-800 transition hover-text-gold">Tutup</button>
                    </div>
                </div>
            </div>

            <!-- Modal Laboratorium -->
            <div id="modalLaboratorium" class="hidden fixed inset-0 z-40 modal-overlay flex items-center justify-center p-4">
                <div class="bg-white rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto overflow-x-hidden shadow-2xl modal-panel">
                    <div class="relative">
                        <div class="swiper modal-img-swiper" id="swiperLaboratorium" style="height: 360px;">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop3.jpeg') ?>" data-alt="Laboratorium - Gambar 1">
                                    <img src="<?= base_url('images/core/bg-balatkop3.jpeg') ?>" class="w-full h-full object-cover">
                                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);"> 
                                        <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Laboratorium - Gambar 1</span>
                                    </div>
                                </div>
                                <div class="swiper-slide group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop4.jpeg') ?>" data-alt="Laboratorium - Gambar 2">
                                    <img src="<?= base_url('images/core/bg-balatkop4.jpeg') ?>" class="w-full h-full object-cover">
                                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                        <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Laboratorium - Gambar 2</span>
                                    </div>
                                </div>
                                <div class="swiper-slide group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop1.jpeg') ?>" data-alt="Laboratorium - Gambar 3">
                                    <img src="<?= base_url('images/core/bg-balatkop1.jpeg') ?>" class="w-full h-full object-cover">
                                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                        <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Laboratorium - Gambar 3</span>
                                    </div>
                                </div>
                                <div class="swiper-slide group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop1.jpeg') ?>" data-alt="Laboratorium - Gambar 3">
                                    <img src="<?= base_url('images/core/bg-balatkop1.jpeg') ?>" class="w-full h-full object-cover">
                                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                        <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Laboratorium - Gambar 4</span>
                                    </div>
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                    <!-- isi konten laboratorium -->
                    <div>
                        <!-- batik -->
                        <div class="p-6 modal-info-laboratorium modal-info-block" data-slide="0">
                            <div class="flex flex-col items-start">
                                <div class="bg-blue-950 text-white px-4 py-2 rounded-lg mb-3">
                                    <h3 class="text-2xl font-bold text-center">Laboratorium Batik</h3>
                                </div>
                                <div class="inline-block bg-blue-100 border border-blue-300 px-3 py-2 rounded-lg mb-3">
                                    <p class="text-gray-700 text-sm mb-1">
                                        <span class="font-bold">Ukuran :</span> 40m<sup>2</sup>
                                    </p>
                                    <p class="text-gray-700 text-sm">
                                        <span class="font-bold">Kapasitas :</span> ±30 orang
                                    </p>
                                </div>
                            </div>
                            <!-- gambar slide lab batik -->
                            <div class="swiperimg mySwiperimg">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>                            
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>                                                                                                            
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                            <p class="text-gray-600 text-sm mb-3 modal-info-desc">Ruangan khusus yang didesain untuk pelestarian budaya membatik. Memberikan pengalaman otentik dalam proses pembuatan kain batik dari awal hingga akhir.</p>
                            <p class="text-gray-600 text-sm mb-3">Lab. Batik<br>Dimensi ruangan 40m<sup>2</sup></p>
                            <ul class="modal-info-list">
                                <li>Terletak di dekat mushola</li>
                                <li>Kompor batik/angklo</li>
                                <li>Wajan</li>
                                <li>Canting</li>
                                <li>Gawangan</li>
                            </ul>
                        </div>
                        <!-- tata boga -->
                        <div class="p-6 modal-info-laboratorium modal-info-block hidden" data-slide="1">
                            <div class="flex flex-col items-start">
                                <div class="bg-blue-950 text-white px-4 py-2 rounded-lg mb-3">
                                    <h3 class="text-2xl font-bold text-center">Laboratorium Tata Boga</h3>
                                </div>
                                <div class="inline-block bg-blue-100 border border-blue-300 px-3 py-2 rounded-lg mb-3">
                                    <p class="text-gray-700 text-sm mb-1">
                                        <span class="font-bold">Ukuran :</span> 40m<sup>2</sup>
                                    </p>
                                    <p class="text-gray-700 text-sm">
                                        <span class="font-bold">Kapasitas :</span> ±30 orang
                                    </p>
                                </div>
                            </div>
                            <!-- gambar slide lab tata boga -->
                            <div class="swiperimg mySwiperimg">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>                            
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>                                                                                                            
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                            <p class="text-gray-600 text-sm mb-3 modal-info-desc">Dapur komersial yang bersih dan terorganisir. Format set class memasak yang lengkap memungkinkan peserta dibagi ke dalam tim kecil untuk kolaborasi memasak.</p>
                            <p class="text-gray-600 text-sm mb-3">Lab. Tata Boga<br>Dimensi ruangan ±48 m2</p>
                            <ul class="modal-info-list">
                                <li>6 Set Peralatan Memasak Lengkap (Kompor, peralatan masak, hingga area plating).</li>
                                <li>Standar kebersihan terjaga dan sirkulasi udara yang baik untuk kenyamanan memasak.</li>
                            </ul>
                        </div>

                        <!-- Komputer -->
                        <div class="p-6 modal-info-laboratorium modal-info-block hidden" data-slide="2">
                            <div class="flex flex-col items-start">
                                <div class="bg-blue-950 text-white px-4 py-2 rounded-lg mb-3">
                                    <h3 class="text-2xl font-bold text-center">Laboratorium Komputer</h3>
                                </div>
                                <div class="inline-block bg-blue-100 border border-blue-300 px-3 py-2 rounded-lg mb-3">
                                    <p class="text-gray-700 text-sm mb-1">
                                        <span class="font-bold">Ukuran :</span> 60m<sup>2</sup>
                                    </p>
                                    <p class="text-gray-700 text-sm">
                                        <span class="font-bold">Kapasitas :</span> ±30 orang
                                    </p>
                                </div>
                            </div>
                            <!-- gambar2 -->
                            <div class="swiperimg mySwiperimg">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>                            
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>                                                                                                            
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                            <p class="text-gray-600 text-sm mb-3 modal-info-desc">Ruang komputer yang siap pakai dengan konfigurasi yang rapi. Sangat mendukung untuk kegiatan yang memerlukan konsentrasi tinggi dan konektivitas.</p>
                            <p class="text-gray-600 text-sm mb-3">Lab. Komputer<br>Dimensi ruangan 40 m<sup>2</sup></p>
                            <ul class="modal-info-list">
                                <li>30 komputer siap pakai</li>
                                <li>Meja dan kursi ergonomis</li>
                                <li>Setup desktop lengkap</li>
                            </ul>
                        </div>

                        <!-- jahit -->
                        <div class="p-6 modal-info-laboratorium modal-info-block hidden" data-slide="3">
                            <div class="flex flex-col items-start">
                                <div class="bg-blue-950 text-white px-4 py-2 rounded-lg mb-3">
                                    <h3 class="text-2xl font-bold text-center">Laboratorium Jahit</h3>
                                </div>
                                <div class="inline-block bg-blue-100 border border-blue-300 px-3 py-2 rounded-lg mb-3">
                                    <p class="text-gray-700 text-sm mb-1">
                                        <span class="font-bold">Ukuran :</span> 60m<sup>2</sup>
                                    </p>
                                    <p class="text-gray-700 text-sm">
                                        <span class="font-bold">Kapasitas :</span> ±30 orang
                                    </p>
                                </div>
                            </div>
                            <!-- gambar slide lab jahit -->
                            <div class="swiperimg mySwiperimg">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>                            
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide w-94 h-auto group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-transform duration-300 hover:shadow-2xl gallery-item" data-img="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" data-alt="Ruang Kelas - Gambar 1">
                                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4" style="background-color: rgba(0, 0, 0, 0.14);">
                                            <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Kelas - Gambar 1</span>
                                        </div>
                                    </div>                                                                                                            
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                            <p class="text-gray-600 text-sm mb-3 modal-info-desc">Ruangan yang dirancang khusus untuk efisiensi alur kerja menjahit. Setiap peserta mendapatkan akses privat ke mesin untuk hasil belajar yang maksimal.</p>
                            <p class="text-gray-600 text-sm mb-3">Lab. Jahit<br>Dimensi ruangan 60m<sup>2</sup></p>
                            <ul class="modal-info-list">
                                <li>30 Unit Mesin Jahit, Mesin Obras, serta peralatan pendukung finishing lainnya.</li>
                            </ul>
                        </div>
                    </div>
                    <!-- tmbl close -->
                    <div class="p-4 border-t">
                        <button onclick="closeBuildingModal('laboratorium')" class="w-full bg-blue-950 text-white py-3 rounded-xl font-bold hover:bg-blue-800 transition hover-text-gold">Tutup</button>
                    </div>
                </div>
            </div>


        <!-- fasilitas -->
            <!-- Modal Kesehatan -->
            <div id="modalKesehatan" class="hidden fixed inset-0 z-40 modal-overlay flex items-center justify-center p-4">
                <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto modal-panel">
                    <div class="sticky top-0 bg-white border-b flex justify-between items-center p-6">
                        <h2 class="text-3xl font-bold text-blue-600 flex items-center gap-3">
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-blue-50 text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
                                </svg>
                            </span>
                            <span>Kesehatan</span>
                        </h2>
                        <button onclick="closeModal('kesehatan')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
                    </div>
                    <div class="p-6">
                        <img src="<?= base_url('images/core/ruang-laktasi.png') ?>" alt="Kesehatan" class="w-full rounded-lg mb-6">
                        <h3 class="text-2xl font-bold text-blue-600 mb-4">Ruang Laktasi | Klinik Pintar </h3>
                        <p class="text-gray-700 mb-6">Klinik kesehatan kami dilengkapi dengan peralatan medis dan tim profesional yang berpengalaman untuk memberikan pelayanan kesehatan terbaik.</p>
                        
                        <h4 class="text-xl font-bold text-gray-800 mb-3">Fasilitas Tersedia:</h4>
                        <ul class="grid grid-cols-2 gap-3 mb-6">
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Kotak P3k</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Kursi duduk nyaman </li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Tempat tidur nyaman</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Ventilasi udara baik</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Timbangan Digital</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Termometer</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Colokan listrik</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Tempat sampah</li>
                        </ul>

                        <button onclick="closeModal('kesehatan')" class="w-full bg-blue-950 text-white py-3 rounded-lg font-bold hover:bg-blue-800 transition hover-text-gold">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal Perpustakaan -->
            <div id="modalPerpustakaan" class="hidden fixed inset-0 z-40 modal-overlay flex items-center justify-center p-4">
                <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto modal-panel">
                    <div class="sticky top-0 bg-white border-b flex justify-between items-center p-6">
                        <h2 class="text-3xl font-bold text-blue-600 flex items-center gap-3">
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-blue-50 text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
                                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
                                </svg>
                            </span>
                            <span>Perpustakaan</span>
                        </h2>
                        <button onclick="closeModal('perpustakaan')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
                    </div>
                    <div class="p-6">
                        <img src="<?= base_url('images/core/perpus2.png') ?>" alt="Perpustakaan" class="w-full rounded-lg mb-6">
                        <h3 class="text-2xl font-bold text-blue-600 mb-4">Perpustakaan Modern & Nyaman</h3>
                        <p class="text-gray-700 mb-6">Perpustakaan kami menyediakan koleksi buku lengkap dari berbagai bidang ilmu dengan suasana belajar yang nyaman dan mendukung.</p>
                        
                        <h4 class="text-xl font-bold text-gray-800 mb-3">Koleksi Tersedia:</h4>
                        <ul class="grid grid-cols-2 gap-3 mb-6">
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Buku Fiksi</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Buku Non-Fiksi</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Referensi cukup lengkap</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> E-Book Digital</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Jurnal Ilmiah</li>
                        </ul>

                        <h4 class="text-xl font-bold text-gray-800 mb-3">Fasilitas:</h4>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Ruang Baca Nyaman dengan AC</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Area Diskusi Kelompok</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> WiFi Gratis</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Sistem Peminjaman Digital</li>
                        </ul>

                        <button onclick="closeModal('perpustakaan')" class="w-full bg-blue-950 text-white py-3 rounded-lg font-bold hover:bg-blue-800 transition hover-text-gold">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal Kantin -->
            <div id="modalKantin" class="hidden fixed inset-0 z-40 modal-overlay flex items-center justify-center p-4">
                <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto modal-panel">
                    <div class="sticky top-0 bg-white border-b flex justify-between items-center p-6">
                        <h2 class="text-3xl font-bold text-blue-600 flex items-center gap-3">
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-blue-50 text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2"/>
                                    <path d="M7 2v20"/>
                                    <path d="M21 15V2a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7"/>
                                </svg>
                            </span>
                            <span>Kantin</span>
                        </h2>
                        <button onclick="closeModal('kantin')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
                    </div>
                    <div class="p-6">
                        <img src="<?= base_url('images/core/bg-balatkop2.jpeg')?>" alt="Kantin" class="w-full rounded-lg mb-6">
                        <h3 class="text-2xl font-bold text-blue-600 mb-4">Kantin Modern & Higienis</h3>
                        <p class="text-gray-700 mb-6">Kantin kami menawarkan menu makanan dan minuman variatif dengan jaminan kualitas, kebersihan, dan kesegaran bahan makanan terjamin.</p>
                        
                        <h4 class="text-xl font-bold text-gray-800 mb-3">Menu Tersedia:</h4>
                        <ul class="grid grid-cols-2 gap-3 mb-6">
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Nasi & Lauk Pauk</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Mie & Pasta</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Menu Vegetarian</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Makanan Ringan & Snack</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Minuman Segar</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Kopi & Teh Premium</li>
                        </ul>

                        <h4 class="text-xl font-bold text-gray-800 mb-3">Fasilitas:</h4>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Tempat Duduk AC & Nyaman</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Dapur Terstandar Internasional</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Pembayaran Cash & Digital</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Harga Terjangkau & Bersaing</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Buka Setiap Hari Kerja</li>
                        </ul>

                        <button onclick="closeModal('kantin')" class="w-full bg-blue-950 text-white py-3 rounded-lg font-bold hover:bg-blue-800 transition hover-text-gold">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal Parkir -->
            <div id="modalParkir" class="hidden fixed inset-0 z-40 modal-overlay flex items-center justify-center p-4">
                <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto modal-panel">
                    <div class="sticky top-0 bg-white border-b flex justify-between items-center p-6">
                        <h2 class="text-3xl font-bold text-blue-600 flex items-center gap-3">
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-blue-50 text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="3" width="18" height="18" rx="2"/>
                                    <path d="M9 17V7h4a3 3 0 0 1 0 6H9"/>
                                </svg>
                            </span>
                            <span>Parkir</span>
                        </h2>
                        <button onclick="closeModal('parkir')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
                    </div>
                    <div class="p-6">
                        <img src="<?= base_url('images/core/parkir.png') ?>" alt="Parkir" class="w-full rounded-lg mb-6">
                        <h3 class="text-2xl font-bold text-blue-600 mb-4">Lahan Parkir Luas & Aman</h3>
                        <p class="text-gray-700 mb-6">Fasilitas parkir kami dirancang modern dengan sistem keamanan berlapis untuk menjamin kendaraan Anda aman dan terpantau 24 jam.</p>
                        
                        <h4 class="text-xl font-bold text-gray-800 mb-3">Kapasitas:</h4>
                        <ul class="grid grid-cols-2 gap-3 mb-6">
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Mobil: 500 Unit</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Motor: 800 Unit</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Bus: 20 Unit</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Tempat untuk Difabel</li>
                        </ul>

                        <h4 class="text-xl font-bold text-gray-800 mb-3">Fasilitas Keamanan:</h4>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> CCTV 24 Jam Full Coverage</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Petugas Keamanan Berjaga</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Sistem Gate Elektronik</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Pencahayaan LED Terang</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Tarif Terjangkau Harian/Bulanan</li>
                        </ul>

                        <button onclick="closeModal('parkir')" class="w-full bg-blue-950 text-white py-3 rounded-lg font-bold hover:bg-blue-800 transition hover-text-gold">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal Lab Komputer -->
            <div id="modalLab" class="hidden fixed inset-0 z-40 modal-overlay flex items-center justify-center p-4">
                <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto modal-panel">
                    <div class="sticky top-0 bg-white border-b flex justify-between items-center p-6">
                        <h2 class="text-3xl font-bold text-blue-600 flex items-center gap-3">
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-blue-50 text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="2" y="3" width="20" height="14" rx="2"/>
                                    <path d="M8 21h8M12 17v4"/>
                                </svg>
                            </span>
                            <span>Lab Komputer</span>
                        </h2>
                        <button onclick="closeModal('lab')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
                    </div>
                    <div class="p-6">
                        <img src="<?= base_url('images/core/komputer.jpg') ?>" alt="Lab Komputer" class="w-full rounded-lg mb-6">
                        <h3 class="text-2xl font-bold text-blue-600 mb-4">Lab Komputer Terkini</h3>
                        <p class="text-gray-700 mb-6">Laboratorium komputer kami dilengkapi dengan perangkat terbaru dan software profesional untuk mendukung pembelajaran dan riset.</p>
                        
                        <h4 class="text-xl font-bold text-gray-800 mb-3">Spesifikasi Perangkat:</h4>
                        <ul class="grid grid-cols-2 gap-3 mb-6">
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> 100 Unit Komputer i7</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> RAM 16GB DDR4</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> SSD 512GB</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Monitor 24 Inch 144Hz</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Server Rendering Powerful</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Printer 3D</li>
                        </ul>

                        <h4 class="text-xl font-bold text-gray-800 mb-3">Software Tersedia:</h4>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Microsoft Office Suite Lengkap</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Adobe Creative Cloud (Photoshop, Premiere, AE)</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> IDE Pemrograman (VS Code, PyCharm)</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> CAD & 3D Design (AutoCAD, Blender)</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> WiFi 1Gbps & Internet Cepat</li>
                        </ul>

                        <button onclick="closeModal('lab')" class="w-full bg-blue-950 text-white py-3 rounded-lg font-bold hover:bg-blue-800 transition hover-text-gold">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal Mushola -->
            <div id="modalMushola" class="hidden fixed inset-0 z-40 modal-overlay flex items-center justify-center p-4">
                <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto modal-panel">
                    <div class="sticky top-0 bg-white border-b flex justify-between items-center p-6">
                        <h2 class="text-3xl font-bold text-blue-600 flex items-center gap-3">
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-blue-50 text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 21h18"/>
                                    <path d="M5 21V11l7-6 7 6v10"/>
                                    <circle cx="12" cy="5" r="1.5" fill="currentColor"/>
                                    <path d="M12 3v2.5"/>
                                    <path d="M8 13h8v8H8z"/>
                                    <path d="M12 8.5c-2.5 0-4 1.5-4 3v1.5h8V11.5c0-1.5-1.5-3-4-3z"/>
                                </svg>
                            </span>
                            <span>Mushola</span>
                        </h2>
                        <button onclick="closeModal('mushola')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
                    </div>
                    <div class="p-6">
                        <img src="<?= base_url('images/core/mushola.jpg') ?>" alt="Mushola" class="w-full rounded-lg mb-6">
                        <h3 class="text-2xl font-bold text-blue-600 mb-4">Mushola Nyaman & Tenang</h3>
                        <p class="text-gray-700 mb-6">Mushola kami menyediakan ruang ibadah yang bersih, tenang, dan nyaman untuk menunjang kebutuhan spiritual seluruh pengguna.</p>
                        
                        <h4 class="text-xl font-bold text-gray-800 mb-3">Fasilitas Mushola:</h4>
                        <ul class="grid grid-cols-2 gap-3 mb-6">
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Ruang sholat cukup luas</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Karpet dan sajadah bersih</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Tempat wudhu representatif</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Mukena & sarung tersedia</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> AC & ventilasi udara baik</li>
                        </ul>

                        <h4 class="text-xl font-bold text-gray-800 mb-3">Kenyamanan Tambahan:</h4>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Pencahayaan lembut dan suasana tenang</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Rak penyimpanan Alat ibadah rapi</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Akses mudah dari area utama gedung</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Kebersihan terjaga dengan petugas rutin</li>
                        </ul>

                        <button onclick="closeModal('mushola')" class="w-full bg-blue-950 text-white py-3 rounded-lg font-bold hover:bg-blue-800 transition hover-text-gold">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal Smoking Area -->
            <div id="modalSmokingarea" class="hidden fixed inset-0 z-40 modal-overlay flex items-center justify-center p-4">
                <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto modal-panel">
                    <div class="sticky top-0 bg-white border-b flex justify-between items-center p-6">
                        <h2 class="text-3xl font-bold text-blue-600 flex items-center gap-3">
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-blue-50 text-blue-600">
                                <img src="https://img.icons8.com/?size=100&id=8060&format=png&color=2563eb" alt="Smoking Icon" width="32" height="32" class="text-blue-600" />
                            </span>
                            <span>Smoking Area</span>
                        </h2>
                        <button onclick="closeModal('smokingarea')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
                    </div>
                    <div class="p-6">
                        <img src="<?= base_url('images/core/rokok.png') ?>" alt="Smoking Area" class="w-full rounded-lg mb-6">
                        <h3 class="text-2xl font-bold text-blue-600 mb-4">Area Merokok Nyaman</h3>
                        <p class="text-gray-700 mb-4">Area khusus yang dirancang untuk memberikan kenyamanan bagi peserta yang ingin merokok dengan ventilasi baik dan terpisah dari ruang utama.</p>
                        <ul class="grid grid-cols-2 gap-3 mb-6">
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Ventilasi udara baik</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Tempat duduk dibawah pohon</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Area terpisah dari ruang utama</li>
                        </ul>
                        <button onclick="closeModal('smokingarea')" class="w-full bg-blue-950 text-white py-3 rounded-lg font-bold hover:bg-blue-800 transition hover-text-gold">Tutup</button>
                    </div>
                </div>
            </div>

            <!-- Modal Ruang Transit -->
            <div id="modalRuangtransit" class="hidden fixed inset-0 z-40 modal-overlay flex items-center justify-center p-4 overflow-y-auto">
                <div class="bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto modal-panel my-auto sm:my-8">
                    <div class="sticky top-0 bg-white border-b flex justify-between items-center p-4 sm:p-6">
                        <h2 class="text-2xl sm:text-3xl font-bold text-blue-600 flex items-center gap-2 sm:gap-3">
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-blue-50 text-blue-600">
                                <svg class="text-blue-600" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="2" y="7" width="20" height="13" rx="2"/>
                                    <path d="M6 7V5a4 4 0 0 1 8 0v2"/>
                                    <path d="M9 13h6"/>
                                    <path d="M9 16h6"/>
                                </svg>
                            </span>
                            <span>Ruang Transit</span>
                        </h2>
                        <button onclick="closeModal('ruangtransit')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
                    </div>
                    <div class="p-4 sm:p-6">
                        <img src="<?= base_url('images/core/ruang transit.png') ?>" alt="Ruang Transit" class="w-full rounded-lg mb-4 sm:mb-6">
                        <h3 class="text-xl sm:text-2xl font-bold text-blue-600 mb-3 sm:mb-4">Ruang Transit Nyaman</h3>
                        <p class="text-gray-700 text-sm sm:text-base mb-4 sm:mb-6">Ruang transit yang dirancang untuk memberikan kenyamanan kepada peserta sebelum kegiatan utama dimulai dengan fasilitas lengkap dan suasana yang tenang.</p>
                        <ul class="grid grid-cols-1 sm:grid-cols-2 gap-2 sm:gap-3 mb-4 sm:mb-6">
                            <li class="flex items-center text-gray-700 text-sm sm:text-base"><span class="text-blue-600 mr-2">✓</span> Ruangan Adem (AC)</li>
                            <li class="flex items-center text-gray-700 text-sm sm:text-base"><span class="text-blue-600 mr-2">✓</span> Fasilitas sofa & meja</li>
                            <li class="flex items-center text-gray-700 text-sm sm:text-base"><span class="text-blue-600 mr-2">✓</span> Area privat & tenang</li>
                            <li class="flex items-center text-gray-700 text-sm sm:text-base"><span class="text-blue-600 mr-2">✓</span> Dekat dengan ruang utama</li>
                        </ul>
                        <button onclick="closeModal('ruangtransit')" class="w-full bg-blue-950 text-white py-3 rounded-lg font-bold hover:bg-blue-800 transition hover-text-gold">Tutup</button>
                    </div>
                </div>
            </div>

            <!-- Modal Ruang Tunggu -->
            <div id="modalRuangtunggu" class="hidden fixed inset-0 z-40 modal-overlay flex items-center justify-center p-4 overflow-y-auto">
                <div class="bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto modal-panel my-auto sm:my-8">
                    <div class="sticky top-0 bg-white border-b flex justify-between items-center p-4 sm:p-6">
                        <h2 class="text-2xl sm:text-3xl font-bold text-blue-600 flex items-center gap-2 sm:gap-3">
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-blue-50 text-blue-600">
                                <svg class="text-blue-600" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                                    <polyline points="9 22 9 12 15 12 15 22"/>
                                </svg>
                            </span>
                            <span>Ruang Tunggu</span>
                        </h2>
                        <button onclick="closeModal('ruangtunggu')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
                    </div>
                    <div class="p-4 sm:p-6">
                        <img src="<?= base_url('images/core/ruang tunggu.png') ?>" alt="Ruang Tunggu" class="w-full rounded-lg mb-4 sm:mb-6">
                        <h3 class="text-xl sm:text-2xl font-bold text-blue-600 mb-3 sm:mb-4">Ruang Tunggu Nyaman</h3>
                        <p class="text-gray-700 text-sm sm:text-base mb-4 sm:mb-6">Ruang tunggu yang dirancang modern dan nyaman untuk peserta menunggu kegiatan dengan fasilitas lengkap.</p>
                        <ul class="grid grid-cols-1 sm:grid-cols-2 gap-2 sm:gap-3 mb-4 sm:mb-6">
                            <li class="flex items-center text-gray-700 text-sm sm:text-base"><span class="text-blue-600 mr-2">✓</span> Kursi dan sofa nyaman</li>
                            <li class="flex items-center text-gray-700 text-sm sm:text-base"><span class="text-blue-600 mr-2">✓</span> Ruang adem</li>
                            <li class="flex items-center text-gray-700 text-sm sm:text-base"><span class="text-blue-600 mr-2">✓</span> Area terbuka dengan layar informasi</li>
                            <li class="flex items-center text-gray-700 text-sm sm:text-base"><span class="text-blue-600 mr-2">✓</span> Lokasi gedung utama</li>
                        </ul>
                        <button onclick="closeModal('ruangtunggu')" class="w-full bg-blue-950 text-white py-3 rounded-lg font-bold hover:bg-blue-800 transition hover-text-gold">Tutup</button>
                    </div>
                </div>
            </div>

            <!-- Modal Keamanan -->
            <div id="modalKeamanan" class="hidden fixed inset-0 z-40 modal-overlay flex items-center justify-center p-4">
                <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto modal-panel">
                    <div class="sticky top-0 bg-white border-b flex justify-between items-center p-6">
                        <h2 class="text-3xl font-bold text-blue-600 flex items-center gap-3">
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-blue-50 text-blue-600">
                                <svg class="text-blue-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                    <path d="m9 12 2 2 4-4"/>
                                </svg>
                            </span>
                            <span>Keamanan</span>
                        </h2>
                        <button onclick="closeModal('keamanan')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
                    </div>
                    <div class="p-6">
                        <img src="<?= base_url('images/core/keamanan.png') ?>" alt="Keamanan" class="w-full rounded-lg mb-6">
                        <h3 class="text-2xl font-bold text-blue-600 mb-4">Keamanan 24 Jam</h3>
                        <p class="text-gray-700 mb-6">Sistem keamanan kami menggunakan teknologi terkini dengan monitoring 24 jam untuk menjamin keamanan dan kenyamanan semua pengguna.</p>
                        
                        <h4 class="text-xl font-bold text-gray-800 mb-3">Peralatan Keamanan:</h4>
                        <ul class="grid grid-cols-2 gap-3 mb-6">
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> CCTV 4K (12 Unit)</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Alat Pemadam api</li>
                        </ul>

                        <h4 class="text-xl font-bold text-gray-800 mb-3">Tim & Layanan Keamanan:</h4>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Petugas Keamanan 24/7 Berjaga</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Tim Response Cepat Emergency</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Koordinasi dengan Kepolisian</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Program Keselamatan Berkala</li>
                        </ul>

                        <button onclick="closeModal('keamanan')" class="w-full bg-blue-950 text-white py-3 rounded-lg font-bold hover:bg-blue-800 transition hover-text-gold">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>
        <!-- /Modal -->

        <!-- Gallery Lightbox -->
        <div id="galleryLightbox" class="hidden fixed inset-0 items-center justify-center p-4 cursor-pointer" style="background-color: rgba(0, 0, 0, 0.3); backdrop-filter: blur(4px); z-index: 99999 !important;">
            <img id="galleryLightboxImg" src="" alt="" class="max-w-4xl max-h-[75vh] w-auto h-auto object-contain opacity-0 scale-95 transition-all duration-200 cursor-default" onclick="event.stopPropagation()">
        </div>
        <!-- /Gallery Lightbox -->

        <!-- Script -->
        <!-- Swiper --> 
        <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
        <!-- Bootstrap -->  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script> 
        <script>
        // Navigation active state
            /* Menu Toggle */
            function toggleMenu() {
                const menu = document.getElementById('mobileMenu');
                menu.classList.toggle('active');
            }
            /* tutup menu saat menu diclick */
            const mobileMenuLinks = document.querySelectorAll('#mobileMenu a');

            function setMobileMenuSelection(activeLink) {
                mobileMenuLinks.forEach(item => item.classList.remove('is-selected'));
                activeLink.classList.add('is-selected');
            }

            mobileMenuLinks.forEach(link => {
                link.addEventListener('pointerdown', () => {
                    link.classList.add('is-pressing');
                    setMobileMenuSelection(link);
                });

                link.addEventListener('touchstart', () => {
                    link.classList.add('is-pressing');
                    setMobileMenuSelection(link);
                }, { passive: true });

                link.addEventListener('pointercancel', () => {
                    link.classList.remove('is-pressing');
                });

                link.addEventListener('touchcancel', () => {
                    link.classList.remove('is-pressing');
                }, { passive: true });

                link.addEventListener('click', (event) => {
                    event.preventDefault();

                    const menu = document.getElementById('mobileMenu');
                    const href = link.getAttribute('href');

                    setMobileMenuSelection(link);

                    setTimeout(() => {
                        menu.classList.remove('active');
                        link.classList.remove('is-pressing');

                        if (href && href.startsWith('#')) {
                            const target = document.querySelector(href);
                            if (target) {
                                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                            } else {
                                window.location.hash = href;
                            }
                        } else if (href) {
                            window.location.href = href;
                        }
                    }, 260);
                });
            });
        // Swiper
            // Swiper (hero)
            const swiper = new window.Swiper('.mySwiper', {
                effect: 'fade',
                speed: 1000,
                autoplay: { delay: 5000, disableOnInteraction: true },
                loop: true,
                slidesPerView: 1,
                allowTouchMove: true,
            });

            // Swiper (img modal)
            const swiperimg = new window.Swiper('.mySwiperimg', {
                slidesPerView: 3.2,
                spaceBetween: 10,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
            });
            
            // // Swiper (galeri)
            let swiperGaleriTop, swiperGaleriBottom;
            function initGallerySwipers() {
                if (swiperGaleriTop) swiperGaleriTop.destroy(true, true);
                if (swiperGaleriBottom) swiperGaleriBottom.destroy(true, true);

                swiperGaleriTop = new Swiper('.swiperGaleriTop', {
                    slidesPerView: 'auto',
                    spaceBetween: 15,
                    loop: true,
                    speed: 6000,
                    autoplay: {
                        delay: 0,
                        disableOnInteraction: false,
                        pauseOnMouseEnter: false,
                        reverseDirection: true,
                    },
                    freeMode: true,
                    freeModeMomentum: false,
                    grabCursor: true,
                    allowTouchMove: true,
                    breakpoints: {
                        640: {
                            spaceBetween: 24
                        }
                    }
                });

                swiperGaleriBottom = new Swiper('.swiperGaleriBottom', {
                    slidesPerView: 'auto',
                    spaceBetween: 12,
                    loop: true,
                    speed: 6000,
                    autoplay: {
                        delay: 0,
                        disableOnInteraction: false,
                        pauseOnMouseEnter: false,
                    },
                    freeMode: true,
                    freeModeMomentum: false,
                    grabCursor: true,
                    allowTouchMove: true,
                    breakpoints: {
                        640: {
                            spaceBetween: 24
                        }
                    }
                });
            }

            document.addEventListener('DOMContentLoaded', function() {
                initGallerySwipers();
            });
            // swiper Building
            const swiper2 = new window.Swiper(".mySwiper2", {
                grabCursor: true,
                loop: false,
                slidesPerView: 3,
                spaceBetween: 40,
                // responsive behaviour
                breakpoints: {
                    // when window width is >= 0px
                    0: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    // >= 640px (sm)
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 30,
                    },
                    // >= 1024px (lg)
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 40,
                    },
                },

                pagination: {
                    el: ".swiper-pagination",
                },
                });

            // Build indicator mapping
            const indicatorList = document.querySelectorAll('.swiper-pagination li');

            function setActiveIndicator(idx) {
                indicatorList.forEach((it, i) => {
                    it.classList.toggle('active', i === idx);
                });
            }

            // Animate hero text lines when slide becomes visible
            function animateSlideTexts(slideEl) {
                // remove in-class from all hero text elements first
                document.querySelectorAll('.hero-anim.in').forEach(el => el.classList.remove('in'));
                if (!slideEl) return;
                const targets = slideEl.querySelectorAll('h1, p, .hero-cta-btn, .text-lg');
                targets.forEach((el, i) => {
                    if (!el.classList.contains('hero-anim')) el.classList.add('hero-anim');
                    setTimeout(() => el.classList.add('in'), i * 120);
                });
            }

            // on init and slide changes
            swiper.on('init', function() {
                setTimeout(()=> setActiveIndicator(swiper.realIndex), 50);
                animateSlideTexts(swiper.slides[swiper.activeIndex]);
            });

            swiper.on('slideChangeTransitionStart', function() {
                setActiveIndicator(swiper.realIndex);
            });

            swiper.on('slideChangeTransitionEnd', function() {
                animateSlideTexts(swiper.slides[swiper.activeIndex]);
            });

            // click on indicators to change slide
            indicatorList.forEach((btn, idx) => {
                btn.addEventListener('click', () => {
                    swiper.slideToLoop(idx);
                    swiper.autoplay.stop();
                    setActiveIndicator(idx);
                });
            });

            // trigger init handlers
            swiper.init && swiper.init();
            
    
            // Helper: sync content panels with active slide
            function syncModalContent(panels, realIndex) {
                panels.forEach(function(panel) {
                    const shouldHide = parseInt(panel.dataset.slide) !== realIndex;
                    panel.classList.toggle('hidden', shouldHide);
                    panel.style.display = shouldHide ? 'none' : '';
                });
            }

            // Swiper (Modal Gedung) 
            const modalSwipers = {
                Aula: new window.Swiper('#swiperAula', {
                    loop: false,
                    initialSlide: 0,
                    slidesPerView: 1.2,
                    centeredSlides: true,
                    spaceBetween: 24,
                    autoplay: { delay: 5000, disableOnInteraction: true },
                    pagination: { el: '#swiperAula .swiper-pagination', type: 'fraction' },
                    navigation: {
                        nextEl: '#swiperAula .swiper-button-next',
                        prevEl: '#swiperAula .swiper-button-prev',
                    },
                    on: {
                        realIndexChange: function(swiper) {
                                syncModalContent(document.querySelectorAll('.modal-info-utama'), swiper.realIndex);
                        }
                    }
                }),
                Ruang: new window.Swiper('#swiperRuang', {
                    loop: false,
                    initialSlide: 0,
                    slidesPerView: 1.2,
                    centeredSlides: true,
                    spaceBetween: 24,
                    autoplay: { delay: 5000, disableOnInteraction: true },
                    pagination: { el: '#swiperRuang .swiper-pagination', type: 'fraction' },
                    navigation: {
                        nextEl: '#swiperRuang .swiper-button-next',
                        prevEl: '#swiperRuang .swiper-button-prev',
                    },
                    on: {
                        realIndexChange: function(swiper) {
                            syncModalContent(document.querySelectorAll('.modal-info-pendukung'), swiper.realIndex);
                        }
                    }
                }),
                Asrama: new window.Swiper('#swiperAsrama', {
                    loop: false,
                    initialSlide: 0,
                    slidesPerView: 1.2,
                    centeredSlides: true,
                    spaceBetween: 24,
                    autoplay: { delay: 5000, disableOnInteraction: true },
                    pagination: { el: '#swiperAsrama .swiper-pagination', type: 'fraction' },
                    navigation: {
                        nextEl: '#swiperAsrama .swiper-button-next',
                        prevEl: '#swiperAsrama .swiper-button-prev',
                    },
                    on: {
                        realIndexChange: function(swiper) {
                            syncModalContent(document.querySelectorAll('.modal-info-publik'), swiper.realIndex);
                        }
                    }
                }),
                Laboratorium: new window.Swiper('#swiperLaboratorium', {
                    loop: false,
                    initialSlide: 0,
                    slidesPerView: 1.2,
                    centeredSlides: true,
                    spaceBetween: 24,
                    autoplay: { delay: 5000, disableOnInteraction: true },
                    pagination: { el: '#swiperLaboratorium .swiper-pagination', type: 'fraction' },
                    navigation: {
                        nextEl: '#swiperLaboratorium .swiper-button-next',
                        prevEl: '#swiperLaboratorium .swiper-button-prev',
                    },
                    on: {
                        realIndexChange: function(swiper) {
                            syncModalContent(document.querySelectorAll('.modal-info-laboratorium'), swiper.realIndex);
                        }
                    }
                }),
            };

            // modal open close
            function openModal(facility) {
                const modal = document.getElementById('modal' + facility.charAt(0).toUpperCase() + facility.slice(1));
                if (modal) {
                    modal.classList.remove('hidden');
                    document.body.style.overflow = 'hidden';
                }
            }

            function closeModal(facility) {
                const modal = document.getElementById('modal' + facility.charAt(0).toUpperCase() + facility.slice(1));
                if (modal) {
                    modal.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                }
            }

            // Close modal klik luar
            document.addEventListener('click', function(event) {
                const modals = document.querySelectorAll('[id^="modal"]');
                modals.forEach(modal => {
                    if (event.target === modal) {
                        modal.classList.add('hidden');
                        document.body.style.overflow = 'auto';
                    }
                });
            });

            // Close modal esc
            document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape') {
                    const modals = document.querySelectorAll('[id^="modal"]');
                    modals.forEach(modal => {
                        modal.classList.add('hidden');
                        document.body.style.overflow = 'auto';
                    });
                }
            });
            // modal gedung
            // Building Modal Functions
            function openBuildingModal(building) {
                const modalIds = {
                    'aula': 'modalAula',
                    'ruang': 'modalRuang',
                    'asrama': 'modalAsrama',
                    'laboratorium': 'modalLaboratorium'
                };
                const modal = document.getElementById(modalIds[building]);
                if (modal) {
                    modal.classList.remove('hidden');
                    document.body.style.overflow = 'hidden';
                    // ensure swiper updates after modal becomes visible
                    const key = 'Ruangan' + building.charAt(0).toUpperCase() + building.slice(1);
                    if (modalSwipers[key] && typeof modalSwipers[key].update === 'function') {
                        setTimeout(() => {
                            modalSwipers[key].update();
                            modalSwipers[key].slideTo(0, 0); 
                        }, 250);
                    }
                }
            }

            function closeBuildingModal(building) {
                const modalIds = {
                    'aula': 'modalAula',
                    'ruang': 'modalRuang',
                    'asrama': 'modalAsrama',
                    'laboratorium': 'modalLaboratorium'
                };
                const modal = document.getElementById(modalIds[building]);
                if (modal) {
                    modal.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                }
            }

            // Close building modal when clicking backdrop
            document.addEventListener('click', function(event) {
                const modals = document.querySelectorAll('[id^="modal"][id*="utama"], [id^="modal"][id*="pendukung"], [id^="modal"][id*="publik"]');
                modals.forEach(modal => {
                    if (event.target === modal) {
                        const building = modal.id.includes('Utama') ? 'utama' : modal.id.includes('Pendukung') ? 'pendukung' : 'publik';
                        closeBuildingModal(building);
                    }
                });
            });

            // About image auto change every 5s with fade transition (3 images)
            (function () {
                const aboutAutoImage = document.getElementById('aboutAutoImage');

                if (!aboutAutoImage) return;

                const aboutImages = [
                    "<?= base_url('images/core/bg-balatkop1.jpeg') ?>",
                    "<?= base_url('images/core/bg-balatkop2.jpeg') ?>",
                    "<?= base_url('images/core/bg-balatkop3.jpeg') ?>"
                ];

                let currentIndex = 0;

                aboutImages.forEach((source) => {
                    const preloaded = new Image();
                    preloaded.src = source;
                });

                const switchImage = () => {
                    aboutAutoImage.classList.add('is-fade-switch');

                    setTimeout(() => {
                        currentIndex = (currentIndex + 1) % aboutImages.length;
                        aboutAutoImage.src = aboutImages[currentIndex];
                    }, 550);

                    setTimeout(() => {
                        aboutAutoImage.classList.remove('is-fade-switch');
                    }, 1100);
                };

                setInterval(switchImage, 5000);
            })();

            // =============================================
            //  SCROLL REVEAL — IntersectionObserver
            // =============================================
            (function () {
                const revealTargets = document.querySelectorAll(
                    '.reveal, .reveal-left, .reveal-right, .reveal-scale'
                );
                const titleTargets = document.querySelectorAll('.section-title, .bounce-3s');

                const revealObserver = new IntersectionObserver(
                    (entries) => {
                        entries.forEach((entry) => {
                            if (entry.isIntersecting) {
                                entry.target.classList.add('is-visible');
                            } else {
                                entry.target.classList.remove('is-visible');
                            }
                        });
                    },
                    { threshold: 0.12 }
                );

                revealTargets.forEach((el) => revealObserver.observe(el));

                const titleObserver = new IntersectionObserver(
                    (entries) => {
                        entries.forEach((entry) => {
                            if (entry.isIntersecting) {
                                entry.target.classList.add('drawn', 'in-view');
                            } else {
                                entry.target.classList.remove('drawn', 'in-view');
                            }
                        });
                    },
                    { threshold: 0.5 }
                );

                titleTargets.forEach((el) => titleObserver.observe(el));
            })();

            // Scroll reveal for Tailwind-styled blocks
            (function () {
                const targets = document.querySelectorAll('.reveal-on-scroll');
                if (!('IntersectionObserver' in window) || !targets.length) return;

                const obs = new IntersectionObserver(
                    (entries) => {
                        entries.forEach((entry) => {
                            if (entry.isIntersecting) {
                                entry.target.classList.add('show');
                            } else {
                                entry.target.classList.remove('show');
                            }
                        });
                    },
                    { threshold: 0.15 }
                );

                targets.forEach((el) => obs.observe(el));
            })();

            // Gallery lightbox
            (function () {
                const items = document.querySelectorAll('.gallery-item');
                const lightbox = document.getElementById('galleryLightbox');
                const lightboxImg = document.getElementById('galleryLightboxImg');
                const lightboxClose = document.getElementById('galleryLightboxClose');
                if (!items.length || !lightbox || !lightboxImg) return;
                
                let isLightboxOpen = false;

                const openLightbox = (src, alt) => {
                    lightboxImg.src = src;
                    lightboxImg.alt = alt || '';
                    lightbox.classList.remove('hidden');
                    isLightboxOpen = true;
                    console.log('openLightbox called - isLightboxOpen now true');
                    
                    // Stop autoplay kedua swiper
                    if (swiperGaleriTop && swiperGaleriTop.autoplay) {
                        swiperGaleriTop.autoplay.stop();
                        console.log('swiperGaleriTop autoplay stopped');
                    }
                    if (swiperGaleriBottom && swiperGaleriBottom.autoplay) {
                        swiperGaleriBottom.autoplay.stop();
                        console.log('swiperGaleriBottom autoplay stopped');
                    }
                    
                    requestAnimationFrame(() => {
                        lightbox.classList.add('flex');
                        lightboxImg.classList.remove('opacity-0', 'scale-95');
                        lightboxImg.classList.add('opacity-100', 'scale-100');
                    });
                };

                const closeLightbox = () => {
                    lightboxImg.classList.add('opacity-0', 'scale-95');
                    lightboxImg.classList.remove('opacity-100', 'scale-100');
                    isLightboxOpen = false;
                    console.log('closeLightbox called - isLightboxOpen now false');
                    
                    setTimeout(() => {
                        lightbox.classList.add('hidden');
                        lightbox.classList.remove('flex');
                        lightboxImg.src = '';
                    }, 200);
                    
                    // Recreate swipers supaya autoplay pasti jalan lagi
                    setTimeout(() => {
                        initGallerySwipers();
                        console.log('Gallery swipers reinitialized after close');
                    }, 250);
                };

                items.forEach((item) => {
                    item.addEventListener('click', () => {
                        const src = item.getAttribute('data-img');
                        const alt = item.getAttribute('data-alt');
                        if (!src) return;
                        console.log('Image clicked - opening lightbox');
                        openLightbox(src, alt);
                    });
                    
                    // Pause autoplay saat hover/mouseenter
                    item.addEventListener('mouseenter', () => {
                        console.log('Mouse enter on image - stopping autoplay');
                        if (swiperGaleriTop && swiperGaleriTop.autoplay) {
                            swiperGaleriTop.autoplay.stop();
                        }
                        if (swiperGaleriBottom && swiperGaleriBottom.autoplay) {
                            swiperGaleriBottom.autoplay.stop();
                        }
                    });
                    
                    // Resume autoplay saat mouseleave (hanya jika lightbox tidak terbuka)
                    item.addEventListener('mouseleave', () => {
                        if (!isLightboxOpen) {
                            console.log('Mouse leave - restarting gallery swipers');
                            initGallerySwipers();
                        } else {
                            console.log('Mouse leave but lightbox open - NOT starting autoplay');
                        }
                    });
                });

                lightbox?.addEventListener('click', (e) => {
                    if (e.target === lightbox) closeLightbox();
                });

                lightboxClose?.addEventListener('click', closeLightbox);
                document.addEventListener('keydown', (e) => {
                    if (e.key === 'Escape' && !lightbox.classList.contains('hidden')) {
                        closeLightbox();
                    }
                });
            })();

        </script>
        <!-- /Script -->
    </body>
</html>