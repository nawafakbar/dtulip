@extends('layouts.user')

@section('content')

    {{-- HEADER / HERO SECTION --}}
    {{-- Saya pertahankan class 'home' dan 'home-box' persis seperti HTML asli --}}
    <section class="home">
        <div class="home-box">
            {{-- Navbar dihapus dari sini karena sudah ada di Layout --}}
            
            <div class="content">
                <div class="content-header">
                    <h5>UMKM Lokal - Kota Padang</h5>
                    <h1>Dtulip Cake & Cookies</h1>
                    <p>Menyediakan berbagai aneka kue kering, kue basah, dan special homemade dessert berkualitas
                        premium.
                        Dibuat fresh setiap hari untuk menghadirkan rasa terbaik bagi keluarga Anda.</p>

                    <div class="search">
                        <i class="fa-solid fa-search"></i>
                        <input type="text" placeholder="Cari produk kue favoritmu di Dtulip Cake & Cookies...">
                        <a href="#">Cari</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- END HEADER --}}

    {{-- VR / KATALOG SECTION --}}
    <section class="destinations">
        <h4 class="label ms-3">katalog produk</h4>
        <div class="container">
            <div class="container-box">
                <h2 class="heading">Dtulip Cake & Cookies</h2>
                <div class="content">
                    <p>Selamat datang di website resmi Dtulip Cake & Cookies.
                        Temukan berbagai pilihan cookies premium, cake lembut homemade, hingga paket hampers untuk
                        hadiah spesial.
                        Semua dibuat dengan bahan pilihan dan tanpa pengawet.</p>
                    <a href="#portofolio">lihat katalog <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="gallery">
                <div class="box box1">
                    {{-- Pastikan asset mengarah ke folder public --}}
                    <img src="{{ asset('Assets/image/vr.png') }}" alt="">
                    <div class="text">
                        <h2>jelajahi produk terbaik kami</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- END VR --}}

    {{-- CARD PRODUK  --}}
    <section class="feedback" id="portofolio">
        <div class="container py-5">
            <h1 class="text-center text-light mb-5">Produk Favorit</h1>

            <div class="swiper portofolio-swiper">
                <div class="swiper-wrapper">

                    {{-- LOOPING LARAVEL --}}
                    @forelse($products as $product)
                    <div class="swiper-slide">
                        <div class="card shadow">
                            {{-- GAMBAR PRODUK --}}
                            <img src="{{ asset('storage/' . $product->image) }}" class="card-img-topp" alt="{{ $product->name }}" style="border: 1px solid #fff;">
                            
                            <div class="position-relative">
                                {{-- TOMBOL SHOP NOW --}}
                                {{-- Saya pakai onclick javascript agar tidak perlu membungkus pakai <a> yang bisa merusak posisi CSS --}}
                                <button onclick="window.location.href='{{ route('product.detail', $product->slug) }}'" 
                                        class="btnn btn-card position-absolute top-50 start-50 translate-middle">
                                    Shop Now
                                </button>
                            </div>

                            <div class="card-body text-center">
                                {{-- KATEGORI (Menggunakan class yyy sesuai template) --}}
                                <p class="yyy">{{ $product->name ?? 'Aneka Kue' }}</p>
                                
                                {{-- HARGA --}}
                                <h5 class="card-title fw-bold">Rp {{ number_format($product->discount_price, 0, ',', '.') }}</h5>
                                
                                {{-- NAMA PRODUK --}}
                                <p class="baris card-text text-decoration-line-through text-danger" style="font-size: 12px;">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                                
                                {{-- LINK DETAIL --}}
                                <a href="{{ route('product.detail', $product->slug) }}" class="text-decoration-none text-primary">Detail Produk</a>
                            </div>
                        </div>
                    </div>
                    @empty
                    {{-- JIKA KOSONG --}}
                    <div class="swiper-slide">
                        <div class="card shadow">
                             <div class="card-body text-center">
                                 <p class="yyy">Maaf</p>
                                 <h5 class="card-title fw-bold">-</h5>
                                 <p class="baris card-text">Produk belum tersedia</p>
                             </div>
                        </div>
                    </div>
                    @endforelse

                </div>

                <div class="d-flex align-item-center justify-content-end gap-3 mt-3">
                    <button class="btn btn-light d-flex align-item-center justify-content-center btn-next">
                        <i class="bx bx-left-arrow-alt fs-5"></i>
                    </button>
                    <button class="btn btn-light d-flex align-item-center justify-content-center btn-prev">
                        <i class="bx bx-right-arrow-alt fs-5"></i>
                    </button>
                </div>
            </div>

        </div>
    </section>
    {{-- END CARD PRODUK  --}}

    {{-- KENAPA HARUS DTULIP --}}
    <section class="article">
        <h4 class="label ms-3">kenapa memilih Dtulip</h4>
        <h2 class="heading ms-3">Keunggulan Produk Kami</h2>
        <div class="container">
            <div class="latest-article">
                <img src="{{ asset('Assets/image/handmade.jpg') }}" alt="">
                <p>Homemade Quality</p>
                <h3>Setiap produk dibuat fresh, higienis, dan berkualitas premium untuk keluarga Anda.</h3>
                <div class="author">
                    <img src="{{ asset('Assets/image/logomain.png') }}" alt="">
                    <p>Dtulip Cake & Cookies</p>
                </div>
            </div>
            <div class="more-article">
                <div class="box box1">
                    <div class="image">
                        <img src="{{ asset('Assets/image/instagramable.jpg') }}" alt="">
                    </div>
                    <div class="text">
                        <h3>Tampilan cantik & instagramable — cocok untuk hadiah atau hampers</h3>
                        <li>Perfect for gifting</li>
                    </div>
                </div>
                <div class="box box2">
                    <div class="image">
                        <img src="{{ asset('Assets/image/brownies.jpg') }}" alt="">
                    </div>
                    <div class="text">
                        <h3>Rasa autentik khas homemade, tidak gunakan pengawet berbahaya</h3>
                        <li>Pure & premium taste</li>
                    </div>
                </div>
                <div class="box box3">
                    <div class="image">
                        <img src="{{ asset('Assets/image/aneka.jpg') }}" alt="">
                    </div>
                    <div class="text">
                        <h3>Pilihan varian lengkap: cookies, cake, dessert box, brownies, dan lainnya</h3>
                        <li>One stop bakery</li>
                    </div>
                </div>
                <div class="box box4">
                    <div class="image">
                        <img src="{{ asset('Assets/image/lebaran.jpg') }}" alt="">
                    </div>
                    <div class="text">
                        <h3>Pesan untuk acara spesial: ulang tahun, arisan, syukuran, hingga hampers event</h3>
                        <li>Custom order available</li>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- END SECTION --}}

@endsection

@push('scripts')
{{-- Script Swiper KHUSUS halaman ini, sesuai permintaan struktur HTML kamu --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var swiper = new Swiper(".portofolio-swiper", {
            slidesPerView: 4,
            spaceBetween: 30,
            navigation: {
                nextEl: ".btn-prev",
                prevEl: ".btn-next",
            },
            breakpoints: {
                320: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                480: {
                    slidesPerView: 5, // Sesuai kodingan HTML aslimu
                    spaceBetween: 10,
                }
            },
        });
    });
</script>
@endpush