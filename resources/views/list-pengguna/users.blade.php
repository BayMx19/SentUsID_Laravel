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
                                                    Karyawan</button></a> <br>
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
                                                    @foreach ($users as $u)
                                                    <tr>
                                                        <td>{{$u->id}}
                                                        <td>{{$u->username}}
                                                        <td>{{$u->email}}
                                                        <td>{{$u->created_at}}
                                                        <td>{{$u->user_role}}
                                                        <td>
                                                            <a href="/detail-user"><button class="btn3 btn-primary"><i
                                                                        class="ti-info"></i></button></a>
                                                            <a href="/harilibur/delete/"><button class="btn3 btn-danger"><i
                                                                        class="ti-trash"></i></button></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
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
