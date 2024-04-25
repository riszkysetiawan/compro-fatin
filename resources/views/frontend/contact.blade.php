@extends('partials.index')
@section('container')
    <div class="contact-us-1 py-5">
        <div class="container">
            <h1 class="text-center" style="color: #C24914">Hubungi Kami</h1>
            <div class="konten-contact-1">
                <h5 class="text-center">Jika Anda mempunyai pertanyaan seputar layanan maupun ingin berdiskusi <br>
                    terkait
                    permasalahan digital marketing hingga meminta penawaran Jasa Digital <br>
                    Marketing dari Gawl Studio
                </h5>
            </div>
        </div>
    </div>
    {{-- section 1 end --}}

    {{-- section 2 --}}
    <div class="formulir-client">
        <div class="container mx-5 px-5">
            <form action="" class="mx-5 px-5">
                <div class="text-center py-5">
                    <i class="fa-solid fa-book-open" style="font-size: 10rem"></i>
                    <h4>Formulir Klien</h4>
                </div>

                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Lengkap*</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_lengkap" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat Email*</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">No Telp / WhatsApp*</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn mt-3 rounded-pill text-white btn-lg" type="button"
                        style="background-color: #C24914">Kirim Formulir</button>
                </div>
            </form>
        </div>
    </div>
    {{-- section 2 end --}}

    {{-- section 3 start --}}
    <div class="contact-us-2 py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4  text-center">
                    <i class="fa-solid fa-calendar-days fs-1 mt-3"></i>
                    <h6 class="pt-4">Office Hours</h6>
                    <div class="keterangan">
                        <h6>Senin - Jum’at
                            09:00 - 17:00 WIB
                            <br>
                            (Selain Hari Libur Nasional)
                        </h6>
                        <hr style="border-color: black;">
                        <a class="btn" href="">Contact Us! ></a>
                    </div>
                </div>
                <div class="col-md-4  text-center">
                    <i class="fa-solid fa-calendar-days fs-1 mt-3"></i>
                    <h6 class="pt-4">Office Hours</h6>
                    <div class="keterangan">
                        <h6>Senin - Jum’at
                            09:00 - 17:00 WIB
                            <br>
                            (Selain Hari Libur Nasional)
                        </h6>
                        <hr style="border-color: black;">
                        <a class="btn" href="">Contact Us! ></a>
                    </div>
                </div>
                <div class="col-md-4  text-center">
                    <i class="fa-solid fa-envelope fs-1 mt-3"></i>
                    <h6 class="pt-4">E-Mail</h6>
                    <div class="keterangan">
                        <h6>Senin - Jum’at
                            09:00 - 17:00 WIB
                            <br>
                            (Selain Hari Libur Nasional)
                        </h6>
                        <hr style="border-color: black;">
                        <a class="btn" href="">Contact Us! ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- section 3 end --}}
@endsection
