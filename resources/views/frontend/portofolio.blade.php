@extends('partials.index')
@section('container')
    {{-- section 1 --}}
    <div class="bagan-portofolio py-2"data-aos="fade-up">
        <div class="container">
            <h1 class="text-center" style="color: #C24914">Portofolio Gawl Studio</h1>
            <h5 class="text-center">Kualitas Hasil Terbaik Pada Setiap Karya yang kami Kerjakan</h5>
            <div class="konten-portofolio-1">
                <form action="" class="my-3 py-3">
                    <div class="d-flex justify-content-center">
                        <div class="pilih-kategori mx-4">
                            <label for="" class="form-check-label">Pilih Kategori Web</label>
                        </div>
                        <div>
                            <select id="select-kategori" class="form-select" aria-label="Default select example">
                                <option selected disabled>Pilih kategori</option>
                                @foreach ($kategoris as $kategori)
                                    <option value="{{ $kategori->id }}">{{ $kategori->kategori }}</option>
                                @endforeach
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
                <div class="kartu-portofolio py-1 mx-2 d-flex flex-wrap justify-content-center" data-aos="fade-up">
                    @foreach ($portofolios as $portfolio)
                        <div class="kartu-portofolio mx-3 my-3 kategori-{{ $portfolio->id_kategori }}">
                            <img src="{{ asset($portfolio->foto) }}" class="card-img-top"
                                alt="{{ $portfolio->nama_portofolio }}" style="max-width: 200px">
                            <div class="informasi-card text-center pt-3">
                                <h5 class="card-title font-weight-bold">{{ $portfolio->nama_portofolio }}</h5>
                                <p class="text-center ">{{ $portfolio->keterangan }}</p>
                                {{-- <a href="{{ $portfolio->url }}" class="btn rounded-pill text-white"
                                    style="background-color: #C24914">Lihat Website</a> --}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="text-center">
                <button id="btn_see" class="btn rounded-pill text-black-50 bg-white">See More</button>
            </div>
        </div>
    </div>
    {{-- section 2 end --}}


    <script>
        document.getElementById('select-kategori').addEventListener('change', function() {
            let selectedKategori = this.value;
            let kartuPortofolio = document.querySelectorAll('.kartu-portofolio');

            kartuPortofolio.forEach(function(kartu) {
                if (kartu.classList.contains('kategori-' + selectedKategori) || selectedKategori ===
                    'all') {
                    kartu.style.display = 'block';
                } else {
                    kartu.style.display = 'none';
                }
            });
        });
    </script>


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
