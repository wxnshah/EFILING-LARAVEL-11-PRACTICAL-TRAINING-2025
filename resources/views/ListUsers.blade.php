<?php
//*---------------------------------------------------------
//* System : Sistem eFiling
//* FILENAME : ListUsers.blade.php
//* Author : MUHAMAD IKHWAN
//* --------------------------------------------------------
$page = "Pengguna";
$subpage = "Pengguna";
$submenu = "Senarai Pengguna";
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
                                            <th>Nama</th>
                                            <th>No Kad Pengenalan</th>
                                            <th>Email</th>
                                            <th>Kemaskini</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Bil</th>
                                            <th>Nama</th>
                                            <th>No Kad Pengenalan</th>
                                            <th>Email</th>
                                            <th>Kemaskini</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($query_users as $data_users)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data_users->name }}</td>
                                            <td>{{ $data_users->no_kp }}</td>
                                            <td>{{ $data_users->email }}</td>
                                            <td>
                                                <a href="{{ route('AdminUpdateUsersInformation', $data_users->id) }}"><i class="fa-sharp-duotone fa-solid fa-pen-to-square fa-2x"></i></a>
                                                &nbsp;&nbsp;
                                                <a href="{{ route('AdminDeleteUsersInformation', $data_users->id) }}" onClick="return deletebuttonask();"><i class="fa-sharp-duotone fa-solid fa-trash fa-2x"></i></a>
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
