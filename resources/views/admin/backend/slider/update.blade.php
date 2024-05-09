@extends('admin.partials.slider.update')
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
                            <form method="post" action="{{ route('slider.update', $slider->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <label for="inputEmail2" class="col-sm-2 col-form-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="judul" class="form-control"
                                            value="{{ $slider->judul }}" id="inputEmail2" required />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword2" class="col-sm-2 col-form-label">Sub Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="sub_judul" class="form-control"
                                            value="{{ $slider->sub_judul }}" id="inputPassword2" required />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword2" class="col-sm-2 col-form-label">Caption</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{ $slider->caption }}"
                                            name="caption" id="inputPassword2"required />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword2" class="col-sm-2 col-form-label">Foto Lama</label>
                                    <div class="col-sm-10">
                                        @if ($slider->foto)
                                            <img src="{{ asset($slider->foto) }}" alt="Foto Lama" style="max-width: 200px;">
                                        @else
                                            <span>Tidak ada foto</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword2" class="col-sm-2 col-form-label">Foto</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="foto" class="form-control" id="inputPassword2" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword2" class="col-sm-2 col-form-label">Foto Utama Lama</label>
                                    <div class="col-sm-10">
                                        @if ($slider->foto)
                                            <img src="{{ asset($slider->foto_utama) }}" alt="Foto Lama"
                                                style="max-width: 200px;">
                                        @else
                                            <span>Tidak ada foto</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword2" class="col-sm-2 col-form-label">Foto Utama</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="foto_utama" class="form-control" id="inputPassword2" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword2" class="col-sm-2 col-form-label">Text Button</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{ $slider->button }}"
                                            name="button" id="inputPassword2"required />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword2" class="col-sm-2 col-form-label">BG Foto</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="bg_foto"
                                            value="{{ $slider->bg_foto }}" id="inputPassword2"
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
