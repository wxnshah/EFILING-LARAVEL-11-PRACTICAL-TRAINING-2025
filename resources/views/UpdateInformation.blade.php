<?php
//*---------------------------------------------------------
//* System : Sistem eFiling
//* FILENAME : UpdateInformation.blade.php
//* Author : MUHAMAD IKHWAN
//* --------------------------------------------------------
$page = "Maklumat";
$subpage = "Maklumat";
$submenu = "Kemaskini Informasi";
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
                                <i class="fas fa-file-lines me-1"></i>
                                {{ $submenu }}
                            </div>
                            <div class="card-body">
                                <form class="needs-validation" novalidate action="{{ route('PostUpdateInformation', $id_info) }}" enctype="multipart/form-data" method="POST" onSubmit="return capture();">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            {{-- @if($data_info->image != "" && $data_info->image != NULL)
                                                <img src="{{ $data_info->image }}" class="rounded-circle img-fluid mb-2" style="width: 70px; height: 70px; object-fit: cover;">                                                  
                                            @else
                                                <img src="{{ asset('assets/img/user.png') }}" class="rounded-circle img-fluid mb-2" style="width: 70px; height: 70px; object-fit: cover;">
                                            @endif --}}
                                            <label>Gambar</label>
                                            <input type="file" class="form-control" placeholder="Sila Masukkan Gambar" name="image" >
                                            @error('image')
                                                <font color="red">{{ $message }}</font>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Nama Fail (Fail Sedia Ada : {{ Str::after(basename($data_info->nama_fail), '_') }})</label>
                                            <input type="file" class="form-control" placeholder="Sila Masukkan Gambar" name="nama_fail" >
                                            @error('nama_fail')
                                                <font color="red">{{ $message }}</font>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <label>Nama Penuh</label>
                                            <input type="text" class="form-control" placeholder="Sila Masukkan Nama Penuh" value="{{ Auth::user()->name }}" readonly>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Jabatan</label>
                                            <select class="form-control select2" name="id_department">
                                                <option value="">Sila Pilih Jabatan</option>
                                                @foreach ($query_department as $data_department)
                                                    <option value="{{ $data_department->id_department }}" {{ $data_department->id_department == $data_info->id_department ? "selected" : "" }}>{{ $data_department->name_department }}</option>
                                                @endforeach
                                            </select>
                                            @error('id_department')
                                                <font color="red">{{ $message }}</font>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <label>Tarikh Serah Fail</label>
                                            <input type="text" class="form-control datepicker" placeholder="Sila Masukkan Tarikh Serah Fail" name="tarikh_fail" value="{{ $data_info->tarikh_fail }}">
                                            @error('tarikh_fail')
                                                <font color="red">{{ $message }}</font>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12 mt-3" style="text-align: left;">
                                            <button type="submit" class="btn btn-primary">Kemaskini</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer small text-muted">Updated today at {{ now() }}</div>
                        </div>

                    </div>
                </main>
@include('footer')