@extends('layouts.app')
@section('title', 'Users')

@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            <div class="row">
                <div class="col-lg-6 col-ml-12">
                    <div class="row mt-4">
                        <!-- Textual inputs start -->
                        <div class="col-12 mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <h1 class="header-title">List Users</h4>
                                        <div class="button-tambah">
                                            <a href="{{ 'tambah-karyawan' }}"><button class="btn btn-primary"
                                                    style="float:right;">Tambah
                                                    Pengguna</button></a> <br>
                                        </div>
                                        <div class="data-tables datatable-primary table-responsive">




                                            <table class="table datatable-primary text-center myDatausers display"
                                                id="myDatausers">
                                                <thead class="text-uppercase bg-primary">
                                                    <tr class="text-white">
                                                        <th scope="col">User ID</th>
                                                        <th scope="col">Nama</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Tanggal Registrasi</th>
                                                        <th scope="col">Role</th>
                                                        <th scope="col" class="no-sort">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>65165162121</td>
                                                        <td>Isa</td>
                                                        <td>isa@gmail.com</td>
                                                        <td>17 Februari 2023</td>
                                                        <td>User</td>



                                                        <td>
                                                            <a href="/detail-user"><button class="btn3 btn-primary"><i
                                                                        class="ti-info"></i></button></a>
                                                            <a href="/harilibur/delete/"><button class="btn3 btn-danger"><i
                                                                        class="ti-trash"></i></button></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>65165162122</td>
                                                        <td>Rifan</td>
                                                        <td>rifan@gmail.com</td>
                                                        <td>10 Februari 2023</td>
                                                        <td>User</td>



                                                        <td>
                                                            <a href="/data-master/detailuser"><button
                                                                    class="btn3 btn-primary"><i
                                                                        class="ti-info"></i></button></a>
                                                            <a href="/harilibur/delete/"><button class="btn3 btn-danger"><i
                                                                        class="ti-trash"></i></button></a>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>



                                </div>
                            </div>
                        </div>
                        <!-- Custom file input end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
