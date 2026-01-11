@extends('layouts.user')

{{-- 
    INJECT CSS KHUSUS 
    Halaman ini menggunakan vr.css untuk layout text dan gambarnya.
--}}
@push('styles')
    <link rel="stylesheet" href="{{ asset('Assets/css/vr.css') }}">
    
    {{-- Sedikit tambahan CSS inline agar layout kontak rapi tanpa merusak file vr.css asli --}}
    <style>
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-top: 20px;
        }
        .contact-info ul {
            list-style: none;
            padding: 0;
        }
        .contact-info li {
            margin-bottom: 20px;
            font-size: 1rem;
            color: #555; /* Sesuaikan dengan warna teks di vr.css */
        }
        .contact-info strong {
            display: block;
            color: #333;
            font-size: 1.1rem;
            margin-bottom: 5px;
        }
        .contact-info a {
            text-decoration: none;
            color: inherit;
        }
        .contact-info a:hover {
            color: #e67e22; /* Warna orange/gold standar kue */
        }
        /* Responsif untuk layar HP */
        @media (max-width: 768px) {
            .contact-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
@endpush

@section('content')

    {{-- HEADER SECTION --}}
    {{-- Class 'home' tetap dipertahankan agar background dari vr.css terpanggil --}}
    <section class="home">
        <div class="home-box">
            {{-- Navbar dihapus (sudah ada di layout) --}}
            
            <div class="content">
                <div class="content-header">
                    <h5>Tentang De'tulip Cake & Cookies</h5>
                    <h1>Hai!, Selamat Datang</h1>
                    <p>
                        De'tulip Cake & Cookies adalah UMKM rumahan yang menghadirkan berbagai pilihan kue kering
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
                <h2 class="heading">De'tulip Cake & Cookies</h2>
                <div class="content">
                    <p>
                        De'tulip Cake & Cookies berdiri sebagai usaha kuliner rumahan yang fokus pada pembuatan
                        aneka kue kering dan kue basah dengan kualitas terbaik. Setiap produk kami dibuat
                        menggunakan bahan pilihan yang halal, segar, dan berkualitas, serta diproses secara
                        higienis untuk menjaga rasa dan keamanan produk.
                        <br><br>
                        Kami melayani berbagai kebutuhan, mulai dari camilan harian, suguhan acara keluarga,
                        arisan, hingga pesanan khusus untuk event dan kebutuhan lainnya. Dengan pelayanan yang
                        ramah, cepat, dan responsif, De'tulip Cake & Cookies berkomitmen memberikan pengalaman
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

    {{-- 
        SECTION BARU: LOKASI & KONTAK 
        Saya menggunakan class 'destinations' lagi agar style spacing-nya sama dengan atasnya 
    --}}
    <section class="destinations" style="padding-top: 20px;">
        <h4 class="label ms-3">kunjungi kami</h4>
        <div class="container">
            <div class="container-box">
                <h2 class="heading">Lokasi & Kontak</h2>
                
                <div class="content contact-grid">
                    
                    {{-- Kolom Kiri: Informasi Teks --}}
                    <div class="contact-info">
                        <ul>
                            <li>
                                <strong>📍 Alamat Produksi</strong>
                                Jl. [Nama Jalan Lengkap], Kec. [Kecamatan], Kota Padang, Sumatera Barat.
                            </li>
                            <li>
                                <strong>📱 Hubungi Kami (WhatsApp)</strong>
                                <a href="https://wa.me/6281234567890" target="_blank">
                                    +62 812-3456-7890 (Klik untuk Chat)
                                </a>
                            </li>
                            <li>
                                <strong>📷 Instagram</strong>
                                <a href="https://instagram.com/nama_akun_ig" target="_blank">
                                    @nama_akun_ig
                                </a>
                            </li>
                            <li>
                                <strong>⏰ Jam Operasional</strong>
                                Senin - Sabtu: 08.00 - 17.00 WIB<br>
                                Minggu: Tutup (By Appointment)
                            </li>
                        </ul>
                    </div>

                    {{-- Kolom Kanan: Google Maps --}}
                    <div class="map-container">
                        {{-- 
                            TIPS: Ganti src di dalam iframe di bawah dengan link embed Google Maps lokasi asli.
                            Caranya: Buka Google Maps > Cari Lokasi > Share > Embed a map > Copy HTML 
                        --}}
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3100492018316!2d100.3542!3d-0.9145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b942e2b117bb%3A0x5847b97371c67a3!2sPadang%2C%20Kota%20Padang%2C%20Sumatera%20Barat!5e0!3m2!1sid!2sid!4v1625634567890!5m2!1sid!2sid" 
                            width="100%" 
                            height="350" 
                            style="border:0; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- END SECTION KONTAK --}}

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