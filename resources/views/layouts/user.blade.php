<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'Dtulip Cake & Cookies')</title>
    
    {{-- Favicon (Ganti logo di folder Assets/image) --}}
    <link rel="icon" type="image/png" href="{{ asset('Assets/image/logomain.png') }}">

    {{-- CSS Libraries --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Assets/boxicons/css/boxicons.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    {{-- Custom CSS DTulip --}}
    <link rel="stylesheet" href="{{ asset('Assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/css/chatbot.css') }}">

    <style>
        /* CSS Tambahan agar Navbar tidak menumpuk konten di halaman selain Home */
        body {
            background-color: #fcfcfc; /* Sesuaikan warna background */
        }
        a { text-decoration: none; }
        
        /* Dropdown Menu untuk User Login */
        .user-dropdown {
            position: relative;
            display: inline-block;
        }
        .user-dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            background-color: #fff;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 999;
            border-radius: 10px;
            overflow: hidden;
        }
        .user-dropdown-content a {
            color: #5A3E2B;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-size: 14px;
        }
        .user-dropdown-content a:hover {
            background-color: #C68642;
        }
        .user-dropdown:hover .user-dropdown-content {display: block;}
    </style>
    
    @stack('styles')
</head>

<body>
    {{-- TOMBOL BACK TO TOP & WHATSAPP --}}
    <button id="backToTopBtn" class="back-to-top">
        <a href="https://wa.me/085759873301?text=Halo%20kak,%20saya%20mau%20tanya%20tentang%20produk%20di%20Dtulip%20Cake%20%26%20Cookies." 
        target="_blank" 
        class="whatsapp-btn">
            <i class="fab fa-whatsapp"></i>
        </a>
        <i class="fas fa-arrow-up"></i>
    </button>

    {{-- HEADER / NAVBAR --}}
    {{-- Kita bungkus nav dalam section home-box agar stylingnya jalan --}}
    <section class="home" style="min-height: auto; height: auto; padding-bottom: 0px;">
        <div class="home-box">
            <nav>
                <div class="logo bars">
                    <div class="bar">
                        <i class="fa fa-bars"></i>
                    </div>
                    <img src="{{ asset('Assets/image/logomain.png') }}" alt="Logo" style="width: 30px; gap: 0.2rem;" id="logo_hilang">
                    <h5 style="font-weight: 500;" class="mt-2">Dtulip Cake & Cookies</h5>
                </div>
                
                <div class="menu">
                    <div class="close">
                        <i class="fa fa-close"></i>
                    </div>
                    <ul class="mt-3">
                        {{-- Link Beranda --}}
                        <li>
                            <a href="{{ route('home') }}" 
                            style="{{ request()->routeIs('home') ? 'color: #5A3E2B; background-color: white; border-radius: 1rem; padding: 0.2rem 1rem;' : '' }}">
                            Beranda
                            </a>
                        </li>

                        {{-- Link Beli Sekarang (Tetap di Home section Portofolio) --}}
                        <li><a href="{{ route('home') }}#portofolio">Beli Sekarang</a></li>

                        {{-- Link Katalog (Mengarah ke Route 'catalog') --}}
                        <li>
                            <a href="{{ route('catalog') }}"
                            style="{{ request()->routeIs('catalog') ? 'color: #5A3E2B; background-color: white; border-radius: 1rem; padding: 0.2rem 1rem;' : '' }}">
                            Katalog
                            </a>
                        </li>

                        {{-- Link Keunggulan (Mengarah ke Route 'features') --}}
                        <li>
                            <a href="{{ route('features') }}"
                            style="{{ request()->routeIs('features') ? 'color: #5A3E2B; background-color: white; border-radius: 1rem; padding: 0.2rem 1rem;' : '' }}">
                            Keunggulan
                            </a>
                        </li>

                        {{-- Link Tentang Kami (Mengarah ke Route 'about') --}}
                        <li>
                            <a href="{{ route('about') }}"
                            style="{{ request()->routeIs('about') ? 'color: #5A3E2B; background-color: white; border-radius: 1rem; padding: 0.2rem 1rem;' : '' }}">
                            Tentang Kami
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="signup-login d-flex align-items-center gap-3">
                    {{-- Keranjang Belanja --}}
                    <a href="{{ route('cart.index') }}" title="Keranjang">
                        <i class="fa-solid fa-shopping-cart"></i>
                    </a>

                    {{-- Logika Authentication Laravel --}}
                    @guest
                        {{-- Jika Belum Login --}}
                        <a href="{{ route('login') }}" style="font-size: 1rem;">Login</a>
                    @else
                        {{-- Jika Sudah Login (Tampilkan Nama & Logout) --}}
                        <div class="user-dropdown">
                            <a href="#" style="font-size: 1rem; font-weight: bold;">
                                <i class="fa-solid fa-user me-1"></i>                             </a>
                            <div class="user-dropdown-content" style="background: #C68642;">
                                <a href="{{ route('profile.edit') }}">Profil Saya</a>
                                <a href="{{ route('orders.index') }}">Pesanan Saya</a>
                                <hr style="margin: 0;">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    @endguest
                </div>
            </nav>
        </div>
    </section>

    {{-- KONTEN UTAMA (Akan diisi oleh index.blade.php, cart.blade.php, dll) --}}
    <main>
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer>
        <section class="footer">
            <div class="container">
                <div class="detail">
                    <h3>Dtulip Cake & Cookies</h3>
                    <a href="" style="text-align: justify; margin-bottom: 20px;">
                        Kota Padang, Sumatera Barat – Produksi & pengiriman kue ke seluruh wilayah sekitar.
                    </a>
                    <h5>contact us</h5>
                    <a href="mailto:dtulipcakeandcookies@mail.com">dtulipcakeandcookies@mail.com</a>
                    <div class="social">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com/bgd_hydrofarm/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>

                <div class="about-us">
                    <h4>informasi</h4>
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#">Kebijakan Toko</a></li>
                    <li><a href="#">Karier</a></li>
                </div>

                <div class="about-us">
                    <h4>bantuan</h4>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Lokasi Kami</a></li>
                </div>

                <div class="about-us">
                    <h4>lainnya</h4>
                    <li><a href="#">Galeri</a></li>
                    <li><a href="#">Promo</a></li>
                </div>
            </div>

            <div class="copyright">
                <div>
                    &copy;2025 - Dtulip Cake & Cookies. All rights reserved.
                </div>
            </div>
        </section>
    </footer>

    {{-- SCRIPTS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    {{-- Custom Script DTulip --}}
    <script src="{{ asset('Assets/js/script.js') }}"></script>
    <script src="{{ asset('Assets/js/chatbot.js') }}"></script>
    <script>
        function toggleChatbot() {
        const popup = document.getElementById('chatbotPopup');
        popup.style.display = popup.style.display === 'flex' ? 'none' : 'flex';
    }

    function sendChat() {
        const input = document.getElementById('chatbotInput');
        const body = document.getElementById('chatbotBody');
        const message = input.value.trim();

        if (!message) return;

        body.innerHTML += `<div class="user-message">${message}</div>`;
        input.value = '';
        body.scrollTop = body.scrollHeight;

        fetch("{{ route('chatbot.send') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({ message })
        })
        .then(res => res.json())
        .then(data => {
            body.innerHTML += `<div class="bot-message">${data.reply}</div>`;
            body.scrollTop = body.scrollHeight;
        });
    }
    </script>
    
    @stack('scripts')
</body>
</html>