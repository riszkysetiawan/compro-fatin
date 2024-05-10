@extends('partials.index')
@section('container')
    {{-- section 1 start --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            {{-- banner 1 --}}
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($bannerSliders as $key => $bannerSlider)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}"
                            style="background-image: url('{{ asset($bannerSlider->foto_utama) }}');">
                            <div class="induk-kolom row bg-body-tertiary">
                                <div class="col-md-8">
                                    <div class="p-5 mb-4 rounded-3">
                                        <div class="container-fluid py-5">
                                            <h1 class="display-5 fw-bold">{{ $bannerSlider->judul }}</h1>
                                            <h3 class="fw-bold">{{ $bannerSlider->sub_judul }}</h3>
                                            <p class="col-md-7 fs-4 pt-4 p-0 m-0">{{ $bannerSlider->caption }}</p>
                                            <button class="btn mt-3 rounded-pill text-white btn-lg" type="button"
                                                style="background-color: #C24914">{{ $bannerSlider->button }}</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="kolom-2 col-md-4  d-flex justify-content-center align-items-lg-center">
                                    <img src="{{ asset($bannerSlider->foto) }}" alt="{{ $bannerSlider->judul }}"
                                        class="img-fluid rounded-pill" style="background-color: yellow" width="1000px">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
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
    <div class=" portofolio my-5" style="background-color: #FAEA4F" data-aos="fade-up">
        <h3 class="text-center py-4">Portofolio Gawl Studio</h3>
        <div class="container">
            <div class="content-portofolio d-flex flex-wrap justify-content-center" data-aos="fade-up">
                @foreach ($portfolios as $portfolio)
                    <div class="kartu-portofolio mx-3 my-3">
                        <img src="{{ asset($portfolio->foto) }}" class="card-img-top"
                            alt="{{ $portfolio->nama_portofolio }}" style="max-width: 200px">
                        <div class="informasi-card text-center pt-3">
                            <h5 class="card-title">{{ $portfolio->nama_portofolio }}</h5>
                            <a href="{{ $portfolio->url }}" class="btn rounded-pill text-white"
                                style="background-color: #C24914">Lihat Website</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center">
                <button id="btn_see" class="btn rounded-pill text-black-50 bg-white">See More</button>
            </div>
        </div>
    </div>
    {{-- section 2 end --}}

    {{-- section 3 start --}}
    <div id="clients" class="clients section-bg" data-aos="fade-up">
        <div class="container">
            <h3>Beberapa klien kami yang telah percaya dengan <br>
                <span style="color: #C24914">Jasa Pembuatan Website</span>dari <span style="color: #C24914">Gawl
                    Studio</span>
            </h3>
            <div class="row justify-content-center pt-4" data-aos="fade-up">
                @foreach ($clients as $client)
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset($client->logo) }}" class="img-fluid" alt="{{ $client->nama_client }}">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- section 3 end --}}

    {{-- section 4 start --}}
    <div class="home-4 " style="background-color: #FFD1E3; margin-top: -4rem" data-aos="fade-up">
        <div class="container">
            <div style="padding-top: 6rem">
                <h3 class="text-center">Bergabunglah dengan komunitas untuk mengembangkan
                    bisnis Anda dan mendapatkan akses ke sumber daya eksklusif, pelatihan,
                    dan jaringan profesional melalui <span style="color: #C24914">Gawl Studio dan Iwapi</span>
                </h3>
            </div>
            <div class="d-flex justify-content-center" style="margin-top: 1rem" data-aos="fade-up">
                <button class="btn mt-3 mx-5 rounded-pill text-white btn-lg" type="button"
                    style="background-color: #C24914" data-aos="fade-left">Kunjungi IWAPI</button>
                <button class="btn mt-3 mx-5 rounded-pill text-white btn-lg" type="button"
                    style="background-color: #C24914" data-aos="fade-right">E-catalogue IWAPI</button>
            </div>
        </div>
    </div>
    {{-- section 4 --}}

    {{-- section 5 --}}
    <div class="home-5 mb-5" data-aos="fade-up">
        <div class="container" data-aos="fade-up">
            <h4 class="text-center pt-5">Kunjungi website IWAPI atau hubungi IWAPI untuk informasi lebih <br>
                lanjut tentang program dan peluang yang tersedia.</h4>
            <div class="py-5" data-aos="fade-up">
                <h3 class="text-center" style="color: #C24914">Hubungi Kami</h3>
                <h4 class="text-center">Untuk pemesanan jasa dan konsultasi silakan menghubungi kami melalui <br>
                    Whatsapp atau Telpon. Kami siap memberikan solusi terbaik untuk Anda.</h4>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn mt-3 mx-5 rounded-pill text-white btn-lg" type="button"
                    style="background-color: #C24914" data-aos="fade-left">CHAT 085XXXXXXXXX</button>
                <button class="btn mt-3 mx-5 rounded-pill text-white btn-lg" type="button"
                    style="background-color: #C24914" data-aos="fade-right">CALL 085XXXXXXXXX</button>
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

            function tampilkanSemuaKonten() {
                kontenPortofolio.forEach(function(konten) {
                    konten.style.display = "block";
                });
                tombolSeeMore.style.display = "none";
                tombolClose.style.display = "block";
            }

            function sembunyikanKontenLebih() {
                for (var i = 8; i < kontenPortofolio.length; i++) {
                    kontenPortofolio[i].style.display = "none";
                }
            }

            tombolSeeMore.addEventListener("click", function() {
                tampilkanSemuaKonten();
            });

            tombolClose.addEventListener("click", function() {
                kontenPortofolio.forEach(function(konten, index) {
                    if (index >= 8) {
                        konten.style.display = "none";
                    }
                });
                tombolClose.style.display = "none";
                tombolSeeMore.style.display = "block";
            });

            sembunyikanKontenLebih();

            var container = document.querySelector(".portofolio .container");
            container.appendChild(tombolClose);
            tombolClose.classList.add("mx-auto", "my-3");
            tombolSeeMore.classList.add("mx-auto", "my-3");
        });
    </script>
@endsection
