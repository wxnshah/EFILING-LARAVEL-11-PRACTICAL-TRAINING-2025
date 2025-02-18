<?php
//*---------------------------------------------------------
//* System : Sistem eFiling
//* FILENAME : UpdateUsersInformation.blade.php
//* Author : MUHAMAD IKHWAN
//* --------------------------------------------------------
$page = "Pengguna";
$subpage = "Pengguna";
$submenu = "Kemaskini Maklumat Pengguna";
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
                                <form class="needs-validation" novalidate action="{{ route('PostAdminUpdateUsersInformation', $id_user) }}" enctype="multipart/form-data" method="POST" onSubmit="return capture();">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <label>Nama Penuh</label>
                                            <input type="text" class="form-control" placeholder="Sila Masukkan Nama Penuh" name="name" value="{{ $data_user->name }}">
                                            @error('nama')
                                                <font color="red">{{ $message }}</font>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>No Kad Pengenalan</label>
                                            <input type="text" class="form-control" placeholder="Sila Masukkan No Kad Pengenalan" name="no_kp" value="{{ $data_user->no_kp }}">
                                            @error('no_kp')
                                                <font color="red">{{ $message }}</font>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <label>Email</label>
                                            <input type="text" class="form-control" placeholder="Sila Masukkan Email" name="email" value="{{ $data_user->email }}">
                                            @error('email')
                                                <font color="red">{{ $message }}</font>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Kata Laluan <font color="red"><small>*(Tinggalkan kosong jika tidak menukar kata laluan)</small></font></label>
                                            <input type="password" class="form-control" placeholder="Sila Masukkan Kata Laluan" name="password">
                                            @error('password')
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