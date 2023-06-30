@extends('layouts.app')
@section('title', 'List Jenis Produk')

@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            <div class="row">
                <!-- Textual inputs start -->
                <div class="col-12 mt-1">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="header-title">List Jenis Produk</h4>
                                <div class="">
                                    <a href="{{ '/add-jenis' }}"><button class="button-tambah" style="float:right;">Tambah
                                            Jenis Produk</button></a> <br>
                                </div>
                                <div class="data-tables datatable-primary table-responsive mt-3">




                                    <table class="table datatable-primary text-center myDatajenis display" id="myDatajenis">
                                        <thead class="text-uppercase bg-primary">
                                            <tr class="text-white">
                                                <th scope="col">Jenis Cetak</th>
                                                <th scope="col" class="no-sort">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($jenis as $j)
                                                <tr>
                                                    <td>{{ $j->jenisCetak }}

                                                    <td>

                                                        <a href="/jenis/delete/{{ $j->id }}"><button
                                                                class="btn5"><svg xmlns="http://www.w3.org/2000/svg"
                                                                    width="16" height="16" fill="currentColor"
                                                                    class="bi bi-trash3" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
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
    @include('sweetalert::alert')
@endsection
