@extends('admin.partials.slider.main')
@section('container')
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Datatables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Striped
                        </li>
                    </ol>
                    <a href="{{ route('tambah.slider') }}" class="btn btn-primary mt-2">Tambah Data</a>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <div class="row layout-top-spacing">
                <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                    <div class="widget-content widget-content-area br-8">
                        <table id="zero-config" class="table table-striped dt-table-hover" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>Gambar</th>
                                    <th>Judul</th>
                                    <th>Sub Judul</th>
                                    <th>Keterangan</th>
                                    <th>Tulisan Button</th>
                                    <th>BG Foto</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliders as $slider)
                                    <tr>
                                        <td>
                                            <img src="{{ asset($slider->foto) }}" alt="Gambar" class="img-fluid " />
                                        </td>
                                        <td>{{ $slider->judul }}</td>
                                        <td>{{ $slider->sub_judul }}</td>
                                        <td>{{ $slider->caption }}</td>
                                        <td>{{ $slider->button }}</td>
                                        <td>{{ $slider->bg_foto }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('slider.edit', encrypt($slider->id)) }}"
                                                class="badge rounded-pill bg-primary">Edit</a>
                                            <a href="{{ route('delete.slider', $slider->id) }}"
                                                class="badge rounded-pill bg-danger" data-confirm-delete="true">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Gambar</th>
                                    <th>Judul</th>
                                    <th>Sub Judul</th>
                                    <th>Keterangan</th>
                                    <th>Tulisan Button</th>
                                    <th>BG Foto</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
