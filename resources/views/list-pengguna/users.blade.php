@extends('layouts.app')
@section('title', 'List Users')

@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            <div class="row">
                <!-- Textual inputs start -->
                <div class="col-12 mt-1">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="header-title">List Users</h4>
                                <div class="">
                                    <a href="{{ '/add-users' }}"><button class="btn button-tambah"
                                            style="float:right;">Tambah
                                            Pengguna</button></a> <br>
                                </div>
                                <div class="data-tables datatable-primary table-responsive mt-3">




                                    <table class="table datatable-primary text-center myDatausers display" id="myDatausers">
                                        <thead class="text-uppercase bg-primary">
                                            <tr class="text-white">
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
                                                    <td>{{ $u->username }}
                                                    <td>{{ $u->email }}
                                                    <td>{{ date('d-m-Y', strtotime($u->created_at)) }}
                                                    <td>{{ $u->user_role }}
                                                    <td>
                                                        <a href="/detailusers/{{ $u->id }}"><button
                                                                class="btn3 btn-primary"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor" class="bi bi-eye"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                    <path
                                                                        d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                </svg></button></a>
                                                        @if ($u->username != Auth::user()->username)
                                                            {{-- <a href="/list-pengguna/delete/{{ $u->id }}"> --}}
                                                            <a href="users/delete/{{ $u->id }}"
                                                                data-confirm-delete="true">
                                                                <button class="btn5">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-trash3" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                                    </svg>
                                                                </button>
                                                            </a>
                                                        @endif

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
    @include('sweetalert::alert')
@endsection
