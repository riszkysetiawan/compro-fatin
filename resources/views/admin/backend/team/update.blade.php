@extends('admin.partials.client.update')
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
                            <form method="post" action="{{ route('team.update', $teams->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <label for="inputPassword2" class="col-sm-2 col-form-label">Nama </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama" class="form-control"
                                            value="{{ $teams->nama }}" id="inputPassword2" required />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword2" class="col-sm-2 col-form-label">Jabatan </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="jabatan" class="form-control"
                                            value="{{ $teams->jabatan }}" id="inputPassword2" required />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword2" class="col-sm-2 col-form-label">Logo Lama</label>
                                    <div class="col-sm-10">
                                        @if ($teams->foto)
                                            <img src="{{ asset($teams->foto) }}" alt="Foto Lama" style="max-width: 200px;">
                                        @else
                                            <span>Tidak ada Logo</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword2" class="col-sm-2 col-form-label">Foto Baru</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="foto" class="form-control" id="inputPassword2" />
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
