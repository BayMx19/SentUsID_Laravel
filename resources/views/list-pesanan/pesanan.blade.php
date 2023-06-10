@extends('layouts.app')
@section('title', 'Pesanan')

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
                                    <h1 class="header-title">List Pesanan Masuk</h4>
                                        <div class="data-tables datatable-primary table-responsive">




                                            <table class="table datatable-primary text-center myDatausers display"
                                                id="myDatausers">
                                                <thead class="text-uppercase bg-primary">
                                                    <tr class="text-white">
                                                        <th scope="col">Nama Pemesan</th>
                                                        <th scope="col">Produk</th>
                                                        <th scope="col">Waktu Pesanan</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Harga Total</th>
                                                        <th scope="col" class="no-sort">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($pesanan as $p)
                                                        <tr>
                                                            <td>{{ $p->id_user }}
                                                            <td>{{ $p->id_pesanan }}
                                                            <td>{{ date('d-m-Y', strtotime($p->waktu_pesanan)) }}
                                                            <td>{{ $p->status }}
                                                            <td>{{ $p->harga_total }}
                                                            <td>
                                                                <a href="/detailpesanan/{{ $p->id_pesanan }}"><button
                                                                        class="btn3 btn-primary"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16"
                                                                            fill="currentColor" class="bi bi-eye"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                            <path
                                                                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                        </svg></button></a>
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
