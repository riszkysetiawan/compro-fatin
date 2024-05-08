@extends('admin.backend.slider.main')
@section('container')
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Datatables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Custom</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->
            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <table id="style-3" class="table style-3 dt-table-hover">
                                <thead>
                                    <tr>
                                        <th class="checkbox-column text-center"> No </th>
                                        <th class="text-center">Image</th>
                                        <th>Judul</th>
                                        <th>Sub Judul</th>
                                        <th>Keterangan</th>
                                        <th>Button</th>
                                        <th class="text-center dt-no-sorting">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="checkbox-column text-center"> 1</td>
                                        <td class="text-center">
                                            <span><img src="../src/assets/img/profile-24.jpeg" class="profile-img"
                                                    alt="avatar"></span>
                                        </td>
                                        <td>Nia</td>
                                        <td>Hillyer</td>
                                        <td>niaHill@yahoo.com</td>
                                        <td>111-666-1111</td>
                                        <td class="text-center">
                                            <ul class="table-controls">
                                                <li><a href="javascript:void(0);" class="bs-tooltip"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"
                                                        data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-edit-2 p-1 br-8 mb-1">
                                                            <path
                                                                d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                            </path>
                                                        </svg></a></li>
                                                <li><a href="javascript:void(0);" class="bs-tooltip"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"
                                                        data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-trash p-1 br-8 mb-1">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                            </path>
                                                        </svg></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
