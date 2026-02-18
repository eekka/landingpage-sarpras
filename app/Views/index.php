<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sarana Prasarana Balatkop Jateng</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<style>
/* font */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap');
/* menu navbar-humbergermenu */
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
    .mobile-menu {
        display: none;
    }
    .mobile-menu.active {
        display: block;
    }
</style>
    <!-- navbar -->
     <nav class="bg-white shadow-lg sticky top-0 z-50 backdrop-blur-lg bg-opacity-90">
        <div class="px-4 sm:px-6 lg:px-8">         
            <div class="flex justify-between items-center h-20">
                <!-- logo -->
                <div class="flex items-center gap-3 slide-in">
                    <a href="#home" class="flex items-center group">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center mr-3 group-hover:scale-110 transition-transform">
                            <img src="<?= base_url('images/core/logo-balatkop.jpeg') ?>" alt="Logo BalatKop" class="w-12 h-12 mr-2 inline-block rounded-full">
                        </div>
                        <h2 class="text-2xl text-blue-600 font-bold gradient-text">SarPras BalatKop</h2>
                    </a>
                </div>
                <!-- menu -->
                <div class="hidden md:flex ">
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
    
    

    <!-- Script -->
     <script>
        // Navigation active state
        /* Menu Toggle */
        function toggleMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('active');
        }

        /* Close menu on link click */
        document.querySelectorAll('#mobileMenu a').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('mobileMenu').classList.remove('active');
            });
        });
     </script>
    <!-- /Script -->
</body>
</html>