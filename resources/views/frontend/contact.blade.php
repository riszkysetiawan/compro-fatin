@extends('partials.index')
@section('container')
    {{-- section 1 --}}
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
    <div class="formulir-client py-3">
        <div class="container ">
            <form action="{{ route('simpan.contact.user') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="text-center py-1">
                    <i class="fa-solid fa-book-open" style="font-size: 8rem"></i>
                    <h4>Formulir Klien</h4>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Lengkap*</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat Email*</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">No Telp / WhatsApp*</label>
                    <div class="col-sm-10">
                        <input type="text" name="telp" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn mt-3 rounded-pill text-white btn-lg" type="submit"
                        style="background-color: #C24914">Kirim Formulir</button>
                </div>
            </form>
        </div>
    </div>
    {{-- section 2 end --}}

    {{-- section 3 start --}}
    {{-- section 3 end --}}
@endsection
