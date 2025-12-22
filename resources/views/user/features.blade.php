@extends('layouts.user')

{{-- 
    INJECT CSS KHUSUS HALAMAN INI
    Sesuai request: menggunakan dayatarik.css dan card.css
--}}
@push('styles')
    <link rel="stylesheet" href="{{ asset('Assets/css/dayatarik.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/css/card.css') }}">
@endpush

@section('content')

    {{-- HEADER SECTION --}}
    {{-- Class 'home' tetap ada untuk memanggil background dari dayatarik.css --}}
    <section class="home">
        <div class="home-box">
            {{-- Nav dihapus karena sudah ada di Layout --}}
            
            <div class="content">
                <div class="content-header">
                    <h5>Kenapa memilih Dtulip?</h5>
                    <h1>Kue Lezat untuk Setiap Momen</h1>
                    <p>
                        Dtulip Cake & Cookies menghadirkan berbagai pilihan kue kering, kue basah,
                        dan hampers premium yang dibuat dengan bahan berkualitas dan penuh cinta.
                        <a href="#portofolio" class="text-warning">Klik di sini</a> untuk melihat produk unggulan kami.
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- END HEADER --}}

    {{-- CARD SECTION --}}
    {{-- Struktur class dan ID dipertahankan 100% --}}
    <section class="feedback p-0 mb-5" id="portofolio">
        <h1 class="text-center text-pm mb-5">Produk & Keunggulan Kami</h1>

        <div class="main">
            <div class="swiper portofolio-swiper">
                <div class="swiper-wrapper">
                    <ul class="cards">

                        <li class="cards_item">
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card_image">
                                        <span class="note">Best Seller</span>
                                        {{-- Update path gambar --}}
                                        <img src="{{ asset('Assets/image/kering.png') }}" />
                                        <span class="card_price"><i class='bx bx-cookie'></i></span>
                                    </div>
                                    <div class="card_content">
                                        <h2 class="card_title">Kue Kering Premium</h2>
                                        <div class="card_text">
                                            <p>
                                                Aneka kue kering favorit seperti nastar, kastengel, hingga cookies
                                                modern kami dibuat dengan resep pilihan dan proses produksi yang higienis 
                                                untuk menjaga kualitas rasa di setiap gigitan. Dtulip Cake & Cookies
                                                menggunakan bahan-bahan premium seperti mentega berkualitas, keju
                                                pilihan, dan cokelat terbaik sehingga menghasilkan tekstur yang lembut, 
                                                renyah, dan konsisten.
                                            </p>
                                            <hr />
                                            <p><a href="#">lihat produk <i class='bx bx-right-arrow-alt'></i></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="cards_item">
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card_image">
                                        <span class="note">Favorit</span>
                                        <img src="{{ asset('Assets/image/basah.png') }}" />
                                        <span class="card_price"><i class='bx bx-cake'></i></span>
                                    </div>
                                    <div class="card_content">
                                        <h2 class="card_title">Kue Basah Harian</h2>
                                        <div class="card_text">
                                            <p>
                                                Kue basah Dtulip Cake & Cookies dibuat dengan resep rumahan pilihan yang
                                                telah teruji menghasilkan cita rasa lembut, manis yang pas, dan tekstur 
                                                yang selalu fresh setiap hari. Tanpa pengawet berlebihan, sehingga aman 
                                                dan nikmat untuk dinikmati semua usia. Cocok disajikan untuk berbagai 
                                                acara seperti kumpul keluarga dan arisan.
                                            </p>
                                            <hr />
                                            <p><a href="#">lihat produk <i class='bx bx-right-arrow-alt'></i></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="cards_item">
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card_image">
                                        <img src="{{ asset('Assets/image/order.png') }}" />
                                        <span class="card_price"><i class='bx bx-food-menu'></i></span>
                                    </div>
                                    <div class="card_content">
                                        <h2 class="card_title">Paket Kue & Order</h2>
                                        <div class="card_text">
                                            <p>
                                                Dtulip Cake & Cookies menyediakan berbagai pilihan paket kue kering dan
                                                kue basah yang dapat disesuaikan dengan kebutuhan Anda. Setiap paket dirancang
                                                untuk memberikan kemudahan bagi pelanggan yang ingin memesan kue dalam 
                                                jumlah tertentu tanpa mengurangi kualitas rasa dan tampilan.
                                            </p>
                                            <hr />
                                            <p><a href="#">lihat detail <i class='bx bx-right-arrow-alt'></i></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="cards_item">
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card_image">
                                        <img src="{{ asset('Assets/image/paket.png') }}" />
                                        <span class="card_price"><i class='bx bx-edit'></i></span>
                                    </div>
                                    <div class="card_content">
                                        <h2 class="card_title">Custom Order</h2>
                                        <div class="card_text">
                                            <p>
                                                Bebas melakukan request jumlah, varian rasa, hingga jenis kemasan sesuai
                                                dengan kebutuhan acara Anda. Sangat cocok untuk berbagai kebutuhan 
                                                seperti event kantor, perayaan ulang tahun, pesta keluarga, arisan, 
                                                hingga pesanan khusus dalam jumlah kecil maupun besar.
                                            </p>
                                            <hr />
                                            <p><a href="#">pesan sekarang <i class='bx bx-right-arrow-alt'></i></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="cards_item">
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card_image">
                                        <img src="{{ asset('Assets/image/bahan.png') }}" />
                                        <span class="card_price"><i class='bx bx-check-shield'></i></span>
                                    </div>
                                    <div class="card_content">
                                        <h2 class="card_title">Bahan Berkualitas</h2>
                                        <div class="card_text">
                                            <p>
                                                Kami hanya menggunakan bahan-bahan pilihan yang halal, segar, dan
                                                berkualitas tinggi dalam setiap proses produksi. Seluruh bahan dipilih
                                                dengan cermat untuk memastikan cita rasa tetap konsisten, tekstur
                                                sempurna, serta keamanan produk bagi seluruh pelanggan.
                                            </p>
                                            <hr />
                                            <p><a href="#">selengkapnya <i class='bx bx-right-arrow-alt'></i></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="cards_item">
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card_image">
                                        <img src="{{ asset('Assets/image/pelayanan.png') }}" />
                                        <span class="card_price"><i class='bx bx-smile'></i></span>
                                    </div>
                                    <div class="card_content">
                                        <h2 class="card_title">Pelayanan Ramah</h2>
                                        <div class="card_text">
                                            <p>
                                                Kami siap membantu Anda dengan pelayanan yang cepat, ramah, dan
                                                responsif di setiap proses pemesanan. Tim Dtulip Cake & Cookies selalu
                                                berusaha memberikan pengalaman belanja yang nyaman, mulai dari
                                                konsultasi produk hingga proses pengiriman.
                                            </p>
                                            <hr />
                                            <p><a href="#">hubungi kami <i class='bx bx-right-arrow-alt'></i></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- END CARD --}}

@endsection

@push('scripts')
{{-- Script Swiper KHUSUS HALAMAN INI --}}
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