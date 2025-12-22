@extends('layouts.user')

{{-- 
    INJECT CSS KHUSUS 
    Halaman ini menggunakan vr.css untuk layout text dan gambarnya.
--}}
@push('styles')
    <link rel="stylesheet" href="{{ asset('Assets/css/vr.css') }}">
@endpush

@section('content')

    {{-- HEADER SECTION --}}
    {{-- Class 'home' tetap dipertahankan agar background dari vr.css terpanggil --}}
    <section class="home">
        <div class="home-box">
            {{-- Navbar dihapus (sudah ada di layout) --}}
            
            <div class="content">
                <div class="content-header">
                    <h5>Tentang Dtulip Cake & Cookies</h5>
                    <h1>Hai!, Selamat Datang</h1>
                    <p>
                        Dtulip Cake & Cookies adalah UMKM rumahan yang menghadirkan berbagai pilihan kue kering
                        dan kue basah dengan cita rasa rumahan yang konsisten dan berkualitas. Kami berkomitmen
                        untuk menyajikan produk yang lezat, aman, dan dibuat dengan sepenuh hati untuk setiap
                        momen spesial Anda. <a href="#portofolio" class="text-warning">Klik disini</a> untuk mengenal kami lebih dekat.
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- END HEADER --}}

    {{-- ABOUT US CONTENT --}}
    {{-- Menggunakan class destinations sesuai kode asli --}}
    <section class="destinations">
        <h4 class="label ms-3">tentang kami</h4>
        <div class="container">
            <div class="container-box">
                <h2 class="heading">Dtulip Cake & Cookies</h2>
                <div class="content">
                    <p>
                        Dtulip Cake & Cookies berdiri sebagai usaha kuliner rumahan yang fokus pada pembuatan
                        aneka kue kering dan kue basah dengan kualitas terbaik. Setiap produk kami dibuat
                        menggunakan bahan pilihan yang halal, segar, dan berkualitas, serta diproses secara
                        higienis untuk menjaga rasa dan keamanan produk.
                        <br><br>
                        Kami melayani berbagai kebutuhan, mulai dari camilan harian, suguhan acara keluarga,
                        arisan, hingga pesanan khusus untuk event dan kebutuhan lainnya. Dengan pelayanan yang
                        ramah, cepat, dan responsif, Dtulip Cake & Cookies berkomitmen memberikan pengalaman
                        belanja yang nyaman dan memuaskan bagi setiap pelanggan.
                    </p>
                </div>
            </div>
            
            {{-- Bagian Gambar --}}
            <div class="gallery" id="portofolio">
                <div class="box box1">
                    {{-- Update path gambar ke asset --}}
                    <img src="{{ asset('Assets/image/vr.png') }}" alt="">
                    <div class="text">
                        <h2>dibuat dengan rasa & kualitas terbaik</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- END ABOUT US --}}

@endsection

@push('scripts')
{{-- Script Swiper disertakan untuk menjaga konsistensi kode asli --}}
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