@extends('partials.index')
@section('container')
    {{-- section 1 --}}
    <div class="about-us-1 py-5 my-5">
        <div class="container">
            <h1 class="text-center" style="color: #C24914">Tentang Gawl Studio</h1>
            <h5 class="text-center">Creative Your Movement</h5>
            <div class="konten-about-1">
                <h5 class="text-center">Gawl Studio merupakan startup digital agency yang bergerak di bidang kreatif.
                    <br>
                    Kami
                    berkomitmen untuk
                    menjadi solusi bagi semua kalangan yang ingin <br> mewujudkan branding dan promosi online yang efektif.
                </h5>
            </div>
        </div>
    </div>
    {{-- section 1 end --}}
    {{-- section 2 --}}
    <div class="section-2-about my-5 py-5">
        <div class="container-fluid">
            <div class="row mb-3 text-center">
                <div class="col-md-4 themed-grid-col"><img src="{{ asset('about/about.png') }}" alt="about"></div>
                <div class="col-md-4 themed-grid-col"><img src="{{ asset('about/about.png') }}" alt="about"></div>
                <div class="col-md-4 themed-grid-col"><img src="{{ asset('about/about.png') }}" alt="about"></div>
            </div>
            <div class="row mb-3 text-center">
                <div class="col-6 col-md-4 themed-grid-col"><img src="{{ asset('about/about.png') }}" alt="about"
                        width="100%"></div>
                <div class="col-6 col-md-4 themed-grid-col"><img src="{{ asset('about/about.png') }}" alt="about"
                        width="100%"></div>
                <div class="col-6 col-md-4 themed-grid-col"><img src="{{ asset('about/about.png') }}" alt="about"
                        width="100%"></div>
            </div>
        </div>
    </div>
    {{-- section 2 end --}}
    {{-- section 3 start --}}
    <div class="jasa-kami my-5 py-5" style="background-color: #FAEA4F">
        <div class="container">
            <h4 class="text-center" style="color: #C24914">Apa saja jasa yang kami tawarkan?</h4>
            <div class=" d-flex justify-content-center">
                <ul>
                    <li><span class="font-weight-bold">Creative design</span>: Desain grafis, animasi & video editing,
                        photography</li>
                    <li><span class="font-weight-bold">Content marketing</span>: Copywriting, social media management.</li>
                    <li><span class="font-weight-bold">Web development</span>: UI/UX design, web development.</li>
                </ul>
            </div>
        </div>
    </div>
    {{-- section 3 end --}}

    {{-- section 4 --}}
    <div class="keunggulan">
        <div class="container">
            <h4 class="text-center" style="color: #C24914">Keunggulan Gawl Studio :</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="{{ asset('about/lampu.png') }}" alt="lampu" width="100px">
                    </div>
                    <h5 class="font-weight-bold text-center">Solusi lengkap</h5>
                    <h6 class="text-center">Kami menawarkan jasa desain grafis,
                        pembuatan website, strategi digital
                        marketing, dan lainnya.</h6>
                </div>
                <div class="col-md-4">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="{{ asset('about/lampu.png') }}" alt="lampu" width="100px">
                    </div>
                    <h5 class="font-weight-bold text-center">Solusi lengkap</h5>
                    <h6 class="text-center">Kami menawarkan jasa desain grafis,
                        pembuatan website, strategi digital
                        marketing, dan lainnya.</h6>
                </div>
                <div class="col-md-4">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="{{ asset('about/lampu.png') }}" alt="lampu" width="100px">
                    </div>
                    <h5 class="font-weight-bold text-center">Solusi lengkap</h5>
                    <h6 class="text-center">Kami menawarkan jasa desain grafis,
                        pembuatan website, strategi digital
                        marketing, dan lainnya.</h6>
                </div>
            </div>
            <div class="my-5 py-5">
                <h5 class="container text-center">Dengan adanya jasa serta strategi branding yang dimiliki oleh Gawl
                    Studio,<br>
                    diharapkan dapat menunjang
                    kegiatan marketing konvensional menjadi lebih <br>komprehensif dan tepat sasaran untuk membangun citra
                    serta
                    menambah daya <br> tarik perseorangan dan perusahaan yang akan menjadi pengendali pasar dalam <br>
                    industri
                    masing-masing.</h5>
            </div>
        </div>
    </div>
    {{-- section 4 end --}}

    {{-- section 5 --}}
    <div class="management-team py-5 my-5">
        <div class="container">
            <h3 class="text-center p-5" style="color: #C24914">Management Team</h3>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('slider/slider1.png') }}" alt="Nama Gambar" class="img-fluid rounded-pill"
                        style="background-color: black">
                    <div class="text-center pt-4">
                        <h6 style="color: #C24914">Lutfi Amalia Adel, S.Pd, M.Si</h6>
                        <h6>Direktur</h6>
                    </div>
                </div>

                <div class="col-md-4">
                    <img src="{{ asset('slider/slider1.png') }}" alt="Nama Gambar" class="img-fluid rounded-pill"
                        style="background-color: black">
                    <div class="text-center pt-4">
                        <h6 style="color: #C24914">Lutfi Amalia Adel, S.Pd, M.Si</h6>
                        <h6>Direktur</h6>
                    </div>
                </div>
                <div class="col-md-4"> <img src="{{ asset('slider/slider1.png') }}" alt="Nama Gambar"
                        class="img-fluid rounded-pill" style="background-color: black">
                    <div class="text-center pt-4">
                        <h6 style="color: #C24914">Lutfi Amalia Adel, S.Pd, M.Si</h6>
                        <h6>Direktur</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- section 5 end --}}
@endsection
