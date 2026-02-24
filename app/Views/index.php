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
    <body class="bg-blue-100">
        <style>
            /* menu navbar-humbergermenu */
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
                padding-left: 0.6rem;
                padding-right: 0.6rem;
                transition: background-color 0.2s ease, transform 0.2s ease;
            }

            #mobileMenu a .mobile-link-text {
                position: relative;
                display: inline-block;
            }

            #mobileMenu a .mobile-link-text::after {
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
                color: #2563eb; /* blue-600 */
            }

            /* Highlight facility title text on hover/click/focus */
            .facility-card:hover .facility-title,
            .facility-card:active .facility-title,
            .facility-card:focus-visible .facility-title {
                color: #2563eb; /* blue-600 */
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

            /* swiper2 responsive styling */
            .swiper2 {
                position: relative; /* for nav positioning */
            }
            .swiper2 .swiper-wrapper {
                padding-bottom: 1rem; /* allow room for shadows/overflow */
            }
            .swiper2 .swiper-slide {
                width: auto;
                max-width: 100%;
            }
            /* scale cards slightly on hover for bigger screens */
            @media (min-width: 768px) {
                .swiper2 .swiper-slide {
                    max-width: 28rem;
                }
                .swiper2 .swiper-slide:hover {
                    transform: scale(1.02);
                    transition: transform 0.2s;
                }
            }
            /* navigation arrows */
            .swiper2 .swiper-button-prev,
            .swiper2 .swiper-button-next {
                color: #ffffff;
                background: rgba(0,0,0,0.35);
                width: 2.5rem;
                height: 2.5rem;
                border-radius: 50%;
                top: 50%;
                transform: translateY(-50%);
                position: absolute;
                z-index: 20;
            }
            .swiper2 .swiper-button-prev { left: 0.5rem; }
            .swiper2 .swiper-button-next { right: 0.5rem; }
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
        <a class="fixed bottom-6 right-6 z-50 group" href="https://wa.me/6281234567890?text=Halo%20Admin%20Balatkop,%20saya%20ingin%20tanya%20mengenai%20sarana%20prasarana..."target="_blank">                
            <span class="absolute inline-flex h-2 w-2 rounded-full opacity-75"></span>                
            <div class="relative bg-green-500 text-white p-4 rounded-full shadow-2xl flex items-center justify-center group-hover:scale-110">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.72.94 3.659 1.437 5.63 1.438h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                </svg>                   
            </div>
        </a>
        <!-- navbar -->
        <nav class="bg-white shadow-lg sticky top-0 z-50 backdrop-blur-lg bg-opacity-90">
            <div class="px-2 lg:px-8 relative">         
                <div class="flex justify-between items-center h-20">
                    <!-- logo -->
                    <div class="flex items-center gap-3 slide-in">
                        <a href="#home" class="flex items-center group brand-link">
                            <div class="w-12 h-12 rounded-full flex items-center justify-center mr-3 group-hover:scale-110 transition-transform">
                                <img src="<?= base_url('images/core/logo11.png') ?>" alt="Logo BalatKop" class="w-12 h-12 mr-2 inline-block rounded-full">
                            </div>
                            <div class="flex flex-col leading-tight">
                                <span style="font-family: 'Lora', serif; font-weight: 600;" class="text-blue-600 text-2xl md:text-3xl lg:text-4xl">Sarana-Prasarana</span>
                                <span style="font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 400; letter-spacing: 0.03em;" class="text-gray-800 text-xs md:text-sm">Balatkop UKMK Jateng</span>
                            </div>
                        </a>
                    </div>
                    <!-- menu + actions (kanan) -->
                    <div class="flex items-center gap-6">
                        <!-- menu -->
                        <div class="hidden md:flex space-x-8">
                            <a href="#home" class="nav-link text-gray-700 hover:text-blue-600 font-medium transition">Beranda</a>
                            <a href="#tentang" class="nav-link text-gray-700 hover:text-blue-600 font-medium transition">Tentang</a>
                            <a href="#fasilitas" class="nav-link text-gray-700 hover:text-blue-600 font-medium transition">Fasilitas</a>
                            <a href="#galeri" class="nav-link text-gray-700 hover:text-blue-600 font-medium transition">Galeri</a>
                            <a href="#kontak" class="nav-link text-gray-700 hover:text-blue-600 font-medium transition">Kontak</a>
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
                            <button onclick="toggleMenu()" class="md:hidden p-2 rounded-lg hover:bg-gray-100 transition">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
            <div class="h-screen w-full overflow-hidden relative swiper mySwiper">
                <!-- slide -->
                <div class="swiper-wrapper">                    
                    <!-- 1 -->
                    <div class="swiper-slide h-screen w-full relative bg-black">
                        <img src="<?= base_url('images/core/tam1.png') ?>" alt="Slide 1" class="w-full h-full object-cover mask-l-from-20% mask-l-to-90%">
                        <div class="absolute inset-0 flex flex-col justify-center text-white text-left p-4 pl-16 md:pl-20">
                            <div class="md:max-w-2/3 lg:max-w-1/2 lg:ml-15">
                                <p class="text-lg reveal-left reveal-on-scroll">Slide 1</p>
                                <h1 class="text-9xl leading-8 mt-4 md:text-6xl font font-bold mb-4 uppercase reveal-left reveal-on-scroll">Selamat Datang di <span class="text-blue-800 text-shadow-2xs text-shadow-white">Sarana Prasarana</span>  Balatkop Jateng</h1>
                                <p class="text-sm mt-2 md:text-lg mb-8 reveal-left reveal-on-scroll">Mendukung Operasional Instansi Pemerintah dengan Fasilitas Terbaik</p>
                                <a href="#tentang" class="reveal-left reveal-on-scroll hero-cta-btn mt-5 text-sm w-62.5 justify-center uppercase inline-flex items-center gap-3 text-white text-decoration-none px-8 py-4 shadow-2xl focus-visible:animate-pulse active:scale-95">
                                    Jelajahi Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="swiper-slide h-screen w-full relative bg-black">
                        <img src="<?= base_url('images/core/bg-balatkop3.jpeg') ?>" alt="Slide 1" class="w-full h-full object-cover mask-l-from-20% mask-l-to-90%">
                        <div class="absolute inset-0 flex flex-col justify-center text-white text-left p-4 pl-16 md:pl-20">
                            <div class="md:max-w-2/3 lg:max-w-1/2 lg:ml-15">
                                <p class="text-lg">Slide 2</p>
                                <h1 class="text-9xl leading-8 mt-4 md:text-6xl font font-bold mb-4 uppercase">Balatkop UKM Jateng</h1>
                                <p class="text-sm mt-2 md:text-lg mb-8">Sebuah instansi pelatihan yang memberikan pelatihan dan pendampingan terbaik untuk UKM di Jawa Tengah</p>
                                <a href="#tentang" class="hero-cta-btn mt-5 text-sm w-62.5 justify-center uppercase inline-flex items-center gap-3 text-white text-decoration-none px-8 py-4 shadow-2xl focus-visible:animate-pulse active:scale-95">
                                    Cari Tahu Lebih Lanjut!
                                </a>
                            </div>
                        </div>
                    </div>                         
                    <!-- 3 -->
                    <div class="swiper-slide h-screen w-full relative bg-black">
                        <img src="<?= base_url('images/core/tam1.png') ?>" alt="Slide 1" class="w-full h-full object-cover mask-l-from-20% mask-l-to-90%">
                        <div class="absolute inset-0 flex flex-col justify-center text-white text-left p-4 pl-16 md:pl-20">
                            <div class="md:max-w-2/3 lg:max-w-1/2 lg:ml-15">
                                <p class="text-lg">Slide 3</p>
                                <h1 class="text-9xl leading-8 mt-4 md:text-6xl font font-bold mb-4 uppercase">Ruang Kelas & Rapat</h1>
                                <p class="text-sm mt-2 md:text-lg mb-8">Ruang rapat dengan berbagai fasilitas penunjang kegiatan</p>
                                <a href="#fasilitas" class="hero-cta-btn mt-5 text-sm w-62.5 justify-center uppercase inline-flex items-center gap-3 text-white text-decoration-none px-8 py-4 shadow-2xl focus-visible:animate-pulse active:scale-95">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    </div>                         
                    <!-- 4 -->
                    <div class="swiper-slide h-screen w-full relative bg-black">
                        <img src="<?= base_url('images/core/tam1.png') ?>" alt="Slide 1" class="w-full h-full object-cover mask-l-from-20% mask-l-to-90%">
                        <div class="absolute inset-0 flex flex-col justify-center text-white text-left p-4 pl-16 md:pl-20">
                            <div class="md:max-w-2/3 lg:max-w-1/2 lg:ml-15">
                                <p class="text-lg">Slide 4</p>
                                <h1 class="text-9xl leading-8 mt-4 md:text-6xl font font-bold mb-4 uppercase">Gedung Aula</h1>
                                <p class="text-sm mt-2 md:text-lg mb-8">Ruangan dengan daya tampung besar serta fasilitas fasilitas yang dijamin memuaskan</p>
                                <a href="#fasilitas" class="hero-cta-btn mt-5 text-sm w-62.5 justify-center uppercase inline-flex items-center gap-3 text-white text-decoration-none px-8 py-4 shadow-2xl focus-visible:animate-pulse active:scale-95">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    </div>                             
                    <!-- 5 -->
                    <div class="swiper-slide h-screen w-full relative bg-black">
                        <img src="<?= base_url('images/core/tam1.png') ?>" alt="Slide 1" class="w-full h-full object-cover mask-l-from-20% mask-l-to-90%">
                        <div class="absolute inset-0 flex flex-col justify-center text-white text-left p-4 pl-16 md:pl-20">
                            <div class="md:max-w-2/3 lg:max-w-1/2 lg:ml-15">
                                <p class="text-lg">Slide 5</p>
                                <h1 class="text-9xl leading-8 mt-4 md:text-6xl font font-bold mb-4 uppercase">Laboratorium</h1>
                                <p class="text-sm mt-2 md:text-lg mb-8">Ruangan dengan berbagai fasilitas yang sesuai dengan kegiatan yang dilaksanakan</p>
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
                <p class="text-4xl font-bold heading-modern bounce-3s section-title-fancy">Tentang Sarana Prasarana Kami</p>
            </div>
            <div class="max-w-7xl mx-auto md:px-4 sm:px-6 lg:px-8 bg-white rounded-3xl shadow p-8 mt-2 reveal-on-scroll">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="space-y-6 reveal-left reveal-on-scroll">
                        <h3 class="text-3xl font-bold text-blue-600">Deskripsi Umum</h3>
                        <p class="text-gray-700 text-lg leading-relaxed">
                            Sarana dan prasarana kami dirancang untuk mendukung penuh kelancaran operasional instansi pemerintah. 
                            Dengan infrastruktur modern dan fasilitas lengkap, kami berkomitmen memberikan layanan terbaik kepada masyarakat.
                        </p>
                        <p class="text-gray-700 text-lg leading-relaxed">
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
                        <div class="absolute inset-0 bg-linear-to-br from-blue-400 to-purple-600 rounded-2xl transform rotate-3"></div>
                        <div class="relative bg-transparent rounded-2xl overflow-hidden shadow-2xl transform -rotate-1 hover:rotate-0 transition-transform h-96 flex items-center justify-center">
                            <img id="aboutAutoImage" src="<?= base_url('images/core/bg-balatkop1.jpeg') ?>" alt="About Image" class="w-full h-full object-cover about-auto-image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /about section -->

        <!-- Gedung section -->
        <section class="py-10 pt-26" id="fasilitas">
            <div class="w-full px-0 reveal-on-scroll">
                <div class="bg-blue-800 p-6 md:p-10 shadow-inner" style="border-radius: 0;">
                    <p class="text-4xl font-extrabold text-center text-white heading-modern bounce-3s section-title-fancy reveal-on-scroll mb-6">Gedung dan Ruangan</p>
                    <!-- Swiper -->
                        <div class="swiper2 mySwiper2 overflow-hidden">
                            <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- Aula -->
                                <div class="max-w-6xl bg-white rounded shadow-xl overflow-hidden card-hover hover:shadow-2xl transition-shadow text-left h-full flex flex-col reveal-on-scroll">
                                    <div class="h-70 bg-blue-500 gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center">
                                        <video class="w-full h-full object-cover block" autoplay muted loop playsinline>
                                            <source src="<?= base_url('images/core/Aula%20Anggrek.mp4') ?>" type="video/mp4">
                                        </video>
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
                                                <span>Ruang tunggu publik luas</span>
                                            </li>
                                            <li class="feature-item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-blue-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M8 9h8"/><path d="M8 13h6"/></svg>
                                                <span>Loket informasi & verifikasi</span>
                                            </li>
                                            <li class="feature-item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-blue-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z"/><path d="M4 20a8 8 0 0 1 16 0"/></svg>
                                                <span>Ruang konsultasi privat</span>
                                            </li>
                                        </ul>
                                        <button onclick="openBuildingModal('publik')" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition mt-auto hover:scale-105 focus-visible:animate-pulse hover-text-amber">Lihat Detail</button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!-- Ruang Kelas -->
                                <div class=" max-w-6xl bg-white rounded shadow-xl overflow-hidden card-hover hover:shadow-2xl transition-shadow text-left h-full flex flex-col reveal-on-scroll">
                                    <div class="h-70 flex items-center justify-center">
                                        <video class="w-full h-full object-cover block" autoplay muted loop playsinline>
                                            <source src="<?= base_url('images/core/office1.mp4') ?>" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="p-6 flex flex-col flex-1">
                                        <h3 class="text-2xl font-bold text-blue-600 mb-2">Ruang Kelas</h3>
                                        <div class="space-y-2 mb-1">
                                            <div class="flex items-center text-gray-700">
                                                <p class="text-gray-600">Bangunan utama dimana karyawan bekerja</p>
                                            </div>
                                        </div>
                                        <ul class="space-y-3 mb-4 text-sm text-gray-700 feature-list">
                                            <li class="feature-item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-blue-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18"/><path d="M5 21V7l7-4 7 4v14"/><path d="M9 10h6"/><path d="M9 14h6"/></svg>
                                                <span>Ruang Direktur & Tata Usaha</span>
                                            </li>
                                            <li class="feature-item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-blue-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="12" rx="2"/><path d="M8 20h8"/><path d="M12 16v4"/></svg>
                                                <span>Ruang Rapat + Video Conference</span>
                                            </li>
                                            <li class="feature-item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-blue-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 7H4"/><path d="M20 11H4"/><path d="M20 15H4"/><path d="M20 19H4"/></svg>
                                                <span>Arsip, keuangan, dan administrasi</span>
                                            </li>
                                        </ul>
                                        <button onclick="openBuildingModal('utama')" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition mt-auto hover:scale-105 focus-visible:animate-pulse hover-text-amber">Lihat Detail</button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!-- Asrama -->
                                <div class="max-w-6xl bg-white rounded shadow-xl overflow-hidden card-hover hover:shadow-2xl transition-shadow text-left h-full flex flex-col reveal-on-scroll">
                                    <div class="h-70 bg-blue-500 flex items-center justify-center">
                                        <video class="w-full h-full object-cover block" autoplay muted loop playsinline>
                                            <source src="<?= base_url('images/core/Asrama1.mp4') ?>" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="p-6 flex flex-col flex-1">
                                        <h3 class="text-2xl font-bold text-blue-600 mb-2">Asrama Matahari</h3>
                                        <div class="space-y-2 mb-1">
                                            <div class="flex items-center text-gray-700">
                                                <p class="text-gray-600">Ruang pendukung yang ada di Balatkop</p>
                                            </div>
                                        </div>
                                        <ul class="space-y-3 mb-4 text-sm text-gray-700 feature-list">
                                            <li class="feature-item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-blue-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5V5.5A1.5 1.5 0 0 1 5.5 4H20"/><path d="M8 7h8"/><path d="M8 11h8"/><path d="M8 15h6"/></svg>
                                                <span>Perpustakaan modern & e-book</span>
                                            </li>
                                            <li class="feature-item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-blue-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 12h8"/><path d="M12 8v8"/><circle cx="12" cy="12" r="9"/></svg>
                                                <span>Ruang kolaborasi & meeting</span>
                                            </li>
                                            <li class="feature-item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-blue-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 20h20"/><path d="M7 20V9l5-3 5 3v11"/></svg>
                                                <span>Seminar hall + sound system</span>
                                            </li>
                                        </ul>
                                        <button onclick="openBuildingModal('pendukung')" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition mt-auto hover:scale-105 focus-visible:animate-pulse hover-text-amber">Lihat Detail</button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!-- Aula -->
                                <div class="max-w-6xl bg-white rounded shadow-xl overflow-hidden card-hover hover:shadow-2xl transition-shadow text-left h-full flex flex-col reveal-on-scroll">
                                    <div class="h-70 bg-blue-500 gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center">
                                        <video class="w-full h-full object-cover block" autoplay muted loop playsinline>
                                            <source src="<?= base_url('images/core/Aula%20Anggrek.mp4') ?>" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="p-6 flex flex-col flex-1">
                                        <h3 class="text-2xl font-bold text-blue-600 mb-2">Laboratorium</h3>
                                        <div class="space-y-2 mb-1">
                                            <div class="flex items-center text-gray-700">
                                                <p class="text-gray-600">Gedung besar yang dapat digunakan untuk melakukan berbagai kegiatan</p> 
                                            </div>
                                        </div>
                                        <ul class="space-y-3 mb-4 text-sm text-gray-700 feature-list">
                                            <li class="feature-item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-blue-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16v12H4z"/><path d="M8 20h8"/><path d="M12 16v4"/></svg>
                                                <span>Ruang tunggu publik luas</span>
                                            </li>
                                            <li class="feature-item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-blue-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M8 9h8"/><path d="M8 13h6"/></svg>
                                                <span>Loket informasi & verifikasi</span>
                                            </li>
                                            <li class="feature-item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-blue-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z"/><path d="M4 20a8 8 0 0 1 16 0"/></svg>
                                                <span>Ruang konsultasi privat</span>
                                            </li>
                                        </ul>
                                        <button onclick="openBuildingModal('publik')" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition mt-auto hover:scale-105 focus-visible:animate-pulse hover-text-amber">Lihat Detail</button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>    
                    </div>
                </div>
            </div>
        </section>
        <!-- /gedung section -->

        <!-- Fasilitas Section -->
        <section id="fasilitas" class="py-20 ">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 reveal-on-scroll">
                <p class="text-4xl text-center heading-modern bounce-3s section-title-fancy reveal-on-scroll">Fasilitas Lengkap</p>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Fasilitas Card - Kesehatan -->
                    <button onclick="openModal('kesehatan')" class="bg-white rounded-3xl p-6 shadow-xl transition cursor-pointer text-left facility-card reveal stagger-1 reveal-on-scroll hover:scale-105 focus-visible:animate-pulse group">
                        <div class="facility-hero mb-5">
                            <svg class="card-icon text-slate-700 transition-colors duration-200 group-hover:text-blue-600 group-active:text-blue-600 group-focus-visible:text-blue-600" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold facility-title mb-2">Kesehatan</h3>
                        <p class="text-sm facility-description">Klinik kesehatan dengan kelengkapan p3k</p>
                    </button>

                    <!-- Fasilitas Card - Perpustakaan -->
                    <button onclick="openModal('perpustakaan')" class="bg-white rounded-3xl p-6 shadow-xl transition cursor-pointer text-left facility-card reveal stagger-2 reveal-on-scroll hover:scale-105 focus-visible:animate-pulse group">
                        <div class="facility-hero mb-5">
                            <svg class="card-icon text-slate-700 transition-colors duration-200 group-hover:text-blue-600 group-active:text-blue-600 group-focus-visible:text-blue-600" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
                                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold facility-title mb-2">Perpustakaan</h3>
                        <p class="text-sm facility-description">Koleksi buku lengkap dengan ruang baca nyaman</p>
                    </button>

                    <!-- Fasilitas Card - Kantin -->
                    <button onclick="openModal('kantin')" class="bg-white rounded-3xl p-6 shadow-xl transition cursor-pointer text-left facility-card reveal stagger-3 reveal-on-scroll hover:scale-105 focus-visible:animate-pulse group">
                        <div class="facility-hero mb-5">
                            <svg class="card-icon text-slate-700 transition-colors duration-200 group-hover:text-blue-600 group-active:text-blue-600 group-focus-visible:text-blue-600" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2"/>
                                <path d="M7 2v20"/>
                                <path d="M21 15V2a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold facility-title mb-2">Kantin</h3>
                        <p class="text-sm facility-description">Kantin modern dengan menu variatif dan higienis</p>
                    </button>

                    <!-- Fasilitas Card - Parkir -->
                    <button onclick="openModal('parkir')" class="bg-white rounded-3xl p-6 shadow-xl transition cursor-pointer text-left facility-card reveal stagger-4 reveal-on-scroll hover:scale-105 focus-visible:animate-pulse group">
                        <div class="facility-hero mb-5">
                            <svg class="card-icon text-slate-700 transition-colors duration-200 group-hover:text-blue-600 group-active:text-blue-600 group-focus-visible:text-blue-600" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="3" width="18" height="18" rx="2"/>
                                <path d="M9 17V7h4a3 3 0 0 1 0 6H9"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold facility-title mb-2">Parkir</h3>
                        <p class="text-sm facility-description">Lahan parkir luas dengan sistem keamanan modern</p>
                    </button>

                    <button onclick="openModal('lab')" class="bg-white rounded-3xl p-6 shadow-xl transition cursor-pointer text-left facility-card reveal stagger-5 reveal-on-scroll hover:scale-105 focus-visible:animate-pulse group">
                        <div class="facility-hero mb-5">
                            <svg class="card-icon text-slate-700 transition-colors duration-200 group-hover:text-blue-600 group-active:text-blue-600 group-focus-visible:text-blue-600" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="3" width="20" height="14" rx="2"/>
                                <path d="M8 21h8M12 17v4"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold facility-title mb-2">Lab Komputer</h3>
                        <p class="text-sm facility-description">Laboratorium komputer dengan perangkat terkini</p>
                    </button>
                    <!-- Fasilitas Card - Mushola -->
                    <button onclick="openModal('mushola')" class="bg-white rounded-3xl p-6 shadow-xl transition cursor-pointer text-left facility-card reveal stagger-6 reveal-on-scroll hover:scale-105 focus-visible:animate-pulse group">
                        <div class="facility-hero mb-5">
                            <svg class="card-icon text-slate-700 transition-colors duration-200 group-hover:text-blue-600 group-active:text-blue-600 group-focus-visible:text-blue-600" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 21h18"/>
                                <path d="M5 21V11l7-6 7 6v10"/>
                                <circle cx="12" cy="5" r="1.5" fill="currentColor"/>
                                <path d="M12 3v2.5"/>
                                <path d="M8 13h8v8H8z"/>
                                <path d="M12 8.5c-2.5 0-4 1.5-4 3v1.5h8V11.5c0-1.5-1.5-3-4-3z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold facility-title mb-2">Mushola</h3>
                        <p class="text-sm facility-description">Mushola bersih dan nyaman dengan fasilitas ibadah lengkap</p>
                    </button>

                    <!-- Fasilitas Card - Transportasi -->
                    <button onclick="openModal('transportasi')" class="bg-white rounded-3xl p-6 shadow-xl transition cursor-pointer text-left facility-card reveal stagger-7 reveal-on-scroll hover:scale-105 focus-visible:animate-pulse group">
                        <div class="facility-hero mb-5">
                            <svg class="card-icon text-slate-700 transition-colors duration-200 group-hover:text-blue-600 group-active:text-blue-600 group-focus-visible:text-blue-600" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 17H5a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h14l2 4v4a2 2 0 0 1-2 2z"/>
                                <circle cx="7.5" cy="17" r="1.5"/>
                                <circle cx="16.5" cy="17" r="1.5"/>
                                <path d="M3 9h18"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold facility-title mb-2">Transportasi</h3>
                        <p class="text-sm facility-description">Shuttle service dan akses transportasi publik mudah</p>
                    </button>

                    <!-- Fasilitas Card - Keamanan -->
                    <button onclick="openModal('keamanan')" class="bg-white rounded-3xl p-6 shadow-xl transition cursor-pointer text-left facility-card reveal stagger-8 reveal-on-scroll hover:scale-105 focus-visible:animate-pulse group">
                        <div class="facility-hero mb-5">
                            <svg class="card-icon text-slate-700 transition-colors duration-200 group-hover:text-blue-600 group-active:text-blue-600 group-focus-visible:text-blue-600" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
            <div class="w-full bg-blue-800 p-10 mx-auto px-4 sm:px-6 lg:px-8 reveal-on-scroll">
                <p class="text-4xl font-bold text-center heading-modern bounce-3s section-title-fancy text-white reveal-on-scroll">Galeri Foto</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
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
                </div>
            </div>
        </section>
        <!-- /gallery section -->

        <!-- Lightbox for gallery -->
        <div id="galleryLightbox" class="fixed inset-0 bg-black/30 z-50 hidden items-center justify-center p-4">
            <div class="relative max-w-4xl w-full">
                <img id="galleryLightboxImg" src="" alt="" class="w-full h-auto max-h-[75vh] rounded-2xl shadow-2xl transform transition duration-300 opacity-0 scale-90">
            </div>
        </div>

        
        <!-- kontak Section -->
        <section id="kontak" class="py-20 bg-blue-800 text-white relative overflow-hidden">
            <div class="">
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full -translate-x-1/2 -translate-y-1/2"></div>
                    <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full translate-x-1/2 translate-y-1/2"></div>
                </div>
                <div class="relative flex w-full mx-auto sm:px-6 lg:px-8 text-center">
                    <div class="flex-1">
                        <h2 class="text-4xl md:text-5xl font-bold mb-6">Tertarik untuk Menggunakan Layanan Kami?</h2>
                        <p class="text-xl md:text-2xl mb-10 text-gray-100"><span class="font text-white">Kunjungi Balai Pelatihan Koperasi dan UKM Jateng atau hubungi</span> tim kami untuk informasi lebih lanjut</p>
                    </div>                             
                </div>
            </div>
        </section>
        <!-- /kontak -->


        <!-- footer -->
        <footer class="bg-gray-900 text-white py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 justify-center">
                <!-- Footer Content - 4 Columns Grid -->
                <div class="row g-5 mb-5">
                    <!-- Column 1: Ikuti Kami (Social Media) -->
                    <div class="col-md-3">
                        <h3 class="text-xl font-bold mb-6 text-white">Ikuti Kami</h3>
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
                        <h3 class="text-xl font-bold mb-6 text-white">Jam Operasional</h3>
                        <div class="space-y-4">
                            <div>
                                <p class="text-gray-400 text-sm"><span class="font-semibold">Senin - Jumat:</span></p>
                                <p class="text-white text-sm">07:00 - 16:00 WIB</p>
                            </div>
                            <div>
                                <p class="text-gray-400 text-sm"><span class="font-semibold">Sabtu & Minggu:</span></p>
                                <p class="text-white text-sm">Tutup</p>
                            </div>
                        </div>
                    </div>

                    <!-- Column 3: Kontak -->
                    <div class="col-md-3">
                        <h3 class="text-xl font-bold mb-6 text-white">Kontak</h3>
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
                    <h3 class="text-xl font-bold mb-4 text-white">Lokasi Kami</h3>
                    <div class="relative w-full rounded-lg overflow-hidden shadow-lg border border-gray-800/40" style="height: 350px;">
                        <iframe src="https://maps.google.com/maps?q=Balatkop+UMKM,+Semarang&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <!-- Copyright Section -->
                <hr class="border-gray-800 mb-8">
                <div class="text-center text-gray-400 text-sm">
                    <p>© 2026 Sarana dan Prasarana Balatkop UKM Jateng.</p>
                </div>
            </div>
        </footer>
        <!-- /footer -->

        <!-- Modal --> 
            <!-- gedung -->
            <!-- Modal Gedung Utama -->
            <div id="modalUtama" class="hidden fixed inset-0 z-50 modal-overlay flex items-center justify-center p-4">
                <div class="bg-white rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto shadow-2xl modal-panel">
                    <!-- Image slider - full width -->
                    <div class="relative">
                        <div class="swiper modal-img-swiper" id="swiperRuanganUtama" style="height: 360px;">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="<?= base_url('images/core/bg-balatkop1.jpeg') ?>" class="w-full h-full object-cover"></div>
                                <div class="swiper-slide"><img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover"></div>
                                <div class="swiper-slide"><img src="<?= base_url('images/core/bg-balatkop3.jpeg') ?>" class="w-full h-full object-cover"></div>
                                <div class="swiper-slide"><img src="<?= base_url('images/core/bg-balatkop4.jpeg') ?>" class="w-full h-full object-cover"></div>
                                <div class="swiper-slide"><img src="<?= base_url('images/core/bg-balatkop5.jpeg') ?>" class="w-full h-full object-cover"></div>
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                    <!-- Scrollable content panels (synced with slide) -->
                    <div>
                        <div class="p-6 modal-info-utama modal-info-block" data-slide="0">
                            <div class="flex flex-col items-start">
                                <div class="bg-blue-600 text-white px-4 py-2 rounded-lg mb-3">
                                    <h3 class="text-2xl font-bold text-center">Ruang Direktur</h3>
                                </div>
                                <div class="inline-block bg-blue-100 border border-blue-300 px-3 py-2 rounded-lg mb-3">
                                    <p class="text-gray-700 text-sm mb-1">
                                        <span class="font-bold">Ukuran :</span> 80 sqm
                                    </p>
                                    <p class="text-gray-700 text-sm">
                                        <span class="font-bold">Kapasitas :</span> 8 guests
                                    </p>
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm mb-3 modal-info-desc">Mencari tempat pertemuan berukuran kecil dan menengah tidak akan sulit karena Ruang Direktur telah mempresentasikannya kepada Anda. Sempurna untuk acara formal maupun gathering dan reuni.</p>
                            <p class="text-gray-600 text-sm mb-3">Ruang Direktur<br>Dimensi ruangan 80 m2</p>
                            <ul class="modal-info-list">
                                <li>Terletak di lantai 10</li>
                                <li>Akses langsung menuju pintu masuk utama gedung</li>
                                <li>Teater set up menampung 8 orang</li>
                                <li>Classroom set up menampung 6 orang</li>
                                <li>U shape set up menampung 5 orang</li>
                                <li>Boardroom set up menampung 8 orang</li>
                                <li>Round table set up menampung 6 orang</li>
                            </ul>
                        </div>
                        <div class="p-6 modal-info-utama modal-info-block hidden" data-slide="1">
                            <div class="flex flex-col items-start">
                                <div class="bg-blue-600 text-white px-4 py-2 rounded-lg mb-3">
                                    <h3 class="text-2xl font-bold text-center">Ruang Rapat Utama</h3>
                                </div>
                                <div class="inline-block bg-blue-100 border border-blue-300 px-3 py-2 rounded-lg mb-3">
                                    <p class="text-gray-700 text-sm mb-1">
                                        <span class="font-bold">Ukuran :</span> 120 sqm
                                    </p>
                                    <p class="text-gray-700 text-sm">
                                        <span class="font-bold">Kapasitas :</span> 50 guests
                                    </p>
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm mb-3 modal-info-desc">Mencari tempat pertemuan berukuran kecil dan menengah tidak akan sulit karena Ruang Rapat Utama telah mempresentasikannya kepada Anda. Sempurna untuk acara formal maupun gathering dan reuni.</p>
                            <p class="text-gray-600 text-sm mb-3">Ruang Rapat Utama<br>Dimensi ruangan 120 m2</p>
                            <ul class="modal-info-list">
                                <li>Terletak di lantai 9</li>
                                <li>Akses langsung menuju pintu masuk utama gedung</li>
                                <li>Teater set up menampung 50 orang</li>
                                <li>Classroom set up menampung 40 orang</li>
                                <li>U shape set up menampung 30 orang</li>
                                <li>Boardroom set up menampung 25 orang</li>
                                <li>Round table set up menampung 40 orang</li>
                            </ul>
                        </div>
                        <div class="p-6 modal-info-utama modal-info-block hidden" data-slide="2">
                            <div class="flex flex-col items-start">
                                <div class="bg-blue-600 text-white px-4 py-2 rounded-lg mb-3">
                                    <h3 class="text-2xl font-bold text-center">Ruang Tata Usaha</h3>
                                </div>
                                <div class="inline-block bg-blue-100 border border-blue-300 px-3 py-2 rounded-lg mb-3">
                                    <p class="text-gray-700 text-sm mb-1">
                                        <span class="font-bold">Ukuran :</span> 100 sqm
                                    </p>
                                    <p class="text-gray-700 text-sm">
                                        <span class="font-bold">Kapasitas :</span> 30 guests
                                    </p>
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm mb-3 modal-info-desc">Mencari tempat pertemuan berukuran kecil dan menengah tidak akan sulit karena Ruang Tata Usaha telah mempresentasikannya kepada Anda. Sempurna untuk acara formal maupun gathering dan reuni.</p>
                            <p class="text-gray-600 text-sm mb-3">Ruang Tata Usaha<br>Dimensi ruangan 100 m2</p>
                            <ul class="modal-info-list">
                                <li>Terletak di lantai 8</li>
                                <li>Akses langsung menuju pintu masuk utama gedung</li>
                                <li>Teater set up menampung 30 orang</li>
                                <li>Classroom set up menampung 25 orang</li>
                                <li>U shape set up menampung 20 orang</li>
                                <li>Boardroom set up menampung 15 orang</li>
                                <li>Round table set up menampung 20 orang</li>
                            </ul>
                        </div>
                        <div class="p-6 modal-info-utama modal-info-block hidden" data-slide="3">
                            <div class="flex flex-col items-start">
                                <div class="bg-blue-600 text-white px-4 py-2 rounded-lg mb-3">
                                    <h3 class="text-2xl font-bold text-center">Ruang Keuangan</h3>
                                </div>
                                <div class="inline-block bg-blue-100 border border-blue-300 px-3 py-2 rounded-lg mb-3">
                                    <p class="text-gray-700 text-sm mb-1">
                                        <span class="font-bold">Ukuran :</span> 90 sqm
                                    </p>
                                    <p class="text-gray-700 text-sm">
                                        <span class="font-bold">Kapasitas :</span> 20 guests
                                    </p>
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm mb-3 modal-info-desc">Mencari tempat pertemuan berukuran kecil dan menengah tidak akan sulit karena Ruang Keuangan telah mempresentasikannya kepada Anda. Sempurna untuk acara formal maupun gathering dan reuni.</p>
                            <p class="text-gray-600 text-sm mb-3">Ruang Keuangan<br>Dimensi ruangan 90 m2</p>
                            <ul class="modal-info-list">
                                <li>Terletak di lantai 7</li>
                                <li>Akses langsung menuju pintu masuk utama gedung</li>
                                <li>Teater set up menampung 20 orang</li>
                                <li>Classroom set up menampung 15 orang</li>
                                <li>U shape set up menampung 12 orang</li>
                                <li>Boardroom set up menampung 10 orang</li>
                                <li>Round table set up menampung 15 orang</li>
                            </ul>
                        </div>
                        <div class="p-6 modal-info-utama modal-info-block hidden" data-slide="4">
                            <div class="flex flex-col items-start">
                                    <div class="bg-blue-600 text-white px-4 py-2 rounded-lg mb-3">
                                    <h3 class="text-2xl font-bold text-center">Ruang Arsip</h3>
                                </div>
                                <div class="inline-block bg-blue-100 border border-blue-300 px-3 py-2 rounded-lg mb-3">
                                    <p class="text-gray-700 text-sm mb-1">
                                        <span class="font-bold">Ukuran :</span> 150 sqm
                                    </p>
                                    <p class="text-gray-700 text-sm">
                                        <span class="font-bold">Kapasitas :</span> 15 guests
                                    </p>
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm mb-3 modal-info-desc">Mencari tempat pertemuan berukuran kecil dan menengah tidak akan sulit karena Ruang Arsip telah mempresentasikannya kepada Anda. Sempurna untuk acara formal maupun gathering dan reuni.</p>
                            <p class="text-gray-600 text-sm mb-3">Ruang Arsip<br>Dimensi ruangan 150 m2</p>
                            <ul class="modal-info-list">
                                <li>Terletak di lantai 6</li>
                                <li>Akses langsung menuju pintu masuk utama gedung</li>
                                <li>Teater set up menampung 15 orang</li>
                                <li>Classroom set up menampung 10 orang</li>
                                <li>U shape set up menampung 8 orang</li>
                                <li>Boardroom set up menampung 8 orang</li>
                                <li>Round table set up menampung 10 orang</li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-4 border-t">
                        <button onclick="closeBuildingModal('utama')" class="w-full bg-blue-600 text-white py-3 rounded-xl font-bold hover:bg-blue-700 transition">Tutup</button>
                    </div>
                </div>
            </div>

            <!-- Modal Gedung Pendukung -->
            <div id="modalPendukung" class="hidden fixed inset-0 z-50 modal-overlay flex items-center justify-center p-4">
                <div class="bg-white rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto shadow-2xl modal-panel">
                    <div class="relative">
                        <div class="swiper modal-img-swiper" id="swiperRuanganPendukung" style="height: 360px;">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover"></div>
                                <div class="swiper-slide"><img src="<?= base_url('images/core/bg-balatkop3.jpeg') ?>" class="w-full h-full object-cover"></div>
                                <div class="swiper-slide"><img src="<?= base_url('images/core/bg-balatkop4.jpeg') ?>" class="w-full h-full object-cover"></div>
                                <div class="swiper-slide"><img src="<?= base_url('images/core/bg-balatkop1.jpeg') ?>" class="w-full h-full object-cover"></div>
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                    <div>
                        <div class="p-6 modal-info-pendukung modal-info-block" data-slide="0">
                            <div class="flex flex-col items-start">
                                <div class="bg-blue-600 text-white px-4 py-2 rounded-lg mb-3">
                                    <h3 class="text-2xl font-bold text-center">Ruang Perpustakaan</h3>
                                </div>
                                <div class="inline-block bg-blue-100 border border-blue-300 px-3 py-2 rounded-lg mb-3">
                                    <p class="text-gray-700 text-sm mb-1">
                                        <span class="font-bold">Ukuran :</span> 200 sqm
                                    </p>
                                    <p class="text-gray-700 text-sm">
                                        <span class="font-bold">Kapasitas :</span> 60 guests
                                    </p>
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm mb-3 modal-info-desc">Mencari tempat pertemuan berukuran kecil dan menengah tidak akan sulit karena Ruang Perpustakaan telah mempresentasikannya kepada Anda. Sempurna untuk acara formal maupun gathering dan reuni.</p>
                            <p class="text-gray-600 text-sm mb-3">Ruang Perpustakaan<br>Dimensi ruangan 200 m2</p>
                            <ul class="modal-info-list">
                                <li>Terletak di lantai 1</li>
                                <li>Akses langsung menuju pintu masuk utama gedung</li>
                                <li>Teater set up menampung 60 orang</li>
                                <li>Classroom set up menampung 45 orang</li>
                                <li>U shape set up menampung 35 orang</li>
                                <li>Boardroom set up menampung 30 orang</li>
                                <li>Round table set up menampung 40 orang</li>
                            </ul>
                        </div>
                        <div class="p-6 modal-info-pendukung modal-info-block hidden" data-slide="1">
                            <div class="flex flex-col items-start">
                                <div class="bg-blue-600 text-white px-4 py-2 rounded-lg mb-3">
                                    <h3 class="text-2xl font-bold text-center">Ruang Kolaborasi</h3>
                                </div>
                                <div class="inline-block bg-blue-100 border border-blue-300 px-3 py-2 rounded-lg mb-3">
                                    <p class="text-gray-700 text-sm mb-1">
                                        <span class="font-bold">Ukuran :</span> 150 sqm
                                    </p>
                                    <p class="text-gray-700 text-sm">
                                        <span class="font-bold">Kapasitas :</span> 40 guests
                                    </p>
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm mb-3 modal-info-desc">Mencari tempat pertemuan berukuran kecil dan menengah tidak akan sulit karena Ruang Kolaborasi telah mempresentasikannya kepada Anda. Sempurna untuk acara formal maupun gathering dan reuni.</p>
                            <p class="text-gray-600 text-sm mb-3">Ruang Kolaborasi<br>Dimensi ruangan 150 m2</p>
                            <ul class="modal-info-list">
                                <li>Terletak di lantai 1-2</li>
                                <li>Akses langsung menuju pintu masuk utama gedung</li>
                                <li>Teater set up menampung 40 orang</li>
                                <li>Classroom set up menampung 30 orang</li>
                                <li>U shape set up menampung 25 orang</li>
                                <li>Boardroom set up menampung 20 orang</li>
                                <li>Round table set up menampung 30 orang</li>
                            </ul>
                        </div>
                        <div class="p-6 modal-info-pendukung modal-info-block hidden" data-slide="2">
                            <div class="flex flex-col items-start">
                                <div class="bg-blue-600 text-white px-4 py-2 rounded-lg mb-3">
                                    <h3 class="text-2xl font-bold text-center">Ruang Meeting A</h3>
                                </div>
                                <div class="inline-block bg-blue-100 border border-blue-300 px-3 py-2 rounded-lg mb-3">
                                    <p class="text-gray-700 text-sm mb-1">
                                        <span class="font-bold">Ukuran :</span> 80 sqm
                                    </p>
                                    <p class="text-gray-700 text-sm">
                                        <span class="font-bold">Kapasitas :</span> 25 guests
                                    </p>
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm mb-3 modal-info-desc">Mencari tempat pertemuan berukuran kecil dan menengah tidak akan sulit karena Ruang Meeting A telah mempresentasikannya kepada Anda. Sempurna untuk acara formal maupun gathering dan reuni.</p>
                            <p class="text-gray-600 text-sm mb-3">Ruang Meeting A<br>Dimensi ruangan 80 m2</p>
                            <ul class="modal-info-list">
                                <li>Terletak di lantai 2</li>
                                <li>Akses langsung menuju pintu masuk utama gedung</li>
                                <li>Teater set up menampung 25 orang</li>
                                <li>Classroom set up menampung 20 orang</li>
                                <li>U shape set up menampung 15 orang</li>
                                <li>Boardroom set up menampung 14 orang</li>
                                <li>Round table set up menampung 20 orang</li>
                            </ul>
                        </div>
                        <div class="p-6 modal-info-pendukung modal-info-block hidden" data-slide="3">
                            <div class="flex flex-col items-start">
                                <div class="bg-blue-600 text-white px-4 py-2 rounded-lg mb-3">
                                    <h3 class="text-2xl font-bold text-center">Ruang Seminar</h3>
                                </div>
                                <div class="inline-block bg-blue-100 border border-blue-300 px-3 py-2 rounded-lg mb-3">
                                    <p class="text-gray-700 text-sm mb-1">
                                        <span class="font-bold">Ukuran :</span> 250 sqm
                                    </p>
                                    <p class="text-gray-700 text-sm">
                                        <span class="font-bold">Kapasitas :</span> 100 guests
                                    </p>
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm mb-3 modal-info-desc">Mencari tempat pertemuan berukuran kecil dan menengah tidak akan sulit karena Ruang Seminar telah mempresentasikannya kepada Anda. Sempurna untuk acara formal maupun gathering dan reuni.</p>
                            <p class="text-gray-600 text-sm mb-3">Ruang Seminar<br>Dimensi ruangan 250 m2</p>
                            <ul class="modal-info-list">
                                <li>Terletak di lantai 3</li>
                                <li>Akses langsung menuju pintu masuk utama gedung</li>
                                <li>Teater set up menampung 100 orang</li>
                                <li>Classroom set up menampung 80 orang</li>
                                <li>U shape set up menampung 60 orang</li>
                                <li>Boardroom set up menampung 50 orang</li>
                                <li>Round table set up menampung 70 orang</li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-4 border-t">
                        <button onclick="closeBuildingModal('pendukung')" class="w-full bg-blue-600 text-white py-3 rounded-xl font-bold hover:bg-blue-700 transition">Tutup</button>
                    </div>
                </div>
            </div>

            <!-- Modal Layanan Publik -->
            <div id="modalPublik" class="hidden fixed inset-0 z-50 modal-overlay flex items-center justify-center p-4">
                <div class="bg-white rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto shadow-2xl modal-panel">
                    <div class="relative">
                        <div class="swiper modal-img-swiper" id="swiperRuanganPublik" style="height: 360px;">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="<?= base_url('images/core/bg-balatkop3.jpeg') ?>" class="w-full h-full object-cover"></div>
                                <div class="swiper-slide"><img src="<?= base_url('images/core/bg-balatkop4.jpeg') ?>" class="w-full h-full object-cover"></div>
                                <div class="swiper-slide"><img src="<?= base_url('images/core/bg-balatkop1.jpeg') ?>" class="w-full h-full object-cover"></div>
                                <div class="swiper-slide"><img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" class="w-full h-full object-cover"></div>
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                    <div>
                        <div class="p-6 modal-info-publik modal-info-block" data-slide="0">
                            <div class="flex flex-col items-start">
                                <div class="bg-blue-600 text-white px-4 py-2 rounded-lg mb-3">
                                    <h3 class="text-2xl font-bold text-center">Ruang Tunggu Publik</h3>
                                </div>
                                <div class="inline-block bg-blue-100 border border-blue-300 px-3 py-2 rounded-lg mb-3">
                                    <p class="text-gray-700 text-sm mb-1">
                                        <span class="font-bold">Ukuran :</span> 300 sqm
                                    </p>
                                    <p class="text-gray-700 text-sm">
                                        <span class="font-bold">Kapasitas :</span> 120 guests
                                    </p>
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm mb-3 modal-info-desc">Mencari tempat pertemuan berukuran kecil dan menengah tidak akan sulit karena Ruang Tunggu Publik telah mempresentasikannya kepada Anda. Sempurna untuk acara formal maupun gathering dan reuni.</p>
                            <p class="text-gray-600 text-sm mb-3">Ruang Tunggu Publik<br>Dimensi ruangan 300 m2</p>
                            <ul class="modal-info-list">
                                <li>Terletak di lantai 1</li>
                                <li>Akses langsung menuju pintu masuk utama gedung</li>
                                <li>Teater set up menampung 120 orang</li>
                                <li>Classroom set up menampung 100 orang</li>
                                <li>U shape set up menampung 80 orang</li>
                                <li>Boardroom set up menampung 60 orang</li>
                                <li>Round table set up menampung 100 orang</li>
                            </ul>
                        </div>
                        <div class="p-6 modal-info-publik modal-info-block hidden" data-slide="1">
                            <div class="flex flex-col items-start">
                                <div class="bg-blue-600 text-white px-4 py-2 rounded-lg mb-3">
                                    <h3 class="text-2xl font-bold text-center">Loket Pelayanan 1</h3>
                                </div>
                                <div class="inline-block bg-blue-100 border border-blue-300 px-3 py-2 rounded-lg mb-3">
                                    <p class="text-gray-700 text-sm mb-1">
                                        <span class="font-bold">Ukuran :</span> 40 sqm
                                    </p>
                                    <p class="text-gray-700 text-sm">
                                        <span class="font-bold">Kapasitas :</span> 10 guests
                                    </p>
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm mb-3 modal-info-desc">Mencari tempat pertemuan berukuran kecil dan menengah tidak akan sulit karena Loket Pelayanan 1 telah mempresentasikannya kepada Anda. Sempurna untuk acara formal maupun gathering dan reuni.</p>
                            <p class="text-gray-600 text-sm mb-3">Loket Pelayanan 1<br>Dimensi ruangan 40 m2</p>
                            <ul class="modal-info-list">
                                <li>Terletak di lantai 1</li>
                                <li>Akses langsung menuju pintu masuk utama gedung</li>
                                <li>Teater set up menampung 10 orang</li>
                                <li>Classroom set up menampung 8 orang</li>
                                <li>U shape set up menampung 6 orang</li>
                                <li>Boardroom set up menampung 6 orang</li>
                                <li>Round table set up menampung 8 orang</li>
                            </ul>
                        </div>
                        <div class="p-6 modal-info-publik modal-info-block hidden" data-slide="2">
                            <div class="flex flex-col items-start">
                                <div class="bg-blue-600 text-white px-4 py-2 rounded-lg mb-3">
                                    <h3 class="text-2xl font-bold text-center">Loket Pelayanan 2</h3>
                                </div>
                                <div class="inline-block bg-blue-100 border border-blue-300 px-3 py-2 rounded-lg mb-3">
                                    <p class="text-gray-700 text-sm mb-1">
                                        <span class="font-bold">Ukuran :</span> 40 sqm
                                    </p>
                                    <p class="text-gray-700 text-sm">
                                        <span class="font-bold">Kapasitas :</span> 10 guests
                                    </p>
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm mb-3 modal-info-desc">Mencari tempat pertemuan berukuran kecil dan menengah tidak akan sulit karena Loket Pelayanan 2 telah mempresentasikannya kepada Anda. Sempurna untuk acara formal maupun gathering dan reuni.</p>
                            <p class="text-gray-600 text-sm mb-3">Loket Pelayanan 2<br>Dimensi ruangan 40 m2</p>
                            <ul class="modal-info-list">
                                <li>Terletak di lantai 1</li>
                                <li>Akses langsung menuju pintu masuk utama gedung</li>
                                <li>Teater set up menampung 10 orang</li>
                                <li>Classroom set up menampung 8 orang</li>
                                <li>U shape set up menampung 6 orang</li>
                                <li>Boardroom set up menampung 6 orang</li>
                                <li>Round table set up menampung 8 orang</li>
                            </ul>
                        </div>
                        <div class="p-6 modal-info-publik modal-info-block hidden" data-slide="3">
                            <div class="flex flex-col items-start">
                                <div class="bg-blue-600 text-white px-4 py-2 rounded-lg mb-3">
                                    <h3 class="text-2xl font-bold text-center">Ruang Konsultasi</h3>
                                </div>
                                <div class="inline-block bg-blue-100 border border-blue-300 px-3 py-2 rounded-lg mb-3">
                                    <p class="text-gray-700 text-sm mb-1">
                                        <span class="font-bold">Ukuran :</span> 20 sqm
                                    </p>
                                    <p class="text-gray-700 text-sm">
                                        <span class="font-bold">Kapasitas :</span> 5 guests
                                    </p>
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm mb-3 modal-info-desc">Mencari tempat pertemuan berukuran kecil dan menengah tidak akan sulit karena Ruang Konsultasi telah mempresentasikannya kepada Anda. Sempurna untuk acara formal maupun gathering dan reuni.</p>
                            <p class="text-gray-600 text-sm mb-3">Ruang Konsultasi<br>Dimensi ruangan 20 m2</p>
                            <ul class="modal-info-list">
                                <li>Terletak di lantai 1</li>
                                <li>Akses langsung menuju pintu masuk utama gedung</li>
                                <li>Teater set up menampung 5 orang</li>
                                <li>Classroom set up menampung 4 orang</li>
                                <li>U shape set up menampung 3 orang</li>
                                <li>Boardroom set up menampung 4 orang</li>
                                <li>Round table set up menampung 4 orang</li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-4 border-t">
                        <button onclick="closeBuildingModal('publik')" class="w-full bg-blue-600 text-white py-3 rounded-xl font-bold hover:bg-blue-700 transition">Tutup</button>
                    </div>
                </div>
            </div>

            <!-- fasilitas -->
            <!-- Modal Kesehatan -->
            <div id="modalKesehatan" class="hidden fixed inset-0 z-50 modal-overlay flex items-center justify-center p-4">
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
                        <img src="https://via.placeholder.com/600x400?text=Klinik+Kesehatan" alt="Kesehatan" class="w-full rounded-lg mb-6">
                        <h3 class="text-2xl font-bold text-blue-600 mb-4">Fasilitas Kesehatan Terlengkap</h3>
                        <p class="text-gray-700 mb-6">Klinik kesehatan kami dilengkapi dengan peralatan medis modern dan tim profesional yang berpengalaman untuk memberikan pelayanan kesehatan terbaik.</p>
                        
                        <h4 class="text-xl font-bold text-gray-800 mb-3">Alat Medis yang Tersedia:</h4>
                        <ul class="grid grid-cols-2 gap-3 mb-6">
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> CT Scan</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> X-Ray Digital</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> USG 4D</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> EKG</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Lab Darah Otomatis</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Alat Vakum</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Monitor Pasien 24 Jam</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Defibrillator</li>
                        </ul>

                        <h4 class="text-xl font-bold text-gray-800 mb-3">Layanan Tersedia:</h4>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Pemeriksaan Umum</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Layanan Darurat 24 Jam</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Program Vaksinasi</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Konsultasi Spesialis</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Pemeriksaan Laboratorium</li>
                        </ul>

                        <button onclick="closeModal('kesehatan')" class="w-full bg-blue-600 text-white py-3 rounded-lg font-bold hover:bg-blue-700 transition">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal Perpustakaan -->
            <div id="modalPerpustakaan" class="hidden fixed inset-0 z-50 modal-overlay flex items-center justify-center p-4">
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
                        <img src="https://via.placeholder.com/600x400?text=Perpustakaan" alt="Perpustakaan" class="w-full rounded-lg mb-6">
                        <h3 class="text-2xl font-bold text-blue-600 mb-4">Perpustakaan Modern & Nyaman</h3>
                        <p class="text-gray-700 mb-6">Perpustakaan kami menyediakan koleksi buku lengkap dari berbagai bidang ilmu dengan suasana belajar yang nyaman dan mendukung.</p>
                        
                        <h4 class="text-xl font-bold text-gray-800 mb-3">Koleksi Tersedia:</h4>
                        <ul class="grid grid-cols-2 gap-3 mb-6">
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Buku Fiksi (5.000+)</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Buku Non-Fiksi (8.000+)</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Referensi (3.000+)</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> E-Book Digital</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Jurnal Ilmiah</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Media Audiovisual</li>
                        </ul>

                        <h4 class="text-xl font-bold text-gray-800 mb-3">Fasilitas:</h4>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Ruang Baca Nyaman dengan AC</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Area Diskusi Kelompok</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Komputer untuk Penelitian</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> WiFi Gratis</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Sistem Peminjaman Digital</li>
                        </ul>

                        <button onclick="closeModal('perpustakaan')" class="w-full bg-blue-600 text-white py-3 rounded-lg font-bold hover:bg-blue-700 transition">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal Kantin -->
            <div id="modalKantin" class="hidden fixed inset-0 z-50 modal-overlay flex items-center justify-center p-4">
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
                        <img src="https://via.placeholder.com/600x400?text=Kantin+Modern" alt="Kantin" class="w-full rounded-lg mb-6">
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

                        <button onclick="closeModal('kantin')" class="w-full bg-blue-600 text-white py-3 rounded-lg font-bold hover:bg-blue-700 transition">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal Parkir -->
            <div id="modalParkir" class="hidden fixed inset-0 z-50 modal-overlay flex items-center justify-center p-4">
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
                        <img src="https://via.placeholder.com/600x400?text=Lahan+Parkir" alt="Parkir" class="w-full rounded-lg mb-6">
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

                        <button onclick="closeModal('parkir')" class="w-full bg-blue-600 text-white py-3 rounded-lg font-bold hover:bg-blue-700 transition">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal Lab Komputer -->
            <div id="modalLab" class="hidden fixed inset-0 z-50 modal-overlay flex items-center justify-center p-4">
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
                        <img src="https://via.placeholder.com/600x400?text=Lab+Komputer" alt="Lab Komputer" class="w-full rounded-lg mb-6">
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

                        <button onclick="closeModal('lab')" class="w-full bg-blue-600 text-white py-3 rounded-lg font-bold hover:bg-blue-700 transition">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal Mushola -->
            <div id="modalMushola" class="hidden fixed inset-0 z-50 modal-overlay flex items-center justify-center p-4">
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
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Ruang sholat terpisah putra & putri</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Karpet dan sajadah bersih</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Tempat wudhu representatif</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Mukena & sarung tersedia</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> AC & ventilasi udara baik</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Jadwal sholat dan pengumuman digital</li>
                        </ul>

                        <h4 class="text-xl font-bold text-gray-800 mb-3">Kenyamanan Tambahan:</h4>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Pencahayaan lembut dan suasana tenang</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Rak penyimpanan alas kaki rapi</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Akses mudah dari area utama gedung</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Kebersihan terjaga dengan petugas rutin</li>
                        </ul>

                        <button onclick="closeModal('mushola')" class="w-full bg-blue-600 text-white py-3 rounded-lg font-bold hover:bg-blue-700 transition">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal Transportasi -->
            <div id="modalTransportasi" class="hidden fixed inset-0 z-50 modal-overlay flex items-center justify-center p-4">
                <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto modal-panel">
                    <div class="sticky top-0 bg-white border-b flex justify-between items-center p-6">
                        <h2 class="text-3xl font-bold text-blue-600 flex items-center gap-3">
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-blue-50 text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M19 17H5a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h14l2 4v4a2 2 0 0 1-2 2z"/>
                                    <circle cx="7.5" cy="17" r="1.5"/>
                                    <circle cx="16.5" cy="17" r="1.5"/>
                                    <path d="M3 9h18"/>
                                </svg>
                            </span>
                            <span>Transportasi</span>
                        </h2>
                        <button onclick="closeModal('transportasi')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
                    </div>
                    <div class="p-6">
                        <img src="https://via.placeholder.com/600x400?text=Layanan+Transportasi" alt="Transportasi" class="w-full rounded-lg mb-6">
                        <h3 class="text-2xl font-bold text-blue-600 mb-4">Layanan Transportasi Terpadu</h3>
                        <p class="text-gray-700 mb-6">Layanan transportasi kami memberikan kemudahan akses dengan berbagai pilihan moda transportasi yang terintegrasi dan nyaman.</p>
                        
                        <h4 class="text-xl font-bold text-gray-800 mb-3">Layanan Shuttle:</h4>
                        <ul class="grid grid-cols-2 gap-3 mb-6">
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Shuttle Pagi & Sore</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> 30 Unit Bus Modern</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> AC & WiFi Gratis</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Rute Coverage Luas</li>
                        </ul>

                        <h4 class="text-xl font-bold text-gray-800 mb-3">Akses Transportasi Publik:</h4>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Stasiun Kereta Jarak 500m</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Terminal Bus Kota Dekat</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Halte Busway Terdekat 200m</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Tarif Shuttle Terjangkau</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Aplikasi Mobile Booking</li>
                        </ul>

                        <button onclick="closeModal('transportasi')" class="w-full bg-blue-600 text-white py-3 rounded-lg font-bold hover:bg-blue-700 transition">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal Keamanan -->
            <div id="modalKeamanan" class="hidden fixed inset-0 z-50 modal-overlay flex items-center justify-center p-4">
                <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto modal-panel">
                    <div class="sticky top-0 bg-white border-b flex justify-between items-center p-6">
                        <h2 class="text-3xl font-bold text-blue-600 flex items-center gap-3">
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-blue-50 text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                    <path d="m9 12 2 2 4-4"/>
                                </svg>
                            </span>
                            <span>Keamanan</span>
                        </h2>
                        <button onclick="closeModal('keamanan')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
                    </div>
                    <div class="p-6">
                        <img src="https://via.placeholder.com/600x400?text=Sistem+Keamanan" alt="Keamanan" class="w-full rounded-lg mb-6">
                        <h3 class="text-2xl font-bold text-blue-600 mb-4">Sistem Keamanan Berlapis</h3>
                        <p class="text-gray-700 mb-6">Sistem keamanan kami menggunakan teknologi terkini dengan monitoring 24 jam untuk menjamin keamanan dan kenyamanan semua pengguna.</p>
                        
                        <h4 class="text-xl font-bold text-gray-800 mb-3">Peralatan Keamanan:</h4>
                        <ul class="grid grid-cols-2 gap-3 mb-6">
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> CCTV 4K (120 Unit)</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Recording 24 Jam</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Sistem Alarm Otomatis</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Metal Detector</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Access Card System</li>
                            <li class="flex items-center text-gray-700"><span class="text-blue-600 mr-2">✓</span> Biometric Fingerprint</li>
                        </ul>

                        <h4 class="text-xl font-bold text-gray-800 mb-3">Tim & Layanan Keamanan:</h4>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Petugas Keamanan 24/7 Berjaga</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Tim Response Cepat Emergency</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Asuransi Keamanan Penuh</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Koordinasi dengan Kepolisian</li>
                            <li class="flex items-start text-gray-700"><span class="text-blue-600 mr-2">•</span> Program Keselamatan Berkala</li>
                        </ul>

                        <button onclick="closeModal('keamanan')" class="w-full bg-blue-600 text-white py-3 rounded-lg font-bold hover:bg-blue-700 transition">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>
        <!-- /Modal -->

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
            // Swiper (Hero)
            const swiper = new window.Swiper('.mySwiper', {
                effect: 'fade',
                speed: 1000,
                autoplay: { delay: 5000, disableOnInteraction: true },
                loop: true,
                slidesPerView: 1,
                allowTouchMove: true,
            });
            // swiper Building
            const swiper2 = new window.Swiper(".mySwiper2", {
                grabCursor: true,
                centeredSlides: true,
                loop: true,
                slidesPerView: 1,
                spaceBetween: 16,
                breakpoints: {
                    640: { slidesPerView: 1.1, spaceBetween: 20 },
                    768: { slidesPerView: 1.3, spaceBetween: 24 },
                    1024: { slidesPerView: 1.6, spaceBetween: 28 },
                    1280: { slidesPerView: 2, spaceBetween: 32 },
                },
                // use coverflow for 3d effect if desired, otherwise remove
                effect: "coverflow",
                coverflowEffect: {
                    rotate: 20,
                    stretch: 0,
                    depth: 120,
                    modifier: 1,
                    slideShadows: false,
                },
                navigation: {
                    nextEl: ".swiper2 .swiper-button-next",
                    prevEl: ".swiper2 .swiper-button-prev",
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
                    panel.classList.toggle('hidden', parseInt(panel.dataset.slide) !== realIndex);
                });
            }

            // Swiper (Modal Gedung) - full-image style, fraction pagination, 3s autoplay
            const modalSwipers = {
                RuanganUtama: new window.Swiper('#swiperRuanganUtama', {
                    loop: true,
                    slidesPerView: 1.2,
                    centeredSlides: true,
                    spaceBetween: 24,
                    autoplay: { delay: 3000, disableOnInteraction: true },
                    pagination: { el: '#swiperRuanganUtama .swiper-pagination', type: 'fraction' },
                    navigation: {
                        nextEl: '#swiperRuanganUtama .swiper-button-next',
                        prevEl: '#swiperRuanganUtama .swiper-button-prev',
                    },
                    on: {
                        realIndexChange: function(swiper) {
                                syncModalContent(document.querySelectorAll('.modal-info-utama'), swiper.realIndex);
                        }
                    }
                }),
                RuanganPendukung: new window.Swiper('#swiperRuanganPendukung', {
                    loop: true,
                    slidesPerView: 1.2,
                    centeredSlides: true,
                    spaceBetween: 24,
                    autoplay: { delay: 3000, disableOnInteraction: true },
                    pagination: { el: '#swiperRuanganPendukung .swiper-pagination', type: 'fraction' },
                    navigation: {
                        nextEl: '#swiperRuanganPendukung .swiper-button-next',
                        prevEl: '#swiperRuanganPendukung .swiper-button-prev',
                    },
                    on: {
                        realIndexChange: function(swiper) {
                            syncModalContent(document.querySelectorAll('.modal-info-pendukung'), swiper.realIndex);
                        }
                    }
                }),
                RuanganPublik: new window.Swiper('#swiperRuanganPublik', {
                    loop: true,
                    slidesPerView: 1.2,
                    centeredSlides: true,
                    spaceBetween: 24,
                    autoplay: { delay: 3000, disableOnInteraction: true },
                    pagination: { el: '#swiperRuanganPublik .swiper-pagination', type: 'fraction' },
                    navigation: {
                        nextEl: '#swiperRuanganPublik .swiper-button-next',
                        prevEl: '#swiperRuanganPublik .swiper-button-prev',
                    },
                    on: {
                        realIndexChange: function(swiper) {
                            syncModalContent(document.querySelectorAll('.modal-info-publik'), swiper.realIndex);
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
                    'utama': 'modalUtama',
                    'pendukung': 'modalPendukung',
                    'publik': 'modalPublik'
                };
                const modal = document.getElementById(modalIds[building]);
                if (modal) {
                    modal.classList.remove('hidden');
                    document.body.style.overflow = 'hidden';
                    // ensure swiper updates after modal becomes visible
                    const key = 'Ruangan' + building.charAt(0).toUpperCase() + building.slice(1);
                    if (modalSwipers[key] && typeof modalSwipers[key].update === 'function') {
                        setTimeout(() => modalSwipers[key].update(), 50);
                    }
                }
            }

            function closeBuildingModal(building) {
                const modalIds = {
                    'utama': 'modalUtama',
                    'pendukung': 'modalPendukung',
                    'publik': 'modalPublik'
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

                const openLightbox = (src, alt) => {
                    lightboxImg.src = src;
                    lightboxImg.alt = alt || '';
                    lightbox.classList.remove('hidden');
                    requestAnimationFrame(() => {
                        lightbox.classList.add('flex');
                        lightboxImg.classList.remove('opacity-0', 'scale-95');
                        lightboxImg.classList.add('opacity-100', 'scale-100');
                    });
                };

                const closeLightbox = () => {
                    lightboxImg.classList.add('opacity-0', 'scale-95');
                    lightboxImg.classList.remove('opacity-100', 'scale-100');
                    setTimeout(() => {
                        lightbox.classList.add('hidden');
                        lightbox.classList.remove('flex');
                        lightboxImg.src = '';
                    }, 200);
                };

                items.forEach((item) => {
                    item.addEventListener('click', () => {
                        const src = item.getAttribute('data-img');
                        const alt = item.getAttribute('data-alt');
                        if (!src) return;
                        openLightbox(src, alt);
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