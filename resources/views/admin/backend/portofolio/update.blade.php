@extends('admin.partials.portofolio.update')
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
                            <form method="post" action="{{ route('update.portofolio', $portofolio->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                                    <div class="col-sm-10">
                                        <select name="id_kategori" id="kategori" class="form-control" required>
                                            <option value="">Pilih Kategori</option>
                                            @foreach ($kategories as $kategori)
                                                <option value="{{ $kategori->id }}"
                                                    {{ $portofolio->id_kategori == $kategori->id ? 'selected' : '' }}>
                                                    {{ $kategori->kategori }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword2" class="col-sm-2 col-form-label">Nama Portofolio</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama_portofolio" class="form-control"
                                            value="{{ $portofolio->nama_portofolio }}" id="inputPassword2" required />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword2" class="col-sm-2 col-form-label">keterangan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{ $portofolio->keterangan }}"
                                            name="keterangan" id="inputPassword2"required />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword2" class="col-sm-2 col-form-label">Foto Lama</label>
                                    <div class="col-sm-10">
                                        @if ($portofolio->foto)
                                            <img src="{{ asset($portofolio->foto) }}" alt="Foto Lama"
                                                style="max-width: 200px;">
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
                                    <label for="inputPassword2" class="col-sm-2 col-form-label">URL</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="url" class="form-control"
                                            value="{{ $portofolio->url }}" id="inputPassword2" required />
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
