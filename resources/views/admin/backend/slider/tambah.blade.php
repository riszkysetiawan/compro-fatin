@extends('admin.partials.slider.create')
@section('container')
    <div class="container">
        <div class="container">
            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Form</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Layouts
                        </li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->



            <div class="row">

                <div id="flHorizontalForm" class="col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Horizontal form</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form method="post" action="{{ route('simpan.slider') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputEmail2" class="col-sm-2 col-form-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="judul" class="form-control" id="inputEmail2"
                                            required />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword2" class="col-sm-2 col-form-label">Sub Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="sub_judul" class="form-control" id="inputPassword2"
                                            required />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword2" class="col-sm-2 col-form-label">Caption</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="caption"
                                            id="inputPassword2"required />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword2" class="col-sm-2 col-form-label">Foto</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="foto" class="form-control" id="inputPassword2"
                                            required />
                                    </div>
                                </div>
                                {{-- <div class="row mb-3">
                                    <label for="inputPassword2" class="col-sm-2 col-form-label">Foto Utama</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="foto_utama" class="form-control" id="inputPassword2"
                                            required />
                                    </div>
                                </div> --}}
                                <div class="row mb-3">
                                    <label for="inputPassword2" class="col-sm-2 col-form-label">Text Button</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="button"
                                            id="inputPassword2"required />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword2" class="col-sm-2 col-form-label">BG Foto</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="bg_foto" id="inputPassword2"
                                            placeholder="*Masukkan Warna Kode CSS "required />
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
