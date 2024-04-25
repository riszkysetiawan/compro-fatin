@extends('partials.index')
@section('container')
    {{-- section 1 start --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            {{-- banner 1 --}}
            <div class="carousel-item active">
                <div class="induk-kolom row bg-body-tertiary">
                    <div class="col-md-8">
                        <div class="p-5 mb-4 rounded-3">
                            <div class="container-fluid py-5">
                                <h1 class="display-5 fw-bold">Website Design & Development</h1>
                                <h3 class="fw-bold">Wujudkan Website Impian Anda dengan Satu Solusi Tepat!</h3>
                                <p class="col-md-7 fs-4 pt-4  p-0 m-0">Dapatkan kemudahan dalam membuat website
                                    seperti
                                    yang kamu
                                    inginkan.
                                    Website langsung siap pakai!</p>
                                <button class="btn mt-3 rounded-pill text-white btn-lg" type="button"
                                    style="background-color: #C24914">Konsultasi Gratis</button>
                            </div>
                        </div>
                    </div>
                    <div class="kolom-2 col-md-4  d-flex justify-content-center align-items-lg-center">
                        <img src="{{ asset('slider/slider1.png') }}" alt="Nama Gambar" class="img-fluid rounded-pill"
                            style="background-color: yellow" width="1000px">
                    </div>
                </div>
            </div>
            {{-- banner 2 --}}
            <div class="carousel-item">
                <div class="induk-kolom row bg-body-tertiary">
                    <div class="col-md-8">
                        <div class="p-5 mb-4 rounded-3">
                            <div class="container-fluid py-5">
                                <h1 class="display-5 fw-bold">Commercial Photography</h1>
                                <h3 class=" fw-bold">Produk terbaik, gambar terbaik!</h3>
                                <p class="col-md-8 fs-4 pt-4  p-0 m-0">Tingkatkan eksposur merek Anda dengan foto-foto
                                    berkualitas
                                    tinggi. Hubungi kami untuk mendapatkan penawaran spesial!</p>
                                <button class="btn mt-3 rounded-pill text-black btn-lg" type="button"
                                    style="background-color: yellow">Konsultasi Gratis</button>
                            </div>
                        </div>
                    </div>
                    <div class="kolom-2 col-md-4  d-flex justify-content-center align-items-lg-center">
                        <img src="{{ asset('slider/slider1.png') }}" alt="Nama Gambar" class="img-fluid rounded-pill"
                            style="background-color: yellow" width="1000px">
                    </div>
                </div>
            </div>
            {{-- banner 3 --}}
            <div class="carousel-item ">
                <div class="induk-kolom row bg-body-tertiary">
                    <div class="col-md-8">
                        <div class="p-5 mb-4 rounded-3">
                            <div class="container-fluid py-5">
                                <h1 class="display-5 fw-bold">Social Media Management</h1>
                                <h3 class=" fw-bold">Produk terbaik, gambar terbaik!</h3>
                                <p class="col-md-8 fs-4 pt-4  p-0 m-0">Tingkatkan eksposur merek Anda dengan foto-foto
                                    berkualitas tinggi. Hubungi kami untuk mendapatkan penawaran spesial!</p>
                                <button class="btn mt-3 rounded-pill text-white btn-lg" type="button"
                                    style="background-color: #C24914">Konsultasi Gratis</button>
                            </div>
                        </div>
                    </div>
                    <div class="kolom-2 col-md-4  d-flex justify-content-center align-items-lg-center">
                        <img src="{{ asset('slider/slider1.png') }}" alt="Nama Gambar" class="img-fluid rounded-pill"
                            style="background-color: yellow" width="1000px">
                    </div>
                </div>
            </div>
        </div>
        <!-- Tombol navigasi Carousel -->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    {{-- section 1 end --}}
    {{-- section 2 start --}}
    <div class=" portofolio my-5" style="background-color: #FAEA4F">
        <h3 class="text-center py-5">Portofolio Gawl Studio</h3>
        <div class="container">
            <div class="content-portofolio d-flex justify-content-center flex-wrap">
                <div class="kartu-portofolio py-4 mx-2">
                    <img src="{{ asset('portofolio/porto1.png') }}" alt="porto" width="250px">
                    <div class="informasi-card text-center pt-3">
                        <h5 class="">Nama Website</h5>
                        <a href=""class="btn rounded-pill text-white" style="background-color: #C24914">Lihat
                            Website</a>
                    </div>
                </div>
                <div class="kartu-portofolio py-4 mx-2">
                    <img src="{{ asset('portofolio/porto1.png') }}" alt="porto" width="250px">
                    <div class="informasi-card text-center pt-3">
                        <h5 class="">Nama Website</h5>
                        <a href=""class="btn rounded-pill text-white" style="background-color: #C24914">Lihat
                            Website</a>
                    </div>
                </div>
                <div class="kartu-portofolio py-4 mx-2">
                    <img src="{{ asset('portofolio/porto1.png') }}" alt="porto" width="250px">
                    <div class="informasi-card text-center pt-3">
                        <h5 class="">Nama Website</h5>
                        <a href=""class="btn rounded-pill text-white" style="background-color: #C24914">Lihat
                            Website</a>
                    </div>
                </div>
                <div class="kartu-portofolio py-4 mx-2">
                    <img src="{{ asset('portofolio/porto1.png') }}" alt="porto" width="250px">
                    <div class="informasi-card text-center pt-3">
                        <h5 class="">Nama Website</h5>
                        <a href=""class="btn rounded-pill text-white" style="background-color: #C24914">Lihat
                            Website</a>
                    </div>
                </div>
                <div class="kartu-portofolio py-4 mx-2">
                    <img src="{{ asset('portofolio/porto1.png') }}" alt="porto" width="250px">
                    <div class="informasi-card text-center pt-3">
                        <h5 class="">Nama Website</h5>
                        <a href=""class="btn rounded-pill text-white" style="background-color: #C24914">Lihat
                            Website</a>
                    </div>
                </div>
                <div class="kartu-portofolio py-4 mx-2">
                    <img src="{{ asset('portofolio/porto1.png') }}" alt="porto" width="250px">
                    <div class="informasi-card text-center pt-3">
                        <h5 class="">Nama Website</h5>
                        <a href=""class="btn rounded-pill text-white" style="background-color: #C24914">Lihat
                            Website</a>
                    </div>
                </div>
                <div class="kartu-portofolio py-4 mx-2">
                    <img src="{{ asset('portofolio/porto1.png') }}" alt="porto" width="250px">
                    <div class="informasi-card text-center pt-3">
                        <h5 class="">Nama Website</h5>
                        <a href=""class="btn rounded-pill text-white" style="background-color: #C24914">Lihat
                            Website</a>
                    </div>
                </div>
                <div class="kartu-portofolio py-4 mx-2">
                    <img src="{{ asset('portofolio/porto1.png') }}" alt="porto" width="250px">
                    <div class="informasi-card text-center pt-3">
                        <h5 class="">Nama Website</h5>
                        <a href=""class="btn rounded-pill text-white" style="background-color: #C24914">Lihat
                            Website</a>
                    </div>
                </div>
                <div class="kartu-portofolio py-4 mx-2">
                    <img src="{{ asset('portofolio/porto1.png') }}" alt="porto" width="250px">
                    <div class="informasi-card text-center pt-3">
                        <h5 class="">Nama Website</h5>
                        <a href=""class="btn rounded-pill text-white" style="background-color: #C24914">Lihat
                            Website</a>
                    </div>
                </div>
                <div class="kartu-portofolio py-4 mx-2">
                    <img src="{{ asset('portofolio/porto1.png') }}" alt="porto" width="250px">
                    <div class="informasi-card text-center pt-3">
                        <h5 class="">Nama Website</h5>
                        <a href=""class="btn rounded-pill text-white" style="background-color: #C24914">Lihat
                            Website</a>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button id="btn_see" class="btn rounded-pill text-black-50 bg-white">See More</button>
            </div>
        </div>
    </div>
    {{-- section 2 end --}}

    {{-- section 3 start --}}
    <div id="clients" class="clients section-bg">
        <div class="container">
            <h3>Beberapa klien kami yang telah percaya dengan <br>
                <span style="color: #C24914">Jasa Pembuatan Website</span>dari <span style="color: #C24914">Gawl
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
    {{-- section 3 end --}}

    {{-- section 4 start --}}
    <div class="home-4 " style="background-color: #FFD1E3; margin-top: -4rem">
        <div class="container">
            <div style="padding-top: 6rem">
                <h3 class="text-center">Bergabunglah dengan komunitas untuk mengembangkan
                    bisnis Anda dan mendapatkan akses ke sumber daya eksklusif, pelatihan,
                    dan jaringan profesional melalui <span style="color: #C24914">Gawl Studio dan Iwapi</span>
                </h3>
            </div>
            <div class="d-flex justify-content-center" style="margin-top: 1rem ">
                <button class="btn mt-3 mx-5 rounded-pill text-white btn-lg" type="button"
                    style="background-color: #C24914">Kunjungi IWAPI</button>
                <button class="btn mt-3 mx-5 rounded-pill text-white btn-lg" type="button"
                    style="background-color: #C24914">E-catalogue IWAPI</button>
            </div>
        </div>
    </div>
    {{-- sectiuion 4 --}}

    {{-- section 5 --}}
    <div class="home-5 mb-5">
        <div class="container">
            <h4 class="text-center pt-5">Kunjungi website IWAPI atau hubungi IWAPI untuk informasi lebih <br>
                lanjut tentang program dan peluang yang tersedia.</h4>
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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var kontenPortofolio = document.querySelectorAll(".kartu-portofolio");
            var tombolSeeMore = document.querySelector("#btn_see");
            var tombolClose = document.createElement("button");
            tombolClose.innerHTML = "Close";
            tombolClose.classList.add("btn", "rounded-pill", "text-black-50", "bg-white");
            tombolClose.style.display = "none";
            tombolClose.addEventListener("click", function() {
                kontenPortofolio.forEach(function(konten, index) {
                    if (index >= 8) {
                        konten.style.display = "none";
                    }
                });
                tombolClose.style.display = "none";
                tombolSeeMore.style.display = "block";
            });

            function tampilkanSemuaKonten() {
                kontenPortofolio.forEach(function(konten) {
                    konten.style.display = "block";
                });
                tombolSeeMore.style.display = "none";
                tombolClose.style.display = "block";
            }

            for (var i = 8; i < kontenPortofolio.length; i++) {
                kontenPortofolio[i].style.display = "none";
            }

            tombolSeeMore.addEventListener("click", function() {
                tampilkanSemuaKonten();
            });

            var container = document.querySelector(".portofolio .container");
            container.appendChild(tombolClose);

            tombolClose.classList.add("mx-auto", "my-3");
            tombolSeeMore.classList.add("mx-auto", "my-3");
        });
    </script>
@endsection
