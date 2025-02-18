<?php
//*---------------------------------------------------------
//* System : Sistem eFiling
//* FILENAME : ListInformation.blade.php
//* Author : MUHAMAD IKHWAN
//* --------------------------------------------------------
$page = "Maklumat";
$subpage = "Maklumat";
$submenu = "Senarai Informasi";
?>
@include('headeruser')
@include('sweetalerts')
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">{{ $submenu }}</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('login') }}">{{ $subpage }}</a></li>
                            <li class="breadcrumb-item active">{{ $submenu }}</li>
                        </ol>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                {{ $submenu }}
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-bordered datatable" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Bil</th>
                                            <th>Gambar</th>
                                            <th>Nama Fail</th>
                                            <th width="15%">Jabatan</th>
                                            <th>Nama</th>
                                            <th>Tarikh Serah Fail</th>
                                            <th>Kemaskini</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Bil</th>
                                            <th>Gambar</th>
                                            <th>Nama Fail</th>
                                            <th width="15%">Jabatan</th>
                                            <th>Nama</th>
                                            <th>Tarikh Serah Fail</th>
                                            <th>Kemaskini</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($query_info as $data_info)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                @if($data_info->image != "" && $data_info->image != NULL)
                                                    <a href="{{ $data_info->image }}" target="_blank">
                                                        <img src="{{ $data_info->image }}" class="rounded-circle img-fluid" style="width: 90px; height: 90px; object-fit: cover;">
                                                    </a>                                                    
                                                @else
                                                    <a href="{{ asset('assets/img/user.png') }}" target="_blank">
                                                        <img src="{{ asset('assets/img/user.png') }}" class="rounded-circle img-fluid" style="width: 90px; height: 90px; object-fit: cover;">
                                                    </a>  
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ $data_info->nama_fail }}" target="_blank">
                                                    {{ Str::after(basename($data_info->nama_fail), '_') }}
                                                </a>
                                            </td>
                                            <td>{{ $data_info->name_department }}</td>
                                            <td>{{ $data_info->name }}</td>
                                            <td>{{ $data_info->tarikh_fail }}</td>
                                            <td>
                                                <a href="{{ route('UpdateInformation', $data_info->id_info) }}"><i class="fa-sharp-duotone fa-solid fa-pen-to-square fa-2x"></i></a>
                                                &nbsp;&nbsp;
                                                <a href="{{ route('DeleteInformation', $data_info->id_info) }}" onClick="return deletebuttonask();"><i class="fa-sharp-duotone fa-solid fa-trash fa-2x"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
@include('footer')
