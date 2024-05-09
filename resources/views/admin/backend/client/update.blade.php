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
                            <form method="post" action="{{ route('client.update', $clients->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <label for="inputPassword2" class="col-sm-2 col-form-label">Nama CLient</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama_client" class="form-control"
                                            value="{{ $clients->nama_client }}" id="inputPassword2" required />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword2" class="col-sm-2 col-form-label">Logo Lama</label>
                                    <div class="col-sm-10">
                                        @if ($clients->logo)
                                            <img src="{{ asset($clients->logo) }}" alt="Foto Lama"
                                                style="max-width: 200px;">
                                        @else
                                            <span>Tidak ada Logo</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword2" class="col-sm-2 col-form-label">Logo Baru</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="logo" class="form-control" id="inputPassword2" />
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
