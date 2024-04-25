@extends('partials.index')
@section('container')
    {{-- section 1 --}}
    <div class="bagan-portofolio py-5">
        <div class="container">
            <h1 class="text-center" style="color: #C24914">Portofolio Gawl Studio</h1>
            <h5 class="text-center">Kualitas Hasil Terbaik Pada Setiap Karya yang kami Kerjakan</h5>
            <div class="konten-portofolio-1">
                <form action="" class="my-3 py-3">
                    <div class="row">
                        <div class="col-md-4 text-end pilih-kategori">
                            <label for="" class="form-check-label">Pilih Kategori Web</label>
                        </div>
                        <div class="col-md-6">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- section 1 end --}}

    {{-- section 2 --}}
    {{-- section 2 start --}}
    <div class=" portofolio ">
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
    {{-- section 2 end --}}

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
