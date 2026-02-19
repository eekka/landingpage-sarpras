<!doctype html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?= base_url('css/style.css') ?>" rel="stylesheet">
  <!-- Swiper CSS --> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>SarPras - Sarana Prasarana</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap');
    .scroll-animation {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        will-change: opacity, transform;
    }
    .scroll-animation.inactive {
        opacity: 0;
        transform: translateY(40px);
    }
    .scroll-animation.active {
        opacity: 1;
        transform: translateY(0) !important;
    }
    /* Navigation Styles */
    .nav-link {
        position: relative;
    }
    .nav-link::after {
        content: '';
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

    /* Mobile Menu Styles */
    .mobile-menu {
        display: none;
    }
    .mobile-menu.active {
        display: block;
    }

    /* Animation Styles */
    .slide-in {
        animation: slideIn 1s ease-out forwards;
    }
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .fade-in-up {
        opacity: 0;
        animation: fadeInUp 1s ease-out forwards;
    }
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .float-animation {
        animation: float 3s ease-in-out infinite;
    }
    @keyframes float {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-15px);
        }
    }
    .carousel-item {
            height: 100vh;
            min-height: 300px;
        }
        .carousel-item img {
            filter: brightness(0.6);
            object-fit: cover;
            height: 100%;
            width: 100%;
        }
        .carousel-fade .carousel-item {
            opacity: 0;
            transition-duration: 0.4s;
            transition-property: opacity;
        }
        .carousel-fade .carousel-item.active {
            opacity: 1;
        }

        /* Floating Animation untuk Scroll Indicator */
        @keyframes float {
            0%, 100% { transform: translateY(0) translateX(-50%); }
            50% { transform: translateY(-15px) translateX(-50%); }
        }
        .float-animation {
            animation: float 2s ease-in-out infinite;
        }

        /* Utilitas tambahan */
        .z-20 { z-index: 20; }
        .pointer-events-none { pointer-events: none; }
        .pointer-events-auto { pointer-events: auto; }

    @keyframes flowing-ribbon {
        from { stroke-dashoffset: 1000; }
        to { stroke-dashoffset: 0; }
    }
    
    .animate-ribbon {
        stroke-dasharray: 500;
        animation: flowing-ribbon 15s linear infinite;
    }

    .ribbon-container {
        pointer-events: none;
        position: fixed;
        inset: 0;
        z-index: -1;
        background: radial-gradient(circle at top right, #f0f9ff 0%, #ffffff 100%);
    }

        .section-title {
            font-family: 'Poppins', ui-sans-serif, system-ui, sans-serif;
            letter-spacing: 0.5px;
        }
        .bounce-3s {
            animation: bounceTitle 3s ease-in-out infinite;
        }
        @keyframes bounceTitle {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }
</style>
<body class="bg-white">
    <!--Background Ribbons-->
    <div class="ribbon-container p-4">
        <svg class="w-full h-full absolute inset-0" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" viewBox="0 0 800 600">
            <!-- Animated gradient ribbons -->
            <defs>
                <linearGradient id="ribbonGrad1" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" style="stop-color:#1e40af;stop-opacity:0.3" />
                    <stop offset="100%" style="stop-color:#3b82f6;stop-opacity:0.1" />
                </linearGradient>
                <linearGradient id="ribbonGrad2" x1="0%" y1="100%" x2="100%" y2="0%">
                    <stop offset="0%" style="stop-color:#60a5fa;stop-opacity:0.25" />
                    <stop offset="100%" style="stop-color:#3b82f6;stop-opacity:0.05" />
                </linearGradient>
                <linearGradient id="ribbonGrad3" x1="100%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" style="stop-color:#93c5fd;stop-opacity:0.2" />
                    <stop offset="100%" style="stop-color:#3b82f6;stop-opacity:0.1" />
                </linearGradient>
            </defs>
            <!-- Background shapes -->
            <circle cx="100" cy="100" r="150" fill="url(#ribbonGrad1)" opacity="" />
            <circle cx="700" cy="500" r="200" fill="url(#ribbonGrad2)" opacity="" />
            <rect width="800" height="600" fill="url(#ribbonGrad1)" opacity="" />
            
            <!-- Animated flowing lines -->
            <path class="animate-ribbon" fill="none" stroke="#3b82f6" stroke-width="3" d="M0,100 C200,200 600,0 800,100 L800,600 L0,600 Z" opacity="" />
            <path class="animate-ribbon" fill="none" stroke="#60a5fa" stroke-width="2" d="M0,200 C200,300 600,100 800,200 L800,600 L0,600 Z" opacity="" /> 
            <path class="animate-ribbon" fill="none" stroke="#93c5fd" stroke-width="2" d="M111,333 C255,444 777,222 888,333 L888,666 L111,666 Z" opacity="" />
            <path class="animate-ribbon" fill="none" stroke="">
            <!-- Decorative dots -->
            <g opacity="0.2">
                <circle cx="150" cy="150" r="4" fill="#3b82f6" />
                <circle cx="300" cy="250" r="3" fill="#60a5fa" />
                <circle cx="600" cy="100" r="4" fill="#1e40af" />
                <circle cx="700" cy="400" r="3" fill="#3b82f6" />
            </g>
        </svg>
    </div>
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50 backdrop-blur-lg bg-opacity-90">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center gap-3 slide-in">
                    <a href="#home" class="flex items-center group">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center mr-3 group-hover:scale-110 transition-transform">
                            <img src="<?= base_url('images/logo-balatkop.jpeg') ?>" alt="Logo SIPENSAR" class="w-12 h-12 mr-2 inline-block rounded-full">
                        </div>
                        <h2 class="text-2xl text-blue-600 font-bold gradient-text">SarPras BalatKop</h2>
                    </a>
                </div>
                
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="nav-link text-gray-700 hover:text-blue-600 font-medium transition">Beranda</a>
                    <a href="#tentang" class="nav-link text-gray-700 hover:text-blue-600 font-medium transition">Tentang</a>
                    <a href="#fasilitas" class="nav-link text-gray-700 hover:text-blue-600 font-medium transition">Fasilitas</a>
                    <a href="#galeri" class="nav-link text-gray-700 hover:text-blue-600 font-medium transition">Galeri</a>
                    <a href="#kontak" class="nav-link text-gray-700 hover:text-blue-600 font-medium transition">Kontak</a>
                </div>

                <button onclick="toggleMenu()" class="md:hidden p-2 rounded-lg hover:bg-gray-100 transition">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobileMenu" class="mobile-menu md:hidden pb-4">
                <a href="#home" class="block py-2 text-gray-700 hover:text-blue-600 transition">Beranda</a>
                <a href="#tentang" class="block py-2 text-gray-700 hover:text-blue-600 transition">Tentang</a>
                <a href="#fasilitas" class="block py-2 text-gray-700 hover:text-blue-600 transition">Fasilitas</a>
                <a href="#galeri" class="block py-2 text-gray-700 hover:text-blue-600 transition">Galeri</a>
                <a href="#kontak" class="block py-2 text-gray-700 hover:text-blue-600 transition">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section with Carousel -->
    <section id="home" class="relative h-screen overflow-hidden">   
        <div id="heroCarousel" class="carousel slide absolute inset-0" data-ride="carousel" data-interval="5000">
            <!-- Indicators -->
            <ol class="carousel-indicators z-20">
                <li data-target="#heroCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#heroCarousel" data-slide-to="1"></li>
                <li data-target="#heroCarousel" data-slide-to="2"></li>
                <li data-target="#heroCarousel" data-slide-to="3"></li>
            </ol>
            <!-- Slides -->
            <div class="carousel-inner h-full">
                <div class="carousel-item active h-full">
                <img src="<?= base_url('images/bg-balatkop1.jpeg') ?>" class="d-block w-full h-full object-cover" alt="First Slide">
                <div class="absolute inset-0 bg-linear-to-r from-blue-900/60 via-blue-800/50 to-transparent z-10"></div>
                <div class="absolute inset-0 flex items-center justify-center z-20 pointer-events-auto">
                    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-left">
                    <!-- Slide 1 -->
                    <div class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-3xl p-8 md:p-12 shadow-2xl">
                        <h2 class="text-5xl md:text-7xl font-bold mb-6 fade-in-up text-white drop-shadow-lg leading-tight">
                        <span class="bg-linear-to-r from-yellow-300 via-yellow-200 to-blue-200 bg-clip-text text-transparent">
                            Sarana dan Prasarana
                        </span>
                        <br>
                        <span class="text-white">BalatKop UKM Jateng</span>
                        </h2>
                        <div class="w-24 h-1 bg-linear-to-r from-yellow-400 to-blue-400 rounded-full mb-8"></div>
                        <p class="text-lg md:text-xl mb-8 text-gray-100 fade-in-up drop-shadow-md leading-relaxed" style="animation-delay: 0.2s">
                        Mendukung kelancaran operasional instansi pemerintah dengan fasilitas modern dan lengkap
                        </p>
                        <button onclick="document.getElementById('tentang').scrollIntoView({behavior: 'smooth'})" class="bg-linear-to-r from-yellow-400 to-yellow-500 hover:from-yellow-500 hover:to-yellow-600 text-blue-900 px-10 py-4 rounded-full font-bold hover:scale-105 transition-all shadow-2xl fade-in-up backdrop-blur-sm" style="animation-delay: 0.4s">
                        Jelajahi Sekarang →
                        </button>
                    </div>
                    </div>
                </div>
                </div>

                <div class="carousel-item h-full">
                <img src="<?= base_url('images/bg-balatkop2.jpeg') ?>" class="d-block w-full h-full object-cover" alt="Ruang Kelas">
                <div class="absolute inset-0 bg-linear-to-r from-purple-900/60 via-purple-800/50 to-transparent z-10"></div>
                <div class="absolute inset-0 flex items-center justify-center z-20 pointer-events-auto">
                    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-left">
                    <div class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-3xl p-8 md:p-12 shadow-2xl">
                        <h2 class="text-5xl md:text-6xl font-bold mb-6 text-white drop-shadow-lg">Ruang Kelas Modern</h2>
                        <div class="w-24 h-1 bg-linear-to-r from-purple-400 to-pink-400 rounded-full mb-8"></div>
                        <p class="text-lg md:text-xl mb-8 text-gray-100 drop-shadow-md leading-relaxed">
                        Fasilitas pembelajaran dengan teknologi terkini dan kenyamanan maksimal
                        </p>
                        <button onclick="document.getElementById('fasilitas').scrollIntoView({behavior: 'smooth'})" class="bg-gradient-to-r from-purple-400 to-pink-500 hover:from-purple-500 hover:to-pink-600 text-white px-10 py-4 rounded-full font-bold hover:scale-105 transition-all shadow-2xl backdrop-blur-sm">
                        Lihat Fasilitas →
                        </button>
                    </div>
                    </div>
                </div>
                </div>

                <div class="carousel-item h-full">
                <img src="<?= base_url('images/bg-balatkop3.jpeg') ?>" class="d-block w-full h-full object-cover" alt="Ruang Rapat">
                <div class="absolute inset-0 bg-linear-to-r from-emerald-900/60 via-emerald-800/50 to-transparent z-10"></div>
                <div class="absolute inset-0 flex items-center justify-center z-20 pointer-events-auto">
                    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-left">
                    <div class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-3xl p-8 md:p-12 shadow-2xl">
                        <h2 class="text-5xl md:text-6xl font-bold mb-6 text-white drop-shadow-lg">Ruang Rapat Profesional</h2>
                        <div class="w-24 h-1 bg-linear-to-r from-emerald-400 to-cyan-400 rounded-full mb-8"></div>
                        <p class="text-lg md:text-xl mb-8 text-gray-100 drop-shadow-md leading-relaxed">
                        Tempat ideal untuk diskusi dan kolaborasi dengan perlengkapan lengkap
                        </p>
                        <button onclick="document.getElementById('tentang').scrollIntoView({behavior: 'smooth'})" class="bg-gradient-to-r from-emerald-400 to-cyan-500 hover:from-emerald-500 hover:to-cyan-600 text-white px-10 py-4 rounded-full font-bold hover:scale-105 transition-all shadow-2xl backdrop-blur-sm">
                        Pelajari Lebih Lanjut →
                        </button>
                    </div>
                    </div>
                </div>
                </div>

                <div class="carousel-item h-full">
                <img src="<?= base_url('images/bg-balatkop4.jpeg') ?>" class="d-block w-full h-full object-cover" alt="Aula">
                <div class="absolute inset-0 bg-linear-to-r from-orange-900/60 via-orange-800/50 to-transparent z-10"></div>
                <div class="absolute inset-0 flex items-center justify-center z-20 pointer-events-auto">
                    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-left">
                    <div class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-3xl p-8 md:p-12 shadow-2xl">
                        <h2 class="text-5xl md:text-6xl font-bold mb-6 text-white drop-shadow-lg">Aula Serbaguna</h2>
                        <div class="w-24 h-1 bg-linear-to-r from-orange-400 to-red-400 rounded-full mb-8"></div>
                        <p class="text-lg md:text-xl mb-8 text-gray-100 drop-shadow-md leading-relaxed">
                        Ruang multifungsi dengan kapasitas besar untuk berbagai acara
                        </p>
                        <button onclick="document.getElementById('galeri').scrollIntoView({behavior: 'smooth'})" class="bg-gradient-to-r from-orange-400 to-red-500 hover:from-orange-500 hover:to-red-600 text-white px-10 py-4 rounded-full font-bold hover:scale-105 transition-all shadow-2xl backdrop-blur-sm">
                        Jelajahi Galeri →
                        </button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- Controls -->
            <a class="carousel-control-prev z-20" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next z-20" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 float-animation z-20">
            <svg class="w-6 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </section>

    <!-- About Section -->
    <section id="tentang py=20" >
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-white rounded-3xl shadow p-8 mt-6">
            <p class="md:text-4xl text-center mb-16 text-blue-600 section-title bounce-3s">Tentang Sarana Prasarana Kami</p>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
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
                            <div class="text-3xl font-bold text-blue-600">5000+</div>
                            <div class="text-gray-600">m² Area</div>
                        </div>
                        <div class="flex-1 bg-green-50 p-6 rounded-xl">
                            <div class="text-3xl font-bold text-green-600">24/7</div>
                            <div class="text-gray-600">Keamanan</div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute inset-0 bg-linear-to-br from-blue-400 to-purple-600 rounded-2xl transform rotate-3"></div>
                    <div class="relative bg-gray-300 rounded-2xl overflow-hidden shadow-2xl transform -rotate-1 hover:rotate-0 transition-transform h-96 flex items-center justify-center">
                        <img src="<?= base_url('images/bg-balatkop1.jpeg') ?>" alt="About Image" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Buildings Section -->
    <section class="py-20 ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-4xl md:text-4xl font-bold text-center mb-16 text-blue-600 section-title bounce-3s">Gedung dan Ruangan</>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Building Cards -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover hover:shadow-2xl transition-shadow text-left">
                    <div class="h-56 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                        <span class="text-white text-6xl">🏢</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-blue-600 mb-4">Gedung Utama</h3>
                        <div class="space-y-2 mb-4">
                            <div class="flex items-center text-gray-700">
                                <span class="mr-2">📏</span> Luas: 5.000 m²
                            </div>
                            <div class="flex items-center text-gray-700">
                                <span class="mr-2">🏗️</span> 10 Lantai
                            </div>
                            <div class="flex items-center text-gray-700">
                                <span class="mr-2">❄️</span> Ruangan ber-AC
                            </div>
                            <div class="flex items-center text-gray-700">
                                <span class="mr-2">🔒</span> Keamanan 24/7
                            </div>
                        </div>
                        <p class="text-gray-600">Bangunan utama dengan fasilitas lengkap dan modern</p>
                        <button onclick="openBuildingModal('utama')" class="mt-6 w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">Lihat Detail</button>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover hover:shadow-2xl transition-shadow text-left">
                    <div class="h-56 bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center">
                        <span class="text-white text-6xl">🏛️</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-green-600 mb-4">Gedung Pendukung</h3>
                        <div class="space-y-2 mb-4">
                            <div class="flex items-center text-gray-700">
                                <span class="mr-2">📏</span> Luas: 2.500 m²
                            </div>
                            <div class="flex items-center text-gray-700">
                                <span class="mr-2">🏗️</span> 3 Lantai
                            </div>
                            <div class="flex items-center text-gray-700">
                                <span class="mr-2">💼</span> Ruang meeting
                            </div>
                            <div class="flex items-center text-gray-700">
                                <span class="mr-2">📚</span> Perpustakaan
                            </div>
                        </div>
                        <p class="text-gray-600">Gedung pendukung dengan berbagai fungsi</p>
                        <button onclick="openBuildingModal('pendukung')" class="mt-6 w-full bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700 transition">Lihat Detail</button>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover hover:shadow-2xl transition-shadow text-left">
                    <div class="h-56 bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center">
                        <span class="text-white text-6xl">🏪</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-purple-600 mb-4">Layanan Publik</h3>
                        <div class="space-y-2 mb-4">
                            <div class="flex items-center text-gray-700">
                                <span class="mr-2">📏</span> Luas: 1.500 m²
                            </div>
                            <div class="flex items-center text-gray-700">
                                <span class="mr-2">🏗️</span> 1 Lantai
                            </div>
                            <div class="flex items-center text-gray-700">
                                <span class="mr-2">🪑</span> Ruang tunggu nyaman
                            </div>
                            <div class="flex items-center text-gray-700">
                                <span class="mr-2">♿</span> Akses mudah
                            </div>
                        </div>
                        <p class="text-gray-600">Gedung khusus untuk melayani masyarakat umum</p>
                        <button onclick="openBuildingModal('publik')" class="mt-6 w-full bg-purple-600 text-white py-3 rounded-lg font-semibold hover:bg-purple-700 transition">Lihat Detail</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Facilities Section -->
    <section id="fasilitas" class="py-20 ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-4xl font-bold text-center mb-12 text-blue-600 section-title bounce-3s">Fasilitas Lengkap</>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Fasilitas Card - Kesehatan -->
                <button onclick="openModal('kesehatan')" class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg p-6 hover:shadow-lg transition cursor-pointer text-left">
                    <div class="text-3xl mb-4">🏥</div>
                    <h3 class="text-xl font-bold text-blue-600 mb-2">Kesehatan</h3>
                    <p class="text-gray-700 text-sm">Klinik kesehatan lengkap dengan dokter dan perawat profesional</p>
                </button>

                <!-- Fasilitas Card - Perpustakaan -->
                <button onclick="openModal('perpustakaan')" class="bg-gradient-to-br from-green-50 to-green-100 rounded-lg p-6 hover:shadow-lg transition cursor-pointer text-left">
                    <div class="text-3xl mb-4">📚</div>
                    <h3 class="text-xl font-bold text-green-600 mb-2">Perpustakaan</h3>
                    <p class="text-gray-700 text-sm">Koleksi buku lengkap dengan ruang baca nyaman</p>
                </button>

                <!-- Fasilitas Card - Kantin -->
                <button onclick="openModal('kantin')" class="bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-lg p-6 hover:shadow-lg transition cursor-pointer text-left">
                    <div class="text-3xl mb-4">🍽️</div>
                    <h3 class="text-xl font-bold text-yellow-600 mb-2">Kantin</h3>
                    <p class="text-gray-700 text-sm">Kantin modern dengan menu variatif dan higienis</p>
                </button>

                <!-- Fasilitas Card - Parkir -->
                <button onclick="openModal('parkir')" class="bg-gradient-to-br from-red-50 to-red-100 rounded-lg p-6 hover:shadow-lg transition cursor-pointer text-left">
                    <div class="text-3xl mb-4">🅿️</div>
                    <h3 class="text-xl font-bold text-red-600 mb-2">Parkir</h3>
                    <p class="text-gray-700 text-sm">Lahan parkir luas dengan sistem keamanan modern</p>
                </button>

                <button onclick="openModal('lab')" class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-lg p-6 hover:shadow-lg transition cursor-pointer text-left">
                    <div class="text-3xl mb-4">💻</div>
                    <h3 class="text-xl font-bold text-purple-600 mb-2">Lab Komputer</h3>
                    <p class="text-gray-700 text-sm">Laboratorium komputer dengan perangkat terkini</p>
                </button>
                <!-- Fasilitas Card - Olahraga -->
                <button onclick="openModal('olahraga')" class="bg-gradient-to-br from-pink-50 to-pink-100 rounded-lg p-6 hover:shadow-lg transition cursor-pointer text-left">
                    <div class="text-3xl mb-4">🏋️</div>
                    <h3 class="text-xl font-bold text-pink-600 mb-2">Olahraga</h3>
                    <p class="text-gray-700 text-sm">Fasilitas olahraga lengkap untuk kesehatan pengguna</p>
                </button>

                <!-- Fasilitas Card - Transportasi -->
                <button onclick="openModal('transportasi')" class="bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-lg p-6 hover:shadow-lg transition cursor-pointer text-left">
                    <div class="text-3xl mb-4">🚗</div>
                    <h3 class="text-xl font-bold text-indigo-600 mb-2">Transportasi</h3>
                    <p class="text-gray-700 text-sm">Shuttle service dan akses transportasi publik mudah</p>
                </button>

                <!-- Fasilitas Card - Keamanan -->
                <button onclick="openModal('keamanan')" class="bg-gradient-to-br from-teal-50 to-teal-100 rounded-lg p-6 hover:shadow-lg transition cursor-pointer text-left">
                    <div class="text-3xl mb-4">🔒</div>
                    <h3 class="text-xl font-bold text-teal-600 mb-2">Keamanan</h3>
                    <p class="text-gray-700 text-sm">Sistem keamanan berlapis dengan CCTV 24 jam</p>
                </button>
            </div>
        </div>
    </section>

    <!-- MODALS -->
    <!-- Modal Kesehatan -->
    <div id="modalKesehatan" class="hidden flex fixed inset-0 bg-linear-to-r from-blue-600/40 to-blue-800/40 backdrop-blur-sm z-40 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="sticky top-0 bg-white border-b flex justify-between items-center p-6">
                <h2 class="text-3xl font-bold text-blue-600">🏥 Kesehatan</h2>
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
    <div id="modalPerpustakaan" class="hidden flex fixed inset-0 bg-gradient-to-r from-blue-600/40 to-blue-800/40 backdrop-blur-sm z-40 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="sticky top-0 bg-white border-b flex justify-between items-center p-6">
                <h2 class="text-3xl font-bold text-green-600">📚 Perpustakaan</h2>
                <button onclick="closeModal('perpustakaan')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
            </div>
            <div class="p-6">
                <img src="https://via.placeholder.com/600x400?text=Perpustakaan" alt="Perpustakaan" class="w-full rounded-lg mb-6">
                <h3 class="text-2xl font-bold text-green-600 mb-4">Perpustakaan Modern & Nyaman</h3>
                <p class="text-gray-700 mb-6">Perpustakaan kami menyediakan koleksi buku lengkap dari berbagai bidang ilmu dengan suasana belajar yang nyaman dan mendukung.</p>
                
                <h4 class="text-xl font-bold text-gray-800 mb-3">Koleksi Tersedia:</h4>
                <ul class="grid grid-cols-2 gap-3 mb-6">
                    <li class="flex items-center text-gray-700"><span class="text-green-600 mr-2">✓</span> Buku Fiksi (5.000+)</li>
                    <li class="flex items-center text-gray-700"><span class="text-green-600 mr-2">✓</span> Buku Non-Fiksi (8.000+)</li>
                    <li class="flex items-center text-gray-700"><span class="text-green-600 mr-2">✓</span> Referensi (3.000+)</li>
                    <li class="flex items-center text-gray-700"><span class="text-green-600 mr-2">✓</span> E-Book Digital</li>
                    <li class="flex items-center text-gray-700"><span class="text-green-600 mr-2">✓</span> Jurnal Ilmiah</li>
                    <li class="flex items-center text-gray-700"><span class="text-green-600 mr-2">✓</span> Media Audiovisual</li>
                </ul>

                <h4 class="text-xl font-bold text-gray-800 mb-3">Fasilitas:</h4>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start text-gray-700"><span class="text-green-600 mr-2">•</span> Ruang Baca Nyaman dengan AC</li>
                    <li class="flex items-start text-gray-700"><span class="text-green-600 mr-2">•</span> Area Diskusi Kelompok</li>
                    <li class="flex items-start text-gray-700"><span class="text-green-600 mr-2">•</span> Komputer untuk Penelitian</li>
                    <li class="flex items-start text-gray-700"><span class="text-green-600 mr-2">•</span> WiFi Gratis</li>
                    <li class="flex items-start text-gray-700"><span class="text-green-600 mr-2">•</span> Sistem Peminjaman Digital</li>
                </ul>

                <button onclick="closeModal('perpustakaan')" class="w-full bg-green-600 text-white py-3 rounded-lg font-bold hover:bg-green-700 transition">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <!-- Modal Kantin -->
    <div id="modalKantin" class="hidden fixed inset-0 bg-gradient-to-r from-blue-600/40 to-blue-800/40 backdrop-blur-sm z-40 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="sticky top-0 bg-white border-b flex justify-between items-center p-6">
                <h2 class="text-3xl font-bold text-yellow-600">🍽️ Kantin</h2>
                <button onclick="closeModal('kantin')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
            </div>
            <div class="p-6">
                <img src="https://via.placeholder.com/600x400?text=Kantin+Modern" alt="Kantin" class="w-full rounded-lg mb-6">
                <h3 class="text-2xl font-bold text-yellow-600 mb-4">Kantin Modern & Higienis</h3>
                <p class="text-gray-700 mb-6">Kantin kami menawarkan menu makanan dan minuman variatif dengan jaminan kualitas, kebersihan, dan kesegaran bahan makanan terjamin.</p>
                
                <h4 class="text-xl font-bold text-gray-800 mb-3">Menu Tersedia:</h4>
                <ul class="grid grid-cols-2 gap-3 mb-6">
                    <li class="flex items-center text-gray-700"><span class="text-yellow-600 mr-2">✓</span> Nasi & Lauk Pauk</li>
                    <li class="flex items-center text-gray-700"><span class="text-yellow-600 mr-2">✓</span> Mie & Pasta</li>
                    <li class="flex items-center text-gray-700"><span class="text-yellow-600 mr-2">✓</span> Menu Vegetarian</li>
                    <li class="flex items-center text-gray-700"><span class="text-yellow-600 mr-2">✓</span> Makanan Ringan & Snack</li>
                    <li class="flex items-center text-gray-700"><span class="text-yellow-600 mr-2">✓</span> Minuman Segar</li>
                    <li class="flex items-center text-gray-700"><span class="text-yellow-600 mr-2">✓</span> Kopi & Teh Premium</li>
                </ul>

                <h4 class="text-xl font-bold text-gray-800 mb-3">Fasilitas:</h4>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start text-gray-700"><span class="text-yellow-600 mr-2">•</span> Tempat Duduk AC & Nyaman</li>
                    <li class="flex items-start text-gray-700"><span class="text-yellow-600 mr-2">•</span> Dapur Terstandar Internasional</li>
                    <li class="flex items-start text-gray-700"><span class="text-yellow-600 mr-2">•</span> Pembayaran Cash & Digital</li>
                    <li class="flex items-start text-gray-700"><span class="text-yellow-600 mr-2">•</span> Harga Terjangkau & Bersaing</li>
                    <li class="flex items-start text-gray-700"><span class="text-yellow-600 mr-2">•</span> Buka Setiap Hari Kerja</li>
                </ul>

                <button onclick="closeModal('kantin')" class="w-full bg-yellow-600 text-white py-3 rounded-lg font-bold hover:bg-yellow-700 transition">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <!-- Modal Parkir -->
    <div id="modalParkir" class="hidden fixed inset-0 bg-gradient-to-r from-blue-600/40 to-blue-800/40 backdrop-blur-sm z-40 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="sticky top-0 bg-white border-b flex justify-between items-center p-6">
                <h2 class="text-3xl font-bold text-red-600">🅿️ Parkir</h2>
                <button onclick="closeModal('parkir')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
            </div>
            <div class="p-6">
                <img src="https://via.placeholder.com/600x400?text=Lahan+Parkir" alt="Parkir" class="w-full rounded-lg mb-6">
                <h3 class="text-2xl font-bold text-red-600 mb-4">Lahan Parkir Luas & Aman</h3>
                <p class="text-gray-700 mb-6">Fasilitas parkir kami dirancang modern dengan sistem keamanan berlapis untuk menjamin kendaraan Anda aman dan terpantau 24 jam.</p>
                
                <h4 class="text-xl font-bold text-gray-800 mb-3">Kapasitas:</h4>
                <ul class="grid grid-cols-2 gap-3 mb-6">
                    <li class="flex items-center text-gray-700"><span class="text-red-600 mr-2">✓</span> Mobil: 500 Unit</li>
                    <li class="flex items-center text-gray-700"><span class="text-red-600 mr-2">✓</span> Motor: 800 Unit</li>
                    <li class="flex items-center text-gray-700"><span class="text-red-600 mr-2">✓</span> Bus: 20 Unit</li>
                    <li class="flex items-center text-gray-700"><span class="text-red-600 mr-2">✓</span> Tempat untuk Difabel</li>
                </ul>

                <h4 class="text-xl font-bold text-gray-800 mb-3">Fasilitas Keamanan:</h4>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start text-gray-700"><span class="text-red-600 mr-2">•</span> CCTV 24 Jam Full Coverage</li>
                    <li class="flex items-start text-gray-700"><span class="text-red-600 mr-2">•</span> Petugas Keamanan Berjaga</li>
                    <li class="flex items-start text-gray-700"><span class="text-red-600 mr-2">•</span> Sistem Gate Elektronik</li>
                    <li class="flex items-start text-gray-700"><span class="text-red-600 mr-2">•</span> Pencahayaan LED Terang</li>
                    <li class="flex items-start text-gray-700"><span class="text-red-600 mr-2">•</span> Tarif Terjangkau Harian/Bulanan</li>
                </ul>

                <button onclick="closeModal('parkir')" class="w-full bg-red-600 text-white py-3 rounded-lg font-bold hover:bg-red-700 transition">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <!-- Modal Lab Komputer -->
    <div id="modalLab" class="hidden fixed inset-0 bg-gradient-to-r from-blue-600/40 to-blue-800/40 backdrop-blur-sm z-40 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="sticky top-0 bg-white border-b flex justify-between items-center p-6">
                <h2 class="text-3xl font-bold text-purple-600">💻 Lab Komputer</h2>
                <button onclick="closeModal('lab')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
            </div>
            <div class="p-6">
                <img src="https://via.placeholder.com/600x400?text=Lab+Komputer" alt="Lab Komputer" class="w-full rounded-lg mb-6">
                <h3 class="text-2xl font-bold text-purple-600 mb-4">Lab Komputer Terkini</h3>
                <p class="text-gray-700 mb-6">Laboratorium komputer kami dilengkapi dengan perangkat terbaru dan software profesional untuk mendukung pembelajaran dan riset.</p>
                
                <h4 class="text-xl font-bold text-gray-800 mb-3">Spesifikasi Perangkat:</h4>
                <ul class="grid grid-cols-2 gap-3 mb-6">
                    <li class="flex items-center text-gray-700"><span class="text-purple-600 mr-2">✓</span> 100 Unit Komputer i7</li>
                    <li class="flex items-center text-gray-700"><span class="text-purple-600 mr-2">✓</span> RAM 16GB DDR4</li>
                    <li class="flex items-center text-gray-700"><span class="text-purple-600 mr-2">✓</span> SSD 512GB</li>
                    <li class="flex items-center text-gray-700"><span class="text-purple-600 mr-2">✓</span> Monitor 24 Inch 144Hz</li>
                    <li class="flex items-center text-gray-700"><span class="text-purple-600 mr-2">✓</span> Server Rendering Powerful</li>
                    <li class="flex items-center text-gray-700"><span class="text-purple-600 mr-2">✓</span> Printer 3D</li>
                </ul>

                <h4 class="text-xl font-bold text-gray-800 mb-3">Software Tersedia:</h4>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start text-gray-700"><span class="text-purple-600 mr-2">•</span> Microsoft Office Suite Lengkap</li>
                    <li class="flex items-start text-gray-700"><span class="text-purple-600 mr-2">•</span> Adobe Creative Cloud (Photoshop, Premiere, AE)</li>
                    <li class="flex items-start text-gray-700"><span class="text-purple-600 mr-2">•</span> IDE Pemrograman (VS Code, PyCharm)</li>
                    <li class="flex items-start text-gray-700"><span class="text-purple-600 mr-2">•</span> CAD & 3D Design (AutoCAD, Blender)</li>
                    <li class="flex items-start text-gray-700"><span class="text-purple-600 mr-2">•</span> WiFi 1Gbps & Internet Cepat</li>
                </ul>

                <button onclick="closeModal('lab')" class="w-full bg-purple-600 text-white py-3 rounded-lg font-bold hover:bg-purple-700 transition">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <!-- Modal Olahraga -->
    <div id="modalOlahraga" class="hidden fixed inset-0 bg-gradient-to-r from-blue-600/40 to-blue-800/40 backdrop-blur-sm z-40 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="sticky top-0 bg-white border-b flex justify-between items-center p-6">
                <h2 class="text-3xl font-bold text-pink-600">🏋️ Olahraga</h2>
                <button onclick="closeModal('olahraga')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
            </div>
            <div class="p-6">
                <img src="https://via.placeholder.com/600x400?text=Fasilitas+Olahraga" alt="Olahraga" class="w-full rounded-lg mb-6">
                <h3 class="text-2xl font-bold text-pink-600 mb-4">Fasilitas Olahraga Lengkap</h3>
                <p class="text-gray-700 mb-6">Fasilitas olahraga kami dirancang untuk mendukung gaya hidup sehat dan kebugaran dengan peralatan modern dan profesional.</p>
                
                <h4 class="text-xl font-bold text-gray-800 mb-3">Sarana Olahraga:</h4>
                <ul class="grid grid-cols-2 gap-3 mb-6">
                    <li class="flex items-center text-gray-700"><span class="text-pink-600 mr-2">✓</span> Gym Lengkap Modern</li>
                    <li class="flex items-center text-gray-700"><span class="text-pink-600 mr-2">✓</span> Lapangan Badminton (4)</li>
                    <li class="flex items-center text-gray-700"><span class="text-pink-600 mr-2">✓</span> Lapangan Tennis (2)</li>
                    <li class="flex items-center text-gray-700"><span class="text-pink-600 mr-2">✓</span> Lapangan Futsal</li>
                    <li class="flex items-center text-gray-700"><span class="text-pink-600 mr-2">✓</span> Kolam Renang Olympic</li>
                    <li class="flex items-center text-gray-700"><span class="text-pink-600 mr-2">✓</span> Studio Yoga & Aerobik</li>
                </ul>

                <h4 class="text-xl font-bold text-gray-800 mb-3">Peralatan & Layanan:</h4>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start text-gray-700"><span class="text-pink-600 mr-2">•</span> Peralatan Gym Terbaru & Lengkap</li>
                    <li class="flex items-start text-gray-700"><span class="text-pink-600 mr-2">•</span> Personal Trainer Bersertifikat</li>
                    <li class="flex items-start text-gray-700"><span class="text-pink-600 mr-2">•</span> Loker & Shower Room</li>
                    <li class="flex items-start text-gray-700"><span class="text-pink-600 mr-2">•</span> Program Membership Fleksibel</li>
                    <li class="flex items-start text-gray-700"><span class="text-pink-600 mr-2">•</span> Kelas Group Fitness Gratis</li>
                </ul>

                <button onclick="closeModal('olahraga')" class="w-full bg-pink-600 text-white py-3 rounded-lg font-bold hover:bg-pink-700 transition">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <!-- Modal Transportasi -->
    <div id="modalTransportasi" class="hidden fixed inset-0 bg-gradient-to-r from-blue-600/40 to-blue-800/40 backdrop-blur-sm z-40 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="sticky top-0 bg-white border-b flex justify-between items-center p-6">
                <h2 class="text-3xl font-bold text-indigo-600">🚗 Transportasi</h2>
                <button onclick="closeModal('transportasi')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
            </div>
            <div class="p-6">
                <img src="https://via.placeholder.com/600x400?text=Layanan+Transportasi" alt="Transportasi" class="w-full rounded-lg mb-6">
                <h3 class="text-2xl font-bold text-indigo-600 mb-4">Layanan Transportasi Terpadu</h3>
                <p class="text-gray-700 mb-6">Layanan transportasi kami memberikan kemudahan akses dengan berbagai pilihan moda transportasi yang terintegrasi dan nyaman.</p>
                
                <h4 class="text-xl font-bold text-gray-800 mb-3">Layanan Shuttle:</h4>
                <ul class="grid grid-cols-2 gap-3 mb-6">
                    <li class="flex items-center text-gray-700"><span class="text-indigo-600 mr-2">✓</span> Shuttle Pagi & Sore</li>
                    <li class="flex items-center text-gray-700"><span class="text-indigo-600 mr-2">✓</span> 30 Unit Bus Modern</li>
                    <li class="flex items-center text-gray-700"><span class="text-indigo-600 mr-2">✓</span> AC & WiFi Gratis</li>
                    <li class="flex items-center text-gray-700"><span class="text-indigo-600 mr-2">✓</span> Rute Coverage Luas</li>
                </ul>

                <h4 class="text-xl font-bold text-gray-800 mb-3">Akses Transportasi Publik:</h4>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start text-gray-700"><span class="text-indigo-600 mr-2">•</span> Stasiun Kereta Jarak 500m</li>
                    <li class="flex items-start text-gray-700"><span class="text-indigo-600 mr-2">•</span> Terminal Bus Kota Dekat</li>
                    <li class="flex items-start text-gray-700"><span class="text-indigo-600 mr-2">•</span> Halte Busway Terdekat 200m</li>
                    <li class="flex items-start text-gray-700"><span class="text-indigo-600 mr-2">•</span> Tarif Shuttle Terjangkau</li>
                    <li class="flex items-start text-gray-700"><span class="text-indigo-600 mr-2">•</span> Aplikasi Mobile Booking</li>
                </ul>

                <button onclick="closeModal('transportasi')" class="w-full bg-indigo-600 text-white py-3 rounded-lg font-bold hover:bg-indigo-700 transition">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <!-- Modal Keamanan -->
    <div id="modalKeamanan" class="hidden fixed inset-0 bg-gradient-to-r from-blue-600/40 to-blue-800/40 backdrop-blur-sm z-40 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="sticky top-0 bg-white border-b flex justify-between items-center p-6">
                <h2 class="text-3xl font-bold text-teal-600">🔒 Keamanan</h2>
                <button onclick="closeModal('keamanan')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
            </div>
            <div class="p-6">
                <img src="https://via.placeholder.com/600x400?text=Sistem+Keamanan" alt="Keamanan" class="w-full rounded-lg mb-6">
                <h3 class="text-2xl font-bold text-teal-600 mb-4">Sistem Keamanan Berlapis</h3>
                <p class="text-gray-700 mb-6">Sistem keamanan kami menggunakan teknologi terkini dengan monitoring 24 jam untuk menjamin keamanan dan kenyamanan semua pengguna.</p>
                
                <h4 class="text-xl font-bold text-gray-800 mb-3">Peralatan Keamanan:</h4>
                <ul class="grid grid-cols-2 gap-3 mb-6">
                    <li class="flex items-center text-gray-700"><span class="text-teal-600 mr-2">✓</span> CCTV 4K (120 Unit)</li>
                    <li class="flex items-center text-gray-700"><span class="text-teal-600 mr-2">✓</span> Recording 24 Jam</li>
                    <li class="flex items-center text-gray-700"><span class="text-teal-600 mr-2">✓</span> Sistem Alarm Otomatis</li>
                    <li class="flex items-center text-gray-700"><span class="text-teal-600 mr-2">✓</span> Metal Detector</li>
                    <li class="flex items-center text-gray-700"><span class="text-teal-600 mr-2">✓</span> Access Card System</li>
                    <li class="flex items-center text-gray-700"><span class="text-teal-600 mr-2">✓</span> Biometric Fingerprint</li>
                </ul>

                <h4 class="text-xl font-bold text-gray-800 mb-3">Tim & Layanan Keamanan:</h4>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start text-gray-700"><span class="text-teal-600 mr-2">•</span> Petugas Keamanan 24/7 Berjaga</li>
                    <li class="flex items-start text-gray-700"><span class="text-teal-600 mr-2">•</span> Tim Response Cepat Emergency</li>
                    <li class="flex items-start text-gray-700"><span class="text-teal-600 mr-2">•</span> Asuransi Keamanan Penuh</li>
                    <li class="flex items-start text-gray-700"><span class="text-teal-600 mr-2">•</span> Koordinasi dengan Kepolisian</li>
                    <li class="flex items-start text-gray-700"><span class="text-teal-600 mr-2">•</span> Program Keselamatan Berkala</li>
                </ul>

                <button onclick="closeModal('keamanan')" class="w-full bg-teal-600 text-white py-3 rounded-lg font-bold hover:bg-teal-700 transition">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <!-- MODALS -->
    <!-- Modal Kesehatan -->
    <div id="modalKesehatan" class="hidden fixed inset-0 bg-gradient-to-r from-blue-600/40 to-blue-800/40 backdrop-blur-sm z-40 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="sticky top-0 bg-white border-b flex justify-between items-center p-6">
                <h2 class="text-3xl font-bold text-blue-600">🏥 Kesehatan</h2>
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
    <div id="modalPerpustakaan" class="hidden fixed inset-0 bg-gradient-to-r from-blue-600/40 to-blue-800/40 backdrop-blur-sm z-40 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="sticky top-0 bg-white border-b flex justify-between items-center p-6">
                <h2 class="text-3xl font-bold text-green-600">📚 Perpustakaan</h2>
                <button onclick="closeModal('perpustakaan')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
            </div>
            <div class="p-6">
                <img src="https://via.placeholder.com/600x400?text=Perpustakaan" alt="Perpustakaan" class="w-full rounded-lg mb-6">
                <h3 class="text-2xl font-bold text-green-600 mb-4">Perpustakaan Modern & Nyaman</h3>
                <p class="text-gray-700 mb-6">Perpustakaan kami menyediakan koleksi buku lengkap dari berbagai bidang ilmu dengan suasana belajar yang nyaman dan mendukung.</p>
                
                <h4 class="text-xl font-bold text-gray-800 mb-3">Koleksi Tersedia:</h4>
                <ul class="grid grid-cols-2 gap-3 mb-6">
                    <li class="flex items-center text-gray-700"><span class="text-green-600 mr-2">✓</span> Buku Fiksi (5.000+)</li>
                    <li class="flex items-center text-gray-700"><span class="text-green-600 mr-2">✓</span> Buku Non-Fiksi (8.000+)</li>
                    <li class="flex items-center text-gray-700"><span class="text-green-600 mr-2">✓</span> Referensi (3.000+)</li>
                    <li class="flex items-center text-gray-700"><span class="text-green-600 mr-2">✓</span> E-Book Digital</li>
                    <li class="flex items-center text-gray-700"><span class="text-green-600 mr-2">✓</span> Jurnal Ilmiah</li>
                    <li class="flex items-center text-gray-700"><span class="text-green-600 mr-2">✓</span> Media Audiovisual</li>
                </ul>

                <h4 class="text-xl font-bold text-gray-800 mb-3">Fasilitas:</h4>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start text-gray-700"><span class="text-green-600 mr-2">•</span> Ruang Baca Nyaman dengan AC</li>
                    <li class="flex items-start text-gray-700"><span class="text-green-600 mr-2">•</span> Area Diskusi Kelompok</li>
                    <li class="flex items-start text-gray-700"><span class="text-green-600 mr-2">•</span> Komputer untuk Penelitian</li>
                    <li class="flex items-start text-gray-700"><span class="text-green-600 mr-2">•</span> WiFi Gratis</li>
                    <li class="flex items-start text-gray-700"><span class="text-green-600 mr-2">•</span> Sistem Peminjaman Digital</li>
                </ul>

                <button onclick="closeModal('perpustakaan')" class="w-full bg-green-600 text-white py-3 rounded-lg font-bold hover:bg-green-700 transition">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <!-- Modal Kantin -->
    <div id="modalKantin" class="hidden fixed inset-0 bg-gradient-to-r from-blue-600/40 to-blue-800/40 backdrop-blur-sm z-40 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="sticky top-0 bg-white border-b flex justify-between items-center p-6">
                <h2 class="text-3xl font-bold text-yellow-600">🍽️ Kantin</h2>
                <button onclick="closeModal('kantin')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
            </div>
            <div class="p-6">
                <img src="https://via.placeholder.com/600x400?text=Kantin+Modern" alt="Kantin" class="w-full rounded-lg mb-6">
                <h3 class="text-2xl font-bold text-yellow-600 mb-4">Kantin Modern & Higienis</h3>
                <p class="text-gray-700 mb-6">Kantin kami menawarkan menu makanan dan minuman variatif dengan jaminan kualitas, kebersihan, dan kesegaran bahan makanan terjamin.</p>
                
                <h4 class="text-xl font-bold text-gray-800 mb-3">Menu Tersedia:</h4>
                <ul class="grid grid-cols-2 gap-3 mb-6">
                    <li class="flex items-center text-gray-700"><span class="text-yellow-600 mr-2">✓</span> Nasi & Lauk Pauk</li>
                    <li class="flex items-center text-gray-700"><span class="text-yellow-600 mr-2">✓</span> Mie & Pasta</li>
                    <li class="flex items-center text-gray-700"><span class="text-yellow-600 mr-2">✓</span> Menu Vegetarian</li>
                    <li class="flex items-center text-gray-700"><span class="text-yellow-600 mr-2">✓</span> Makanan Ringan & Snack</li>
                    <li class="flex items-center text-gray-700"><span class="text-yellow-600 mr-2">✓</span> Minuman Segar</li>
                    <li class="flex items-center text-gray-700"><span class="text-yellow-600 mr-2">✓</span> Kopi & Teh Premium</li>
                </ul>

                <h4 class="text-xl font-bold text-gray-800 mb-3">Fasilitas:</h4>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start text-gray-700"><span class="text-yellow-600 mr-2">•</span> Tempat Duduk AC & Nyaman</li>
                    <li class="flex items-start text-gray-700"><span class="text-yellow-600 mr-2">•</span> Dapur Terstandar Internasional</li>
                    <li class="flex items-start text-gray-700"><span class="text-yellow-600 mr-2">•</span> Pembayaran Cash & Digital</li>
                    <li class="flex items-start text-gray-700"><span class="text-yellow-600 mr-2">•</span> Harga Terjangkau & Bersaing</li>
                    <li class="flex items-start text-gray-700"><span class="text-yellow-600 mr-2">•</span> Buka Setiap Hari Kerja</li>
                </ul>

                <button onclick="closeModal('kantin')" class="w-full bg-yellow-600 text-white py-3 rounded-lg font-bold hover:bg-yellow-700 transition">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <!-- Modal Parkir -->
    <div id="modalParkir" class="hidden fixed inset-0 bg-gradient-to-r from-blue-600/40 to-blue-800/40 backdrop-blur-sm z-40 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="sticky top-0 bg-white border-b flex justify-between items-center p-6">
                <h2 class="text-3xl font-bold text-red-600">🅿️ Parkir</h2>
                <button onclick="closeModal('parkir')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
            </div>
            <div class="p-6">
                <img src="https://via.placeholder.com/600x400?text=Lahan+Parkir" alt="Parkir" class="w-full rounded-lg mb-6">
                <h3 class="text-2xl font-bold text-red-600 mb-4">Lahan Parkir Luas & Aman</h3>
                <p class="text-gray-700 mb-6">Fasilitas parkir kami dirancang modern dengan sistem keamanan berlapis untuk menjamin kendaraan Anda aman dan terpantau 24 jam.</p>
                
                <h4 class="text-xl font-bold text-gray-800 mb-3">Kapasitas:</h4>
                <ul class="grid grid-cols-2 gap-3 mb-6">
                    <li class="flex items-center text-gray-700"><span class="text-red-600 mr-2">✓</span> Mobil: 500 Unit</li>
                    <li class="flex items-center text-gray-700"><span class="text-red-600 mr-2">✓</span> Motor: 800 Unit</li>
                    <li class="flex items-center text-gray-700"><span class="text-red-600 mr-2">✓</span> Bus: 20 Unit</li>
                    <li class="flex items-center text-gray-700"><span class="text-red-600 mr-2">✓</span> Tempat untuk Difabel</li>
                </ul>

                <h4 class="text-xl font-bold text-gray-800 mb-3">Fasilitas Keamanan:</h4>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start text-gray-700"><span class="text-red-600 mr-2">•</span> CCTV 24 Jam Full Coverage</li>
                    <li class="flex items-start text-gray-700"><span class="text-red-600 mr-2">•</span> Petugas Keamanan Berjaga</li>
                    <li class="flex items-start text-gray-700"><span class="text-red-600 mr-2">•</span> Sistem Gate Elektronik</li>
                    <li class="flex items-start text-gray-700"><span class="text-red-600 mr-2">•</span> Pencahayaan LED Terang</li>
                    <li class="flex items-start text-gray-700"><span class="text-red-600 mr-2">•</span> Tarif Terjangkau Harian/Bulanan</li>
                </ul>

                <button onclick="closeModal('parkir')" class="w-full bg-red-600 text-white py-3 rounded-lg font-bold hover:bg-red-700 transition">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <!-- Modal Lab Komputer -->
    <div id="modalLab" class="hidden fixed inset-0 bg-gradient-to-r from-blue-600/40 to-blue-800/40 backdrop-blur-sm z-40 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="sticky top-0 bg-white border-b flex justify-between items-center p-6">
                <h2 class="text-3xl font-bold text-purple-600">💻 Lab Komputer</h2>
                <button onclick="closeModal('lab')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
            </div>
            <div class="p-6">
                <img src="https://via.placeholder.com/600x400?text=Lab+Komputer" alt="Lab Komputer" class="w-full rounded-lg mb-6">
                <h3 class="text-2xl font-bold text-purple-600 mb-4">Lab Komputer Terkini</h3>
                <p class="text-gray-700 mb-6">Laboratorium komputer kami dilengkapi dengan perangkat terbaru dan software profesional untuk mendukung pembelajaran dan riset.</p>
                
                <h4 class="text-xl font-bold text-gray-800 mb-3">Spesifikasi Perangkat:</h4>
                <ul class="grid grid-cols-2 gap-3 mb-6">
                    <li class="flex items-center text-gray-700"><span class="text-purple-600 mr-2">✓</span> 100 Unit Komputer i7</li>
                    <li class="flex items-center text-gray-700"><span class="text-purple-600 mr-2">✓</span> RAM 16GB DDR4</li>
                    <li class="flex items-center text-gray-700"><span class="text-purple-600 mr-2">✓</span> SSD 512GB</li>
                    <li class="flex items-center text-gray-700"><span class="text-purple-600 mr-2">✓</span> Monitor 24 Inch 144Hz</li>
                    <li class="flex items-center text-gray-700"><span class="text-purple-600 mr-2">✓</span> Server Rendering Powerful</li>
                    <li class="flex items-center text-gray-700"><span class="text-purple-600 mr-2">✓</span> Printer 3D</li>
                </ul>

                <h4 class="text-xl font-bold text-gray-800 mb-3">Software Tersedia:</h4>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start text-gray-700"><span class="text-purple-600 mr-2">•</span> Microsoft Office Suite Lengkap</li>
                    <li class="flex items-start text-gray-700"><span class="text-purple-600 mr-2">•</span> Adobe Creative Cloud (Photoshop, Premiere, AE)</li>
                    <li class="flex items-start text-gray-700"><span class="text-purple-600 mr-2">•</span> IDE Pemrograman (VS Code, PyCharm)</li>
                    <li class="flex items-start text-gray-700"><span class="text-purple-600 mr-2">•</span> CAD & 3D Design (AutoCAD, Blender)</li>
                    <li class="flex items-start text-gray-700"><span class="text-purple-600 mr-2">•</span> WiFi 1Gbps & Internet Cepat</li>
                </ul>

                <button onclick="closeModal('lab')" class="w-full bg-purple-600 text-white py-3 rounded-lg font-bold hover:bg-purple-700 transition">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <!-- Modal Olahraga -->
    <div id="modalOlahraga" class="hidden fixed inset-0 bg-gradient-to-r from-blue-600/40 to-blue-800/40 backdrop-blur-sm z-40 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="sticky top-0 bg-white border-b flex justify-between items-center p-6">
                <h2 class="text-3xl font-bold text-pink-600">🏋️ Olahraga</h2>
                <button onclick="closeModal('olahraga')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
            </div>
            <div class="p-6">
                <img src="https://via.placeholder.com/600x400?text=Fasilitas+Olahraga" alt="Olahraga" class="w-full rounded-lg mb-6">
                <h3 class="text-2xl font-bold text-pink-600 mb-4">Fasilitas Olahraga Lengkap</h3>
                <p class="text-gray-700 mb-6">Fasilitas olahraga kami dirancang untuk mendukung gaya hidup sehat dan kebugaran dengan peralatan modern dan profesional.</p>
                
                <h4 class="text-xl font-bold text-gray-800 mb-3">Sarana Olahraga:</h4>
                <ul class="grid grid-cols-2 gap-3 mb-6">
                    <li class="flex items-center text-gray-700"><span class="text-pink-600 mr-2">✓</span> Gym Lengkap Modern</li>
                    <li class="flex items-center text-gray-700"><span class="text-pink-600 mr-2">✓</span> Lapangan Badminton (4)</li>
                    <li class="flex items-center text-gray-700"><span class="text-pink-600 mr-2">✓</span> Lapangan Tennis (2)</li>
                    <li class="flex items-center text-gray-700"><span class="text-pink-600 mr-2">✓</span> Lapangan Futsal</li>
                    <li class="flex items-center text-gray-700"><span class="text-pink-600 mr-2">✓</span> Kolam Renang Olympic</li>
                    <li class="flex items-center text-gray-700"><span class="text-pink-600 mr-2">✓</span> Studio Yoga & Aerobik</li>
                </ul>

                <h4 class="text-xl font-bold text-gray-800 mb-3">Peralatan & Layanan:</h4>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start text-gray-700"><span class="text-pink-600 mr-2">•</span> Peralatan Gym Terbaru & Lengkap</li>
                    <li class="flex items-start text-gray-700"><span class="text-pink-600 mr-2">•</span> Personal Trainer Bersertifikat</li>
                    <li class="flex items-start text-gray-700"><span class="text-pink-600 mr-2">•</span> Loker & Shower Room</li>
                    <li class="flex items-start text-gray-700"><span class="text-pink-600 mr-2">•</span> Program Membership Fleksibel</li>
                    <li class="flex items-start text-gray-700"><span class="text-pink-600 mr-2">•</span> Kelas Group Fitness Gratis</li>
                </ul>

                <button onclick="closeModal('olahraga')" class="w-full bg-pink-600 text-white py-3 rounded-lg font-bold hover:bg-pink-700 transition">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <!-- Modal Transportasi -->
    <div id="modalTransportasi" class="hidden fixed inset-0 bg-gradient-to-r from-blue-600/40 to-blue-800/40 backdrop-blur-sm z-40 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="sticky top-0 bg-white border-b flex justify-between items-center p-6">
                <h2 class="text-3xl font-bold text-indigo-600">🚗 Transportasi</h2>
                <button onclick="closeModal('transportasi')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
            </div>
            <div class="p-6">
                <img src="https://via.placeholder.com/600x400?text=Layanan+Transportasi" alt="Transportasi" class="w-full rounded-lg mb-6">
                <h3 class="text-2xl font-bold text-indigo-600 mb-4">Layanan Transportasi Terpadu</h3>
                <p class="text-gray-700 mb-6">Layanan transportasi kami memberikan kemudahan akses dengan berbagai pilihan moda transportasi yang terintegrasi dan nyaman.</p>
                
                <h4 class="text-xl font-bold text-gray-800 mb-3">Layanan Shuttle:</h4>
                <ul class="grid grid-cols-2 gap-3 mb-6">
                    <li class="flex items-center text-gray-700"><span class="text-indigo-600 mr-2">✓</span> Shuttle Pagi & Sore</li>
                    <li class="flex items-center text-gray-700"><span class="text-indigo-600 mr-2">✓</span> 30 Unit Bus Modern</li>
                    <li class="flex items-center text-gray-700"><span class="text-indigo-600 mr-2">✓</span> AC & WiFi Gratis</li>
                    <li class="flex items-center text-gray-700"><span class="text-indigo-600 mr-2">✓</span> Rute Coverage Luas</li>
                </ul>

                <h4 class="text-xl font-bold text-gray-800 mb-3">Akses Transportasi Publik:</h4>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start text-gray-700"><span class="text-indigo-600 mr-2">•</span> Stasiun Kereta Jarak 500m</li>
                    <li class="flex items-start text-gray-700"><span class="text-indigo-600 mr-2">•</span> Terminal Bus Kota Dekat</li>
                    <li class="flex items-start text-gray-700"><span class="text-indigo-600 mr-2">•</span> Halte Busway Terdekat 200m</li>
                    <li class="flex items-start text-gray-700"><span class="text-indigo-600 mr-2">•</span> Tarif Shuttle Terjangkau</li>
                    <li class="flex items-start text-gray-700"><span class="text-indigo-600 mr-2">•</span> Aplikasi Mobile Booking</li>
                </ul>

                <button onclick="closeModal('transportasi')" class="w-full bg-indigo-600 text-white py-3 rounded-lg font-bold hover:bg-indigo-700 transition">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <!-- Modal Keamanan -->
    <div id="modalKeamanan" class="hidden fixed inset-0 bg-gradient-to-r from-blue-600/40 to-blue-800/40 backdrop-blur-sm z-40 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="sticky top-0 bg-white border-b flex justify-between items-center p-6">
                <h2 class="text-3xl font-bold text-teal-600">🔒 Keamanan</h2>
                <button onclick="closeModal('keamanan')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
            </div>
            <div class="p-6">
                <img src="https://via.placeholder.com/600x400?text=Sistem+Keamanan" alt="Keamanan" class="w-full rounded-lg mb-6">
                <h3 class="text-2xl font-bold text-teal-600 mb-4">Sistem Keamanan Berlapis</h3>
                <p class="text-gray-700 mb-6">Sistem keamanan kami menggunakan teknologi terkini dengan monitoring 24 jam untuk menjamin keamanan dan kenyamanan semua pengguna.</p>
                
                <h4 class="text-xl font-bold text-gray-800 mb-3">Peralatan Keamanan:</h4>
                <ul class="grid grid-cols-2 gap-3 mb-6">
                    <li class="flex items-center text-gray-700"><span class="text-teal-600 mr-2">✓</span> CCTV 4K (120 Unit)</li>
                    <li class="flex items-center text-gray-700"><span class="text-teal-600 mr-2">✓</span> Recording 24 Jam</li>
                    <li class="flex items-center text-gray-700"><span class="text-teal-600 mr-2">✓</span> Sistem Alarm Otomatis</li>
                    <li class="flex items-center text-gray-700"><span class="text-teal-600 mr-2">✓</span> Metal Detector</li>
                    <li class="flex items-center text-gray-700"><span class="text-teal-600 mr-2">✓</span> Access Card System</li>
                    <li class="flex items-center text-gray-700"><span class="text-teal-600 mr-2">✓</span> Biometric Fingerprint</li>
                </ul>

                <h4 class="text-xl font-bold text-gray-800 mb-3">Tim & Layanan Keamanan:</h4>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start text-gray-700"><span class="text-teal-600 mr-2">•</span> Petugas Keamanan 24/7 Berjaga</li>
                    <li class="flex items-start text-gray-700"><span class="text-teal-600 mr-2">•</span> Tim Response Cepat Emergency</li>
                    <li class="flex items-start text-gray-700"><span class="text-teal-600 mr-2">•</span> Asuransi Keamanan Penuh</li>
                    <li class="flex items-start text-gray-700"><span class="text-teal-600 mr-2">•</span> Koordinasi dengan Kepolisian</li>
                    <li class="flex items-start text-gray-700"><span class="text-teal-600 mr-2">•</span> Program Keselamatan Berkala</li>
                </ul>

                <button onclick="closeModal('keamanan')" class="w-full bg-teal-600 text-white py-3 rounded-lg font-bold hover:bg-teal-700 transition">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <!-- Specifications -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-4xl md:text-4xl font-bold text-center mb-16 text-blue-600 section-title bounce-3s">Spesifikasi Teknis</p>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="bg-white rounded-2xl shadow-xl p-8 card-hover">
                    <h3 class="text-2xl font-bold text-blue-600 mb-6 flex items-center">
                        <span class="mr-3 text-3xl">⚡</span>
                        Infrastruktur
                    </h3>
                    <div class="space-y-6">
                        <div class="flex items-start p-4 bg-blue-50 rounded-xl">
                            <span class="text-blue-600 font-bold text-2xl mr-4">•</span>
                            <div>
                                <p class="font-bold text-gray-800">Listrik</p>
                                <p class="text-gray-600">Daya 2000 kVA dengan backup generator</p>
                            </div>
                        </div>
                        <div class="flex items-start p-4 bg-blue-50 rounded-xl">
                            <span class="text-blue-600 font-bold text-2xl mr-4">•</span>
                            <div>
                                <p class="font-bold text-gray-800">Air</p>
                                <p class="text-gray-600">PDAM + tangki penampung 100m³</p>
                            </div>
                        </div>
                        <div class="flex items-start p-4 bg-blue-50 rounded-xl">
                            <span class="text-blue-600 font-bold text-2xl mr-4">•</span>
                            <div>
                                <p class="font-bold text-gray-800">Internet</p>
                                <p class="text-gray-600">Fiber optic 1000 Mbps dengan backup</p>
                            </div>
                        </div>
                        <div class="flex items-start p-4 bg-blue-50 rounded-xl">
                            <span class="text-blue-600 font-bold text-2xl mr-4">•</span>
                            <div>
                                <p class="font-bold text-gray-800">HVAC</p>
                                <p class="text-gray-600">Sistem pendingin pusat dengan kontrol otomatis</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-xl p-8 card-hover">
                    <h3 class="text-2xl font-bold text-green-600 mb-6 flex items-center">
                        <span class="mr-3 text-3xl">🛡️</span>
                        Keamanan & Kebersihan
                    </h3>
                    <div class="space-y-6">
                        <div class="flex items-start p-4 bg-green-50 rounded-xl">
                            <span class="text-green-600 font-bold text-2xl mr-4">•</span>
                            <div>
                                <p class="font-bold text-gray-800">CCTV</p>
                                <p class="text-gray-600">120+ kamera dengan sistem recording 24/7</p>
                            </div>
                        </div>
                        <div class="flex items-start p-4 bg-green-50 rounded-xl">
                            <span class="text-green-600 font-bold text-2xl mr-4">•</span>
                            <div>
                                <p class="font-bold text-gray-800">Akses Kontrol</p>
                                <p class="text-gray-600">Kartu akses elektronik dan biometric</p>
                            </div>
                        </div>
                        <div class="flex items-start p-4 bg-green-50 rounded-xl">
                            <span class="text-green-600 font-bold text-2xl mr-4">•</span>
                            <div>
                                <p class="font-bold text-gray-800">Kebersihan</p>
                                <p class="text-gray-600">Tim cleaning service profesional tersertifikasi</p>
                            </div>
                        </div>
                        <div class="flex items-start p-4 bg-green-50 rounded-xl">
                            <span class="text-green-600 font-bold text-2xl mr-4">•</span>
                            <div>
                                <p class="font-bold text-gray-800">Pemadam Kebakaran</p>
                                <p class="text-gray-600">Sistem sprinkler dan alat pemadam lengkap</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Gallery Section -->
    <section id="galeri" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-4xl md:text-4xl font-bold text-center mb-16 text-blue-600 section-title bounce-3s">Galeri Foto</>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="group relative overflow-hidden rounded-2xl shadow-lg card-hover h-64 bg-linear-to-br from-blue-400 to-blue-600">
                    <div class="absolute inset-0 flex items-center justify-center text-white text-6xl group-hover:scale-110 transition-transform">
                        🏢
                    </div>
                    <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-30 transition-opacity flex items-end p-4">
                        <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Gedung Utama</span>
                    </div>
                </div>
                
                <div class="group relative overflow-hidden rounded-2xl shadow-lg card-hover h-64 bg-linear-to-br from-green-400 to-green-600">
                    <div class="absolute inset-0 flex items-center justify-center text-white text-6xl group-hover:scale-110 transition-transform">
                        🏛️
                    </div>
                    <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-30 transition-opacity flex items-end p-4">
                        <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruangan</span>
                    </div>
                </div>
                
                <div class="group relative overflow-hidden rounded-2xl shadow-lg card-hover h-64 bg-linear-to-br from-purple-400 to-purple-600">
                    <div class="absolute inset-0 flex items-center justify-center text-white text-6xl group-hover:scale-110 transition-transform">
                        🚪
                    </div>
                    <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-30 transition-opacity flex items-end p-4">
                        <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Lobby</span>
                    </div>
                </div>
                
                <div class="group relative overflow-hidden rounded-2xl shadow-lg card-hover h-64 bg-linear-to-br from-pink-400 to-pink-600">
                    <div class="absolute inset-0 flex items-center justify-center text-white text-6xl group-hover:scale-110 transition-transform">
                        💼
                    </div>
                    <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-30 transition-opacity flex items-end p-4">
                        <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Fasilitas</span>
                    </div>
                </div>
                
                <div class="group relative overflow-hidden rounded-2xl shadow-lg card-hover h-64 bg-linear-to-br from-yellow-400 to-yellow-600">
                    <div class="absolute inset-0 flex items-center justify-center text-white text-6xl group-hover:scale-110 transition-transform">
                        🍽️
                    </div>
                    <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-30 transition-opacity flex items-end p-4">
                        <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Kantin</span>
                    </div>
                </div>
                
                <div class="group relative overflow-hidden rounded-2xl shadow-lg card-hover h-64 bg-linear-to-br from-indigo-400 to-indigo-600">
                    <div class="absolute inset-0 flex items-center justify-center text-white text-6xl group-hover:scale-110 transition-transform">
                        📊
                    </div>
                    <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-30 transition-opacity flex items-end p-4">
                        <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Ruang Meeting</span>
                    </div>
                </div>
                
                <div class="group relative overflow-hidden rounded-2xl shadow-lg card-hover h-64 bg-linear-to-br from-teal-400 to-teal-600">
                    <div class="absolute inset-0 flex items-center justify-center text-white text-6xl group-hover:scale-110 transition-transform">
                        🔬
                    </div>
                    <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-30 transition-opacity flex items-end p-4">
                        <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Lab</span>
                    </div>
                </div>
                
                <div class="group relative overflow-hidden rounded-2xl shadow-lg card-hover h-64 bg-linear-to-br from-red-400 to-red-600">
                    <div class="absolute inset-0 flex items-center justify-center text-white text-6xl group-hover:scale-110 transition-transform">
                        🅿️
                    </div>
                    <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-30 transition-opacity flex items-end p-4">
                        <span class="text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">Parkir</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="kontak" class="py-20 bg-linear-to-r from-blue-600 via-green-600 to-yellow-600 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full -translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full translate-x-1/2 translate-y-1/2"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Tertarik untuk Menggunakan Layanan Kami?</h2>
            <p class="text-xl md:text-2xl mb-10 text-gray-100">Hubungi tim kami untuk informasi lebih lanjut</p>
            <a href="https://wa.me/6289670131732" target="_blank" class="inline-flex items-center gap-3 bg-white text-purple-600 px-10 py-4 rounded-full font-bold hover:bg-gray-100 hover:scale-105 transition-all shadow-2xl">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                </svg>
                Hubungi Kami Sekarang
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Footer Content - 4 Columns Grid -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                
                <!-- Column 1: Jam Operasional -->
                <div class="flex flex-col">
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

                <!-- Column 2: Kontak -->
                <div class="flex flex-col">
                    <h3 class="text-xl font-bold mb-6 text-white">Kontak</h3>
                    <ul class="text-gray-400 text-sm space-y-3">
                        <li class="flex items-start gap-2">
                            <span class="text-lg flex-shrink-0">📍</span>
                            <span>JL BERDIKARI RAYA No.9, Srondol Kulon, Banyumanik, Semarang City, Central Java 50263</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-lg flex-shrink-0">📞</span>
                            <span>(0XX) XXXX-XXXX</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-lg flex-shrink-0">📧</span>
                            <span>balatkopukm.jateng@gmail.com</span>
                        </li>
                    </ul>
                </div>

                <!-- Column 3: Ikuti Kami (Social Media) -->
                <div class="flex flex-col">
                    <h3 class="text-xl font-bold mb-6 text-white">Ikuti Kami</h3>
                    <div class="flex flex-col gap-3">
                        <a href="https://www.instagram.com/balatkopukmjateng?igsh=MW1sNWpqNTdndHNmaA==" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 text-gray-400 hover:text-pink-500 transition duration-300">
                            <svg class="w-6 h-6 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zM5.838 12a6.162 6.162 0 1 1 12.324 0 6.162 6.162 0 0 1-12.324 0zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm4.965-10.322a1.44 1.44 0 1 1 2.881.001 1.44 1.44 0 0 1-2.881-.001z"/>
                            </svg>
                            <span class="text-sm">balatkopukmjateng</span>
                        </a>
                        <a href="https://www.facebook.com/share/1MekEv6wAC/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 text-gray-400 hover:text-blue-600 transition duration-300">
                            <svg class="w-6 h-6 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                            <span class="text-sm">Balatkopukmjateng</span>
                        </a>
                        <a href="https://x.com/balatkopukmjtg?s=21" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 text-gray-400 hover:text-gray-100 transition duration-300">
                            <svg class="w-6 h-6 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24h-6.6l-5.165-6.744L2.881 21.25H.577l7.732-8.835L.126 2.25h6.775l4.978 6.586L17.414 2.25h.83zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                            </svg>
                            <span class="text-sm">balatkopukmjtg</span>
                        </a>
                        <a href="https://www.tiktok.com/@balatkopukmjateng?_r=1&_t=ZS-93J5ZQopP8v" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 text-gray-400 hover:text-cyan-400 transition duration-300">
                            <svg class="w-6 h-6 flex-shrink-0 hover:fill-cyan-400 transition duration-300" fill="none" viewBox="0 0 24 24">
                                <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" fill="url(#tiktokGradient)"/>
                                    <defs>
                                    <linearGradient id="tiktokGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" style="stop-color:#25F4EE;stop-opacity:1" />
                                        <stop offset="100%" style="stop-color:#FE2C55;stop-opacity:1" />
                                    </linearGradient>
                                    </defs>
                            </svg>
                            <span class="text-sm">balatkopukmjateng</span>
                        </a>
                        <a href="https://youtube.com/@balatkopjateng?si=4KCNmm5Q9VOJD2Wq" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 text-gray-400 hover:text-red-600 transition duration-300">
                        <svg class="w-6 h-6 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                        <span class="text-sm">BALATKOP JATENG</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Lokasi Kami Section - Full Width -->
            <div class="mb-8">
                <h3 class="text-xl font-bold mb-4 text-white">Lokasi Kami</h3>
                <div class="relative w-full h-64 rounded-lg overflow-hidden shadow-lg">
                    <iframe src="https://maps.google.com/maps?q=Balatkop+UMKM,+Semarang&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <!-- Copyright Section -->
            <hr class="border-gray-800 mb-8">
            <div class="text-center text-gray-400 text-sm">
                <p>© 2026 Sarana dan Prasarana - Instansi Pemerintah. Semua hak dilindungi.</p>
            </div>

        </div>
    </footer>

    <!-- BUILDING MODALS -->
    <!-- Modal Gedung Utama - Rooms as Swipes -->
    <div id="modalUtama" class="hidden fixed inset-0 bg-gradient-to-r from-blue-600/40 to-blue-800/40 backdrop-blur-sm z-40 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="sticky top-0 bg-white border-b flex justify-between items-center p-6" style="cursor: move;">
                <h2 class="text-3xl font-bold text-blue-600">🏢 Gedung Utama</h2>
                <button onclick="closeBuildingModal('utama')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
            </div>
            <div class="p-6">
                <!-- Swiper: Ruangan Gedung Utama -->
                <div class="relative" style="position: relative;">
                <div class="swiper" id="swiperRuanganUtama">
                    <div class="swiper-wrapper">
                        <!-- Ruang Direktur -->
                        <div class="swiper-slide">
                            <div class="space-y-4">
                                <img src="<?= base_url('images/bg-balatkop1.jpeg') ?>" alt="Ruang Direktur" class="w-full rounded-lg h-96 object-cover">
                                <h3 class="text-2xl font-bold text-blue-600">Ruang Direktur</h3>
                                <p class="text-gray-700"><strong>Lantai:</strong> 10</p>
                                <p class="text-gray-700"><strong>Luas:</strong> 80 m²</p>
                                <p class="text-gray-700"><strong>Deskripsi:</strong> Ruang kerja ekskutif dengan fasilitas lengkap, AC central, dan pemandangan kota yang luas.</p>
                                <div class="flex gap-2 flex-wrap">
                                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">AC</span>
                                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">WiFi</span>
                                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Parkir</span>
                                </div>
                            </div>
                        </div>

                        <!-- Ruang Rapat Utama -->
                        <div class="swiper-slide">
                            <div class="space-y-4">
                                <img src="<?= base_url('images/bg-balatkop2.jpeg') ?>" alt="Ruang Rapat Utama" class="w-full rounded-lg h-96 object-cover">
                                <h3 class="text-2xl font-bold text-blue-600">Ruang Rapat Utama</h3>
                                <p class="text-gray-700"><strong>Lantai:</strong> 9</p>
                                <p class="text-gray-700"><strong>Luas:</strong> 120 m²</p>
                                <p class="text-gray-700"><strong>Deskripsi:</strong> Ruang rapat berkapasitas 50 orang dengan sistem video conference HD dan proyektor 4K.</p>
                                <div class="flex gap-2 flex-wrap">
                                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Video Conference</span>
                                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Proyektor 4K</span>
                                </div>
                            </div>
                        </div>

                        <!-- Ruang Tata Usaha -->
                        <div class="swiper-slide">
                            <div class="space-y-4">
                                <img src="<?= base_url('images/bg-balatkop3.jpeg') ?>" alt="Ruang Tata Usaha" class="w-full rounded-lg h-96 object-cover">
                                <h3 class="text-2xl font-bold text-blue-600">Ruang Tata Usaha</h3>
                                <p class="text-gray-700"><strong>Lantai:</strong> 8</p>
                                <p class="text-gray-700"><strong>Luas:</strong> 100 m²</p>
                                <p class="text-gray-700"><strong>Deskripsi:</strong> Ruang administratif dengan area kerja modern dan filing system terintegrasi.</p>
                                <div class="flex gap-2 flex-wrap">
                                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Filing System</span>
                                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Printer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Ruang Keuangan -->
                        <div class="swiper-slide">
                            <div class="space-y-4">
                                <img src="<?= base_url('images/bg-balatkop4.jpeg') ?>" alt="Ruang Keuangan" class="w-full rounded-lg h-96 object-cover">
                                <h3 class="text-2xl font-bold text-blue-600">Ruang Keuangan</h3>
                                <p class="text-gray-700"><strong>Lantai:</strong> 7</p>
                                <p class="text-gray-700"><strong>Luas:</strong> 90 m²</p>
                                <p class="text-gray-700"><strong>Deskripsi:</strong> Ruang keuangan dengan sistem keamanan berlapis dan safe deposit box.</p>
                                <div class="flex gap-2 flex-wrap">
                                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Safe Deposit</span>
                                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Keamanan 24/7</span>
                                </div>
                            </div>
                        </div>

                        <!-- Ruang Arsip -->
                        <div class="swiper-slide">
                            <div class="space-y-4">
                                <img src="<?= base_url('images/bg-balatkop1.jpeg') ?>" alt="Ruang Arsip" class="w-full rounded-lg h-96 object-cover">
                                <h3 class="text-2xl font-bold text-blue-600">Ruang Arsip</h3>
                                <p class="text-gray-700"><strong>Lantai:</strong> 6</p>
                                <p class="text-gray-700"><strong>Luas:</strong> 150 m²</p>
                                <p class="text-gray-700"><strong>Deskripsi:</strong> Ruang penyimpanan dokumen dengan sistem pendingin dan kelembaban terkontrol.</p>
                                <div class="flex gap-2 flex-wrap">
                                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Pendingin</span>
                                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Terintegrasi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                </div>

                <button onclick="closeBuildingModal('utama')" class="w-full bg-blue-600 text-white py-3 rounded-lg font-bold hover:bg-blue-700 transition mt-6">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <!-- Modal Gedung Pendukung - Rooms as Swipes -->
    <div id="modalPendukung" class="hidden fixed inset-0 bg-gradient-to-r from-green-600/40 to-green-800/40 backdrop-blur-sm z-40 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="sticky top-0 bg-white border-b flex justify-between items-center p-6" style="cursor: move;">
                <h2 class="text-3xl font-bold text-green-600">🏛️ Gedung Pendukung</h2>
                <button onclick="closeBuildingModal('pendukung')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
            </div>
            <div class="p-6">
                <!-- Swiper: Ruangan Gedung Pendukung -->
                <div class="relative" style="position: relative;">
                <div class="swiper" id="swiperRuanganPendukung">
                    <div class="swiper-wrapper">
                        <!-- Ruang Perpustakaan -->
                        <div class="swiper-slide">
                            <div class="space-y-4">
                                <img src="<?= base_url('images/bg-balatkop2.jpeg') ?>" alt="Ruang Perpustakaan" class="w-full rounded-lg h-96 object-cover">
                                <h3 class="text-2xl font-bold text-green-600">Ruang Perpustakaan</h3>
                                <p class="text-gray-700"><strong>Lantai:</strong> 1</p>
                                <p class="text-gray-700"><strong>Luas:</strong> 200 m²</p>
                                <p class="text-gray-700"><strong>Deskripsi:</strong> Perpustakaan modern dengan koleksi buku lengkap, area baca nyaman, dan sistem digital terintegrasi.</p>
                                <div class="flex gap-2 flex-wrap">
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">E-Book</span>
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">WiFi</span>
                                </div>
                            </div>
                        </div>

                        <!-- Ruang Kolaborasi -->
                        <div class="swiper-slide">
                            <div class="space-y-4">
                                <img src="<?= base_url('images/bg-balatkop3.jpeg') ?>" alt="Ruang Kolaborasi" class="w-full rounded-lg h-96 object-cover">
                                <h3 class="text-2xl font-bold text-green-600">Ruang Kolaborasi</h3>
                                <p class="text-gray-700"><strong>Lantai:</strong> 1-2</p>
                                <p class="text-gray-700"><strong>Luas:</strong> 150 m²</p>
                                <p class="text-gray-700"><strong>Deskripsi:</strong> Ruang diskusi dan kolaborasi dengan whiteboard interaktif dan fasilitas lengkap.</p>
                                <div class="flex gap-2 flex-wrap">
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Whiteboard</span>
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">AC</span>
                                </div>
                            </div>
                        </div>

                        <!-- Ruang Meeting A -->
                        <div class="swiper-slide">
                            <div class="space-y-4">
                                <img src="<?= base_url('images/bg-balatkop4.jpeg') ?>" alt="Ruang Meeting A" class="w-full rounded-lg h-96 object-cover">
                                <h3 class="text-2xl font-bold text-green-600">Ruang Meeting A</h3>
                                <p class="text-gray-700"><strong>Lantai:</strong> 2</p>
                                <p class="text-gray-700"><strong>Luas:</strong> 80 m²</p>
                                <p class="text-gray-700"><strong>Deskripsi:</strong> Ruang rapat berkapasitas 25 orang dengan fasilitas video conference dan catering.</p>
                                <div class="flex gap-2 flex-wrap">
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Video Conference</span>
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Catering</span>
                                </div>
                            </div>
                        </div>

                        <!-- Ruang Seminar -->
                        <div class="swiper-slide">
                            <div class="space-y-4">
                                <img src="<?= base_url('images/bg-balatkop1.jpeg') ?>" alt="Ruang Seminar" class="w-full rounded-lg h-96 object-cover">
                                <h3 class="text-2xl font-bold text-green-600">Ruang Seminar</h3>
                                <p class="text-gray-700"><strong>Lantai:</strong> 3</p>
                                <p class="text-gray-700"><strong>Luas:</strong> 250 m²</p>
                                <p class="text-gray-700"><strong>Deskripsi:</strong> Ruang seminar berkapasitas 100 orang dengan panggung, sound system premium, dan pencahayaan profesional.</p>
                                <div class="flex gap-2 flex-wrap">
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Sound System</span>
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Panggung</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                </div>

                <button onclick="closeBuildingModal('pendukung')" class="w-full bg-green-600 text-white py-3 rounded-lg font-bold hover:bg-green-700 transition mt-6">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <!-- Modal Layanan Publik - Rooms as Swipes -->
    <div id="modalPublik" class="hidden fixed inset-0 bg-gradient-to-r from-purple-600/40 to-purple-800/40 backdrop-blur-sm z-40 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="sticky top-0 bg-white border-b flex justify-between items-center p-6" style="cursor: move;">
                <h2 class="text-3xl font-bold text-purple-600">🏪 Layanan Publik</h2>
                <button onclick="closeBuildingModal('publik')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
            </div>
            <div class="p-6">
                <!-- Swiper: Ruangan Layanan Publik -->
                <div class="relative" style="position: relative;">
                <div class="swiper" id="swiperRuanganPublik">
                    <div class="swiper-wrapper">
                        <!-- Ruang Tunggu Publik -->
                        <div class="swiper-slide">
                            <div class="space-y-4">
                                <img src="<?= base_url('images/bg-balatkop3.jpeg') ?>" alt="Ruang Tunggu Publik" class="w-full rounded-lg h-96 object-cover">
                                <h3 class="text-2xl font-bold text-purple-600">Ruang Tunggu Publik</h3>
                                <p class="text-gray-700"><strong>Kapasitas:</strong> 100+ orang</p>
                                <p class="text-gray-700"><strong>Luas:</strong> 300 m²</p>
                                <p class="text-gray-700"><strong>Deskripsi:</strong> Ruang tunggu yang nyaman dengan kursi ergonomis, AC, display informasi real-time, dan WiFi gratis.</p>
                                <div class="flex gap-2 flex-wrap">
                                    <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm">AC</span>
                                    <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm">WiFi</span>
                                    <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm">Display Info</span>
                                </div>
                            </div>
                        </div>

                        <!-- Loket Pelayanan 1 -->
                        <div class="swiper-slide">
                            <div class="space-y-4">
                                <img src="<?= base_url('images/bg-balatkop4.jpeg') ?>" alt="Loket Pelayanan 1" class="w-full rounded-lg h-96 object-cover">
                                <h3 class="text-2xl font-bold text-purple-600">Loket Pelayanan 1</h3>
                                <p class="text-gray-700"><strong>Fungsi:</strong> Pendaftaran & Informasi</p>
                                <p class="text-gray-700"><strong>Jam Operasi:</strong> 08:00 - 16:00</p>
                                <p class="text-gray-700"><strong>Deskripsi:</strong> Loket untuk pendaftaran awal dan pemberian informasi umum kepada pengunjung.</p>
                                <div class="flex gap-2 flex-wrap">
                                    <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm">Pendaftaran</span>
                                    <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm">Informasi</span>
                                </div>
                            </div>
                        </div>

                        <!-- Loket Pelayanan 2 -->
                        <div class="swiper-slide">
                            <div class="space-y-4">
                                <img src="<?= base_url('images/bg-balatkop1.jpeg') ?>" alt="Loket Pelayanan 2" class="w-full rounded-lg h-96 object-cover">
                                <h3 class="text-2xl font-bold text-purple-600">Loket Pelayanan 2</h3>
                                <p class="text-gray-700"><strong>Fungsi:</strong> Verifikasi & Validasi</p>
                                <p class="text-gray-700"><strong>Jam Operasi:</strong> 08:00 - 16:00</p>
                                <p class="text-gray-700"><strong>Deskripsi:</strong> Loket untuk verifikasi dokumen dan validasi data pengunjung.</p>
                                <div class="flex gap-2 flex-wrap">
                                    <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm">Verifikasi</span>
                                    <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm">Validasi</span>
                                </div>
                            </div>
                        </div>

                        <!-- Ruang Konsultasi -->
                        <div class="swiper-slide">
                            <div class="space-y-4">
                                <img src="<?= base_url('images/bg-balatkop2.jpeg') ?>" alt="Ruang Konsultasi" class="w-full rounded-lg h-96 object-cover">
                                <h3 class="text-2xl font-bold text-purple-600">Ruang Konsultasi</h3>
                                <p class="text-gray-700"><strong>Jumlah Ruangan:</strong> 5 Ruangan Pribadi</p>
                                <p class="text-gray-700"><strong>Luas Masing-masing:</strong> 20 m²</p>
                                <p class="text-gray-700"><strong>Deskripsi:</strong> Ruang konsultasi pribadi untuk diskusi lebih dalam dengan petugas pelayanan.</p>
                                <div class="flex gap-2 flex-wrap">
                                    <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm">Pribadi</span>
                                    <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm">Privasi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                </div>

                <button onclick="closeBuildingModal('publik')" class="w-full bg-purple-600 text-white py-3 rounded-lg font-bold hover:bg-purple-700 transition mt-6">
                    Tutup
                </button>
            </div>
        </div>
    </div>
    
    <!-- Scripts -->
    <script src="https://tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Swiper JS for modal sliders -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
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

        // Close modal when clicking outside
        document.addEventListener('click', function(event) {
            const modals = document.querySelectorAll('[id^="modal"]');
            modals.forEach(modal => {
                if (event.target === modal) {
                    modal.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                }
            });
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                const modals = document.querySelectorAll('[id^="modal"]');
                modals.forEach(modal => {
                    modal.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                });
            }
        });
    </script>
    <script>
        // Initialize Swipers for building modals - Rooms as Slides
        const modalSwipers = {};
        function initModalSwipers() {
            modalSwipers['RuanganUtama'] = new Swiper('#swiperRuanganUtama', {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 10,
                pagination: { el: '#swiperRuanganUtama .swiper-pagination', clickable: true },
                navigation: { nextEl: '#swiperRuanganUtama .swiper-button-next', prevEl: '#swiperRuanganUtama .swiper-button-prev' },
                keyboard: { enabled: true },
            });
            modalSwipers['RuanganPendukung'] = new Swiper('#swiperRuanganPendukung', {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 10,
                pagination: { el: '#swiperRuanganPendukung .swiper-pagination', clickable: true },
                navigation: { nextEl: '#swiperRuanganPendukung .swiper-button-next', prevEl: '#swiperRuanganPendukung .swiper-button-prev' },
                keyboard: { enabled: true },
            });
            modalSwipers['RuanganPublik'] = new Swiper('#swiperRuanganPublik', {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 10,
                pagination: { el: '#swiperRuanganPublik .swiper-pagination', clickable: true },
                navigation: { nextEl: '#swiperRuanganPublik .swiper-button-next', prevEl: '#swiperRuanganPublik .swiper-button-prev' },
                keyboard: { enabled: true },
            });
        }
        document.addEventListener('DOMContentLoaded', initModalSwipers);

        // Carousel Auto-rotation
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-item');
        
        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove('active');
                if (i === index) {
                    slide.classList.add('active');
                }
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        // Auto-rotate every 30 seconds
        setInterval(nextSlide, 30000);

        // Mobile Menu Toggle
        function toggleMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('active');
        }

        // Close mobile menu when clicking on a link
        document.querySelectorAll('#mobileMenu a').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('mobileMenu').classList.remove('active');
            });
        });

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

        // Scroll Animation Observer
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all cards and sections
        document.querySelectorAll('.card-hover, section > div').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.6s ease-out';
            observer.observe(el);
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // 1. Typing Animation
            const text = "Sarana dan Prasarana BalatKop UKM Jateng";
            const typingElement = document.getElementById('typing');
            let i = 0;
            function type() {
                if (i < text.length) {
                    typingElement.innerHTML += text.charAt(i);
                    i++;
                    setTimeout(type, 50);
                }
            }
            type();

            // 2. Optimized Intersection Observer for Repeatable Animations
            const observerOptions = {
                threshold: 0.15,
                rootMargin: "0px 0px -50px 0px"
            };

            const globalObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        entry.target.classList.remove('inactive');
                    } else {
                        // Hapus class active saat elemen keluar layar agar bisa diulang
                        entry.target.classList.remove('active');
                        entry.target.classList.add('inactive');
                    }
                });
            }, observerOptions);

            // Terapkan ke semua elemen dengan class 'scroll-animation'
            document.querySelectorAll('.scroll-animation').forEach(el => {
                el.classList.add('inactive');
                globalObserver.observe(el);
            });
        });
    </script>
    </script>
</body>
</html>