@extends('partials.index')
@section('container')
    {{-- section 1 start --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            {{-- banner 1 --}}
            <div class="carousel-item active">
                <div class="row bg-body-tertiary">
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
                    <div class="col-md-4  d-flex justify-content-center align-items-lg-center">
                        <img src="{{ asset('slider/slider1.png') }}" alt="Nama Gambar" class="img-fluid rounded-pill"
                            style="background-color: yellow" width="1000px">
                    </div>
                </div>
            </div>
            {{-- banner 2 --}}
            <div class="carousel-item">
                <div class="row bg-body-tertiary">
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
                    <div class="col-md-4  d-flex justify-content-center align-items-lg-center">
                        <img src="{{ asset('slider/slider1.png') }}" alt="Nama Gambar" class="img-fluid rounded-pill"
                            style="background-color: yellow" width="1000px">
                    </div>
                </div>
            </div>
            {{-- banner 3 --}}
            <div class="carousel-item ">
                <div class="row bg-body-tertiary">
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
                    <div class="col-md-4  d-flex justify-content-center align-items-lg-center">
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
    <div class="portofolio my-5" style="background-color: #FAEA4F">
        <h3 class="text-center py-5">Portofolio Gawl Studio</h3>
        <div class="content-portofolio d-flex justify-content-center flex-wrap">
            <div class="kartu-portofolio py-4 mx-2">
                <img src="{{ asset('portofolio/porto1.png') }}" alt="porto" width="300px">
                <div class="informasi-card text-center pt-3">
                    <h5 class="">Nama Website</h5>
                    <a href=""class="btn rounded-pill text-white" style="background-color: #C24914">Lihat
                        Website</a>
                </div>
            </div>
            <div class="kartu-portofolio py-4 mx-2">
                <img src="{{ asset('portofolio/porto1.png') }}" alt="porto" width="300px">
                <div class="informasi-card text-center pt-3">
                    <h5 class="">Nama Website</h5>
                    <a href=""class="btn rounded-pill text-white" style="background-color: #C24914">Lihat
                        Website</a>
                </div>
            </div>
            <div class="kartu-portofolio py-4 mx-2">
                <img src="{{ asset('portofolio/porto1.png') }}" alt="porto" width="300px">
                <div class="informasi-card text-center pt-3">
                    <h5 class="">Nama Website</h5>
                    <a href=""class="btn rounded-pill text-white" style="background-color: #C24914">Lihat
                        Website</a>
                </div>
            </div>
            <div class="kartu-portofolio py-4 mx-2">
                <img src="{{ asset('portofolio/porto1.png') }}" alt="porto" width="300px">
                <div class="informasi-card text-center pt-3">
                    <h5 class="">Nama Website</h5>
                    <a href=""class="btn rounded-pill text-white" style="background-color: #C24914">Lihat
                        Website</a>
                </div>
            </div>
            <div class="kartu-portofolio py-4 mx-2">
                <img src="{{ asset('portofolio/porto1.png') }}" alt="porto" width="300px">
                <div class="informasi-card text-center pt-3">
                    <h5 class="">Nama Website</h5>
                    <a href=""class="btn rounded-pill text-white" style="background-color: #C24914">Lihat
                        Website</a>
                </div>
            </div>
            <div class="kartu-portofolio py-4 mx-2">
                <img src="{{ asset('portofolio/porto1.png') }}" alt="porto" width="300px">
                <div class="informasi-card text-center pt-3">
                    <h5 class="">Nama Website</h5>
                    <a href=""class="btn rounded-pill text-white" style="background-color: #C24914">Lihat
                        Website</a>
                </div>
            </div>
            <div class="kartu-portofolio py-4 mx-2">
                <img src="{{ asset('portofolio/porto1.png') }}" alt="porto" width="300px">
                <div class="informasi-card text-center pt-3">
                    <h5 class="">Nama Website</h5>
                    <a href=""class="btn rounded-pill text-white" style="background-color: #C24914">Lihat
                        Website</a>
                </div>
            </div>
            <div class="kartu-portofolio py-4 mx-2">
                <img src="{{ asset('portofolio/porto1.png') }}" alt="porto" width="300px">
                <div class="informasi-card text-center pt-3">
                    <h5 class="">Nama Website</h5>
                    <a href=""class="btn rounded-pill text-white" style="background-color: #C24914">Lihat
                        Website</a>
                </div>
            </div>
            <div class="kartu-portofolio py-4 mx-2">
                <img src="{{ asset('portofolio/porto1.png') }}" alt="porto" width="300px">
                <div class="informasi-card text-center pt-3">
                    <h5 class="">Nama Website</h5>
                    <a href=""class="btn rounded-pill text-white" style="background-color: #C24914">Lihat
                        Website</a>
                </div>
            </div>
            <div class="kartu-portofolio py-4 mx-2">
                <img src="{{ asset('portofolio/porto1.png') }}" alt="porto" width="300px">
                <div class="informasi-card text-center pt-3">
                    <h5 class="">Nama Website</h5>
                    <a href=""class="btn rounded-pill text-white" style="background-color: #C24914">Lihat
                        Website</a>
                </div>
            </div>
            <div class="text-center">
                <button class="btn rounded-pill text-black-50 bg-white">See More</button>
            </div>
        </div>
    </div>
    {{-- section 2 end --}}

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var kontenPortofolio = document.querySelectorAll(".kartu-portofolio");
            var tombolSeeMore = document.querySelector(".btn-rounded-pill");

            function tampilkanSemuaKonten() {
                kontenPortofolio.forEach(function(konten) {
                    konten.style.display = "block";
                });
                tombolSeeMore.style.display = "none";
            }

            for (var i = 8; i < kontenPortofolio.length; i++) {
                kontenPortofolio[i].style.display = "none";
            }

            tombolSeeMore.addEventListener("click", function() {
                tampilkanSemuaKonten();
            });
        });
    </script>
@endsection
