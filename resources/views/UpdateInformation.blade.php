<?php
//*---------------------------------------------------------
//* System : PracticalTraining
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

                        <h1 class="mt-4">{{ $page }}</h1>
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
                                            <label>Nama Penuh</label>
                                            <input type="text" class="form-control" placeholder="Sila Masukkan Nama Penuh" value="{{ Auth::user()->name }}" readonly>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Jantina</label>
                                            <select class="form-control select2" name="id_gender">
                                                <option value="">Sila Pilih Jantina</option>
                                                @foreach ($query_gender as $data_gender)
                                                    <option value="{{ $data_gender->id_gender }}" {{ $data_gender->id_gender == $data_info->id_gender ? "selected" : "" }}>{{ $data_gender->name_gender }}</option>
                                                @endforeach
                                            </select>
                                            @error('id_gender')
                                                <font color="red">{{ $message }}</font>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <label>No Matrik</label>
                                            <input type="text" class="form-control" placeholder="Sila Masukkan No Matrik" name="no_matrik" value="{{ $data_info->no_matrik }}">
                                            @error('no_matrik')
                                                <font color="red">{{ $message }}</font>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Tarikh Lapor Diri</label>
                                            <input type="text" class="form-control datepicker" placeholder="Sila Masukkan Tarikh Lapor Diri" name="tarikh_lapor" value="{{ $data_info->tarikh_lapor }}">
                                            @error('tarikh_lapor')
                                                <font color="red">{{ $message }}</font>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <label>Kursus</label>
                                            <select class="form-control select2" name="id_course">
                                                <option value="">Sila Pilih Kursus</option>
                                                @foreach ($query_course as $data_course)
                                                    <option value="{{ $data_course->id_course }}" {{ $data_course->id_course == $data_info->id_course ? "selected" : "" }}>{{ $data_course->name_course }}</option>
                                                @endforeach
                                            </select>
                                            @error('id_course')
                                                <font color="red">{{ $message }}</font>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>IPTA / UNIVERSITI</label>
                                            <select class="form-control select2" name="id_ipta">
                                                <option value="">Sila Pilih IPTA / UNIVERSITI</option>
                                                @foreach ($query_ipta as $data_ipta)
                                                    <option value="{{ $data_ipta->id_ipta }}" {{ $data_ipta->id_ipta == $data_info->id_ipta ? "selected" : "" }}>{{ $data_ipta->name_ipta }}</option>
                                                @endforeach
                                            </select>
                                            @error('id_ipta')
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