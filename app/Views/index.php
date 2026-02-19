<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sarana Prasarana Balatkop Jateng</title>
        <!-- Font -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <!-- Bootstap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <!-- Swiper JS -->
        <link href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body class="bg-blue-100">
        <!-- navbar -->
        <nav class="bg-white shadow-lg sticky top-0 z-50 backdrop-blur-lg bg-opacity-90">
            <div class="px-2 lg:px-8">         
                <div class="flex justify-between items-center h-20">
                    <!-- logo -->
                    <div class="flex items-center gap-3 slide-in">
                        <a href="#home" class="flex items-center group">
                            <div class="w-12 h-12 rounded-full flex items-center justify-center mr-3 group-hover:scale-110 transition-transform">
                                <img src="<?= base_url('images/core/logo-balatkop.jpeg') ?>" alt="Logo BalatKop" class="w-12 h-12 mr-2 inline-block rounded-full">
                            </div>
                            <h2 class="text-2xl sm:text-xl text-blue-600 font-bold gradient-text">SarPras BalatKop</h2>
                        </a>
                    </div>
                    <!-- menu -->
                    <div class="hidden md:flex space-x-8">
                        <a href="#home" class="nav-link text-gray-700 hover:text-blue-600 font-medium transition">Beranda</a>
                        <a href="#tentang" class="nav-link text-gray-700 hover:text-blue-600 font-medium transition">Tentang</a>
                        <a href="#fasilitas" class="nav-link text-gray-700 hover:text-blue-600 font-medium transition">Fasilitas</a>
                        <a href="#galeri" class="nav-link text-gray-700 hover:text-blue-600 font-medium transition">Galeri</a>
                        <a href="#kontak" class="nav-link text-gray-700 hover:text-blue-600 font-medium transition">Kontak</a>
                    </div>
                    <!-- icon night mode  --> 
                    <div class="">
                        <button id="theme-toggle" class="ml-4 p-2 rounded-lg hover:bg-gray-100 transition">
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
        <!-- /navbar -->
        
        <!-- Section Hero -->
         <section id="home" class="pt-36 flex items-center justify-center h-screen w-full">
            <div id="" class="h-screen w-full bg-white">
                <!-- Slides -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide flex">
                            <div class="swiper-item flex">
                            </div>
                            <div class="swiper-title">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, officia!</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex">
                                <div class="w-1/2">
                                    <img src="<?= base_url('images/bg-balatkop1.jpeg') ?>" alt="Slide 2" class="w-full h-full object-cover rounded-2xl shadow-lg">
                                </div>
                                <div class="w-1/2">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, voluptatem?
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">Slide 3</div>
                        <div class="swiper-slide">Slide 4</div>
                        <div class="swiper-slide">Slide 5</div>
                        <div class="swiper-slide">Slide 6</div>
                        <div class="swiper-slide">Slide 7</div>
                        <div class="swiper-slide">Slide 8</div>
                        <div class="swiper-slide">Slide 9</div>
                    </div>
                    <div class="swiper-scrollbar"></div>
                </div>
            </div>
         </section>
        <!-- /Section Hero -->

        <!-- About Section -->
        <section id="tentang"class="pt-36" >
            <div class="max-w-7xl mx-auto md:px-4 sm:px-6 lg:px-8 bg-white rounded-3xl shadow p-8 mt-6">
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
                                <div class="text-3xl font-bold text-blue-600">2000+</div>
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
        <!-- /about section -->

        <!-- Gedung section -->
        <section class="py-20" id="fasilitas">
            <div class=" max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                    <!-- Building Cards -->
                    <div class="bg-white rounded shadow-xl overflow-hidden card-hover hover:shadow-2xl transition-shadow text-left">
                        <div class="h-56 flex items-center justify-center">
                            <img src="<?= base_url('images/core/bg-balatkop1.jpeg') ?>" alt="Gedung Office">
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-bold text-blue-600 mb-4">Gedung Office</h3>
                            <div class="space-y-2 mb-4">
                                <div class="flex items-center text-gray-700">
                                    <span class="mr-2">Bangunan utama dimana karyawan bekerja</span>
                                </div>
                            </div>
                            <button onclick="openBuildingModal('utama')" class="mt-6 w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">Lihat Detail</button>
                        </div>
                    </div>

                    <div class="bg-white rounded shadow-xl overflow-hidden card-hover hover:shadow-2xl transition-shadow text-left">
                        <div class="h-56 bg-blue-500 flex items-center justify-center">
                            <img src="<?= base_url('images/core/bg-balatkop2.jpeg') ?>" alt="Ruangan Pendukung">
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-bold text-green-600 mb-4">Ruangan Pendukung</h3>
                            <div class="space-y-2 mb-4">
                                <div class="flex items-center text-gray-700">
                                    <p class="mr-2">Ruang pendukung yang ada di Balatkop</p>
                                </div>
                            </div>
                            <button onclick="openBuildingModal('pendukung')" class="mt-6 w-full bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700 transition">Lihat Detail</button>
                        </div>
                    </div>

                    <div class="bg-white rounded shadow-xl overflow-hidden card-hover hover:shadow-2xl transition-shadow text-left">
                        <div class="h-56 bg-blue-500 gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center">
                            <img src="<?= base_url('images/core/bg-balatkop3.jpeg') ?>" alt="Aula">
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-bold text-purple-600 mb-4">Aula</h3>
                            <div class="space-y-2 mb-4">
                                <div class="flex items-center text-gray-700">
                                    <p class="text-gray-600">Gedung besar yang dapat digunakan untuk melakukan berbagai kegiatan</p> 
                                </div>
                            </div>
                            <button onclick="openBuildingModal('publik')" class="mt-6 w-full bg-purple-600 text-white py-3 rounded-lg font-semibold hover:bg-purple-700 transition">Lihat Detail</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /gedung section -->

        <!-- Fasilitas Section -->
        <section id="fasilitas" class="py-20 ">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <p class="text-4xl font-bold text-center mb-12 text-blue-600 section-title bounce-3s">Fasilitas Lengkap</>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Fasilitas Card - Kesehatan -->
                    <button onclick="openModal('kesehatan')" class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg p-6 hover:shadow-lg transition cursor-pointer text-left">
                        <div class="text-3xl mb-4">🏥</div>
                        <h3 class="text-xl font-bold text-blue-600 mb-2">Kesehatan</h3>
                        <p class="text-gray-700 text-sm">Klinik kesehatan dengan kelengkapan p3k</p>
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
                        <div class="text-3xl mb-4">🕌</div>
                        <h3 class="text-xl font-bold text-pink-600 mb-2">Mushola</h3>
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
        <!-- /fasilitas section -->

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
        <!-- /gallery section -->

        <!-- kontak Section -->
        <section id="kontak" class="py-20 bg-blue-600 text-white relative overflow-hidden">
            <div class="w-1/2">
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full -translate-x-1/2 -translate-y-1/2"></div>
                    <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full translate-x-1/2 translate-y-1/2"></div>
                </div>
                <div class="relative flex w-full mx-auto sm:px-6 lg:px-8 text-center">
                    <div class="w-1/2 flex-1">
                        <h2 class="text-4xl md:text-5xl font-bold mb-6">Tertarik untuk Menggunakan Layanan Kami?</h2>
                        <p class="text-xl md:text-2xl mb-10 text-gray-100">Kunjungi atau Hubungi tim kami untuk informasi lebih lanjut</p>
                        <a href="https://wa.me/6289670131732" target="_blank" class="inline-flex items-center gap-3 bg-white text-purple-600 px-10 py-4 rounded-full font-bold hover:bg-gray-100 hover:scale-105 transition-all shadow-2xl">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                            Hubungi Kami Sekarang
                        </a>
                    </div>                             
                </div>
                <!-- Lokasi Kami Section - Full Width -->
                <div class="w-1/2 flex-2">
                    <div class="justify-center">
                        <h3 class="text-xl font-bold mb-4 text-white"></h3>
                    </div>
                    <div class="relative w-full h-64 overflow-hidden shadow-lg">
                        <iframe src="https://maps.google.com/maps?q=Balatkop+UMKM,+Semarang&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div> 
            </div>
        </section>
        <!-- /kontak -->

        <!-- footer -->
        <footer class="bg-gray-900 text-white py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 justify-center">
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

                <!-- Copyright Section -->
                <hr class="border-gray-800 mb-8">
                <div class="text-center text-gray-400 text-sm">
                    <p>© 2026 Sarana dan Prasarana Balatkop UKM Jateng.</p>
                </div>
            </div>
        </footer>
        <!-- /footer -->

        <!-- Modal -->        
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
            document.querySelectorAll('#mobileMenu a').forEach(link => {
                link.addEventListener('click', () => {
                    document.getElementById('mobileMenu').classList.remove('active');
                });
            });
            // Swiper
            const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
            });
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
        <!-- /Script -->
    </body>
</html>