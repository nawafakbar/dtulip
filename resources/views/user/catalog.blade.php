@extends('layouts.user')

{{-- 
    BAGIAN INI PENTING! 
    Kita memasukkan 'vila.css' khusus untuk halaman ini agar background dan styling-nya 
    sesuai dengan file HTML asli (produk.html).
--}}
@push('styles')
    <link rel="stylesheet" href="{{ asset('Assets/css/vila.css') }}">
@endpush

@section('content')

    {{-- HEADER / HERO SECTION --}}
    {{-- Class 'home' ini akan mengambil style dari vila.css (background berbeda) --}}
    <section class="home">
        <div class="home-box">
            <div class="content">
                <div class="content-header">
                    <h5>Semua Produk De'tulip Cake & Cookies</h5>
                    <h1>Hai!, Selamat Datang</h1>
                    <p>
                        Temukan berbagai pilihan kue kering, kue basah, dan hampers spesial dari De'tulip Cake & Cookies.
                        Semua produk kami dibuat dengan bahan berkualitas, rasa terbaik, dan penuh perhatian di setiap
                        prosesnya.
                        Cocok untuk camilan harian, acara keluarga, hingga hadiah untuk orang terkasih.
                        <a href="#portofolio" class="text-warning">Klik disini</a> untuk melihat semua produk!
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- END HEADER --}}

    {{-- PRODUK SECTION --}}
    <section class="feedback semua" id="portofolio">
        <div class="container py-0  ">
            <h1 class="text-center text-pm mb-5">Semua Produk</h1>

            <div class="swiper portofolio-swiper">
                {{-- Menggunakan Row G-3 sesuai kodingan asli --}}
                <div class="row g-3">
                    
                    {{-- LOOPING DATABASE --}}
                    @forelse($products as $product)
                    <div class="col-4 col-md-2 mb-4">
                        <div class="card shadow" style="border: none;">
                            
                            {{-- GAMBAR DARI STORAGE --}}
                            <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                            
                            <div class="position-relative">
                                {{-- BUTTON SHOP NOW --}}
                                <a href="{{ route('product.detail', $product->slug) }}">
                                    <button class="btnn btn-hijau position-absolute top-50 start-50 translate-middle">Shop Now</button>
                                </a>
                            </div>

                            <div class="card-body text-center">
                                {{-- NAMA PRODUK (Class 'iii' dari vila.css) --}}
                                <p class="iii d-block">{{ $product->name }}</p>
                                
                                {{-- HARGA (Class 'price') --}}
                                <h5 class="price card-title fw-bold">Rp. {{ number_format($product->discount_price, 0, ',', '.') }}</h5>
                                <p class="baris card-text text-decoration-line-through text-danger" style="font-size: 12px;">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                                
                                {{-- VIEW DETAILS (Class 'xxx') --}}
                                <a href="{{ route('product.detail', $product->slug) }}" class="xxx text-decoration-none text-primary">View Details.</a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12 text-center">
                        <p>Produk belum tersedia.</p>
                    </div>
                    @endforelse

                </div>
            </div>
        </div>
    </section>
    {{-- END PRODUK --}}

@endsection

@push('scripts')
{{-- Script Swiper KHUSUS halaman ini (slides per view 3) --}}
<script>
    var swiper = new Swiper(".portofolio-swiper", {
        slidesPerView: 3,
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
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
    });
</script>
@endpush