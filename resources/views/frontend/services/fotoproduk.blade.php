@extends('partials.index')
@section('container')
    {{-- section 1 --}}
    <div class="services-us-1 py-5">
        <div class="container">
            <h1 class="text-center" style="color: #C24914">Jasa Foto Produk</h1>
            <div class="konten-services-1">
                <h5 class="text-center">Layanan Fotografi produk terlengkap mulai dari katalog foto produk makanan, <br>
                    minuman,
                    baju, dll. di dukungan peralatan, model, dan tim yang profesional
                </h5>
            </div>
        </div>
    </div>
    {{-- section 1 end --}}

    {{-- section 2 --}}
    <div class="konten-jasa-kami">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="foto-jasa">
                        <img src="{{ asset('about/about.png') }}" alt="" id="sliderImage">
                    </div>
                    <div class="button-jasa text-center py-1">
                        <button onclick="prevImage()" class="btn">&#60;</button>
                        <button onclick="nextImage()" class="btn">&#62;</button>
                    </div>
                    <div class="keterangan-jasa">
                        <h6>Katalog</h6>
                        <p>Foto produk dengan berbagai pilihan warna background warna polos. </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="foto-jasa">
                        <img src="{{ asset('about/about.png') }}" alt="" id="sliderImage">
                    </div>
                    <div class="button-jasa text-center py-1">
                        <button onclick="prevImage()" class="btn">&#60;</button>
                        <button onclick="nextImage()" class="btn">&#62;</button>
                    </div>
                    <div class="keterangan-jasa">
                        <h6>Katalog</h6>
                        <p>Foto produk dengan berbagai pilihan warna background warna polos. </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="foto-jasa">
                        <img src="{{ asset('about/about.png') }}" alt="" id="sliderImage">
                    </div>
                    <div class="button-jasa text-center py-1">
                        <button onclick="prevImage()" class="btn">&#60;</button>
                        <button onclick="nextImage()" class="btn">&#62;</button>
                    </div>
                    <div class="keterangan-jasa">
                        <h6>Katalog</h6>
                        <p>Foto produk dengan berbagai pilihan warna background warna polos. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- section 2 --}}

    {{-- section 3 --}}
    <div class="jenis-fotografi pt-5 mt-5">
        <div class="container">
            <h3 class="text-center">Jenis Fotografi</h3>
            <div class="row py-4 my-4">
                <div class="col-md-4">
                    <div class="judul-fotografi text-center">
                        <h5>Foto Produk Baju</h5>
                        <h6>Jasa foto produk pakaian seperti kaos, kemeja, baju celana, dsb.</h6>
                    </div>
                    <div class="foto-produk-fotografi my-3">
                        <img src="{{ asset('about/lampu.png') }}" alt="">
                    </div>
                    <div class="caption-pruk-fotografi">
                        <p class="text-center">
                            Gawl Studio dapat membantu membuat foto produk fashion seperti kaos, baju baik untuk pakaian
                            pria, pakaian wanita hingga pakaian anak-anak.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="judul-fotografi text-center">
                        <h5>Foto Produk Baju</h5>
                        <h6>Jasa foto produk pakaian seperti kaos, kemeja, baju celana, dsb.</h6>
                    </div>
                    <div class="foto-produk-fotografi my-3">
                        <img src="{{ asset('about/lampu.png') }}" alt="">
                    </div>
                    <div class="caption-pruk-fotografi">
                        <p class="text-center">
                            Gawl Studio dapat membantu membuat foto produk fashion seperti kaos, baju baik untuk pakaian
                            pria, pakaian wanita hingga pakaian anak-anak.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="judul-fotografi text-center">
                        <h5>Foto Produk Baju</h5>
                        <h6>Jasa foto produk pakaian seperti kaos, kemeja, baju celana, dsb.</h6>
                    </div>
                    <div class="foto-produk-fotografi my-3">
                        <img src="{{ asset('about/lampu.png') }}" alt="">
                    </div>
                    <div class="caption-pruk-fotografi">
                        <p class="text-center">
                            Gawl Studio dapat membantu membuat foto produk fashion seperti kaos, baju baik untuk pakaian
                            pria, pakaian wanita hingga pakaian anak-anak.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- section 3 end --}}
    {{-- section 4 start --}}
    <div id="clients" class="clients section-bg">
        <div class="container">
            <h3>Beberapa UMKM telah mempercayai <br>
                <span style="color: #C24914">foto produk </span>bersama <span style="color: #C24914">Gawl
                    Studio</span>
            </h3>
            <div class="row justify-content-center pt-4">
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('navbar/ig.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('navbar/ig.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('navbar/ig.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('navbar/ig.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('navbar/ig.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('navbar/ig.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('navbar/ig.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('navbar/twitter.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('navbar/ig.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('navbar/ig.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('navbar/ig.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('navbar/ig.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('navbar/ig.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('navbar/ig.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('navbar/ig.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('navbar/ig.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
    {{-- section 4 end --}}

    {{-- section 5 --}}
    {{-- section 5 --}}
    <div class="home-5 mb-5">
        <div class="container">
            <div class="py-5">
                <h3 class="text-center" style="color: #C24914">Hubungi Kami</h3>
                <h4 class="text-center">Untuk pemesanan jasa dan konsultasi silakan menghubungi kami melalui <br>
                    Whatsapp atau Telpon. Kami siap memberikan solusi terbaik untuk Anda.</h4>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn mt-3 mx-5 rounded-pill text-white btn-lg" type="button"
                    style="background-color: #C24914">CHAT 085XXXXXXXXX</button>
                <button class="btn mt-3 mx-5 rounded-pill text-white btn-lg" type="button"
                    style="background-color: #C24914">CALL 085XXXXXXXXX</button>
            </div>
        </div>
    </div>
    {{-- section 5 end --}}
    {{-- section 5 end --}}
    <script>
        const images = ['about.png', 'about.png', 'about.png'];
        let currentImageIndex = 0;

        function prevImage() {
            currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
            document.getElementById('sliderImage').src = "{{ asset('about/') }}" + images[currentImageIndex];
        }

        function nextImage() {
            currentImageIndex = (currentImageIndex + 1) % images.length;
            document.getElementById('sliderImage').src = "{{ asset('about/') }}" + images[currentImageIndex];
        }
    </script>
@endsection
