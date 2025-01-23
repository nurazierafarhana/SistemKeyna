
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Keyna Cafe</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free HTML Templates" name="keywords">
        <meta content="Free HTML Templates" name="description">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Favicon -->
        <link href="/img/logo.png" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>


    <body>        
        <div class="admin-container">
            <nav x-data="{ open: false }" class="bg-white border-b border-gray-100 relative z-[1050]">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
            
                        <!-- Logo -->
                        <div class="shrink-0 flex items-center pr-4">
                            <a href="{{ route('admin.index') }}"> <!-- Adjust the route if needed -->
                                <img src="{{ asset('img/logo.png') }}" alt="Logo" class="custom-logo-size">
                            </a>
                        </div>
            
                        <!-- Admin Header Text Beside Logo -->
                        <div class="flex items-center text-lg font-semibold text-gray-700 ml-4">
                            Keyna Cafe Manager Admin
                        </div>
            
                        </div>
            
                        <!-- Right Side with Icons -->
                        <div class="hidden sm:flex sm:items-center sm:ms-6 space-x-8">
            
                            <!-- Home Icon (FontAwesome) -->
                            <a href="{{ route('admin.index') }}" class="text-gray-500 hover:text-gray-700" title="Utama">
                                <i class="fas fa-home"></i>
                            </a>
            
                            <!-- Clipboard List Icon (FontAwesome) -->
                            <a href="{{ route('admin.index') }}" class="text-gray-500 hover:text-gray-700"  title="Pesanan">
                                <i class="fas fa-shopping-cart"></i>
                            </a>
            
                            <!-- Clipboard List Icon (FontAwesome) -->
                            <a href="{{ route('admin.index') }}" class="text-gray-500 hover:text-gray-700"  title="Troli">
                                <i class="fas fa-clipboard-list"></i>
                            </a>
            
                        </div>
            
                        <!-- Hamburger for Mobile -->
                        <div class="-me-2 flex items-center sm:hidden">
                            <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            
                <!-- Responsive Navigation Menu -->
                <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                    <div class="pt-2 pb-3 space-y-1">
                        <x-responsive-nav-link :href="route('admin.index')" :active="request()->routeIs('admin.index')">
                            {{ __('Admin Dashboard') }}
                        </x-responsive-nav-link>
                    </div>
                </div>
            </nav>
            
            <div class="admin-content">
                {{ $slot }}
            </div>
        </div>
        

    <!-- Footer Start -->
    <div class="container-fluid footer bg-light py-5" id="footer" style="margin-top: 90px;">
        <div class="container text-center py-5">
            <div class="row">
                <div class="col-12 mb-4">
                    <a href="index.html" class="navbar-brand m-0">
                        <h1 class="m-0 mt-n2 display-4 text-primary">
                            <img src="img/logo.png" alt="Logo" style="max-width: 30%; height: auto;">
                        </h1>
                    </a>
                </div>
                <div class="col-12 mb-4">
                    <a class="btn btn-outline-secondary btn-social mr-2" href="https://www.facebook.com/profile.php?id=100085545997707"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-secondary btn-social" href="https://www.instagram.com/keynacafe?igsh=Z3J4M3A1OHJsMDAw"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-secondary btn-social" href="https://wa.link/cuoclu" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    <a class="btn btn-outline-secondary btn-social" href="https://www.tiktok.com/@keynacafe.tanjungmalim?is_from_webapp=1&sender_device=pc" target="_blank">
                        <i class="fab fa-tiktok"></i>
                    </a>
                </div>
                <div class="col-12 mt-2 mb-4">
                    <div class="row">
                        <div class="col-sm-6 text-center text-sm-right border-right mb-3 mb-sm-0">
                            <h5 class="font-weight-bold mb-2">Hubungi kami</h5>
                            <p class="mb-2">No.27, Jalan U1/1, Taman Universiti, 35900 Tanjung Malim, Perak (Depan Pintu Timur).</p>
                            <p class="mb-0">+60 10-257 4506</p>
                        </div>
                        <div class="col-sm-6 text-center text-sm-left">
                            <h5 class="font-weight-bold mb-2">Waktu Beroperasi</h5>
                            <p class="mb-2">Isnin – Sabtu, 11AM – 10PM</p>
                            <p class="mb-0">Ahad: Tutup</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <p class="m-0">&copy; {{ date('Y') }} Keyna Cafe - Hakcipta Terpelihara.</p>
                </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>


<!-- resources/views/components/admin-layout.blade.php -->
