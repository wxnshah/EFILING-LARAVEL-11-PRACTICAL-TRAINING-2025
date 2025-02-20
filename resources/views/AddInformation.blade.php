<?php
//*---------------------------------------------------------
//* System : Sistem eFiling
//* FILENAME : AddInformation.blade.php
//* Author : MUHAMAD IKHWAN
//* --------------------------------------------------------
$page = "Maklumat";
$subpage = "Maklumat";
$submenu = "Tambah Informasi";
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
                                <form class="needs-validation" novalidate action="{{ Auth::user()->id_level == 1 ? route('AdminPostAddInformation') : route('PostAddInformation') }}" enctype="multipart/form-data" method="POST" onSubmit="return capture();">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <label>Gambar</label>
                                            <input type="file" class="form-control" placeholder="Sila Masukkan Gambar" name="image" >
                                            @error('image')
                                                <font color="red">{{ $message }}</font>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Fail</label>
                                            <input type="file" class="form-control" placeholder="Sila Masukkan Fail" name="nama_fail" >
                                            @error('nama_fail')
                                                <font color="red">{{ $message }}</font>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <label>Nama Penuh</label>
                                            <input type="text" class="form-control" placeholder="Sila Masukkan Nama Penuh" name="name" value="{{ Auth::user()->name }}" readonly>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Jabatan</label>
                                            <select class="form-control select2" name="id_department">
                                                <option value="">Sila Pilih Jabatan</option>
                                                @foreach ($query_department as $data_department)
                                                    <option value="{{ $data_department->id_department }}" {{ $data_department->id_department == old('id_department') ? "selected" : "" }}>{{ $data_department->name_department }}</option>
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
                                            <input type="text" class="form-control datepicker" placeholder="Sila Masukkan Tarikh Serah Fail" name="tarikh_fail" value="{{ old('tarikh_fail') }}">
                                            @error('tarikh_fail')
                                                <font color="red">{{ $message }}</font>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12 mt-3" style="text-align: left;">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer small text-muted">Updated today at {{ now() }}</div>
                        </div>

                    </div>
                </main>
@include('footer')