@extends('layouts.app')
@section('title', 'Produk')

@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            <div class="row">
                <!-- Textual inputs start -->
                <div class="col-12 mt-1">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="header-title">List Produk Toko
                                {{ Auth::user()->username }}</h1>
                            <div class="">
                                <a href="{{ '/add-produk' }}"><button class="button-tambah" style="float:right;">Tambah
                                        Produk</button></a>
                                <br>
                            </div>

                            <div class="row mt-5 mb-3">
                                @foreach ($produk as $p)
                                <div class="col-sm-4">
                                    <div class="card" style="width: 18rem;">
                                        <div class="card-body card-produk">
                                            <img src="{{ asset('storage/' . $p->gambar) }}" class="card-img-top" alt="...">
                                            <span>{{ $p->nama }}</span></br>
                                            <span>Rp {{ $p->harga }}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('sweetalert::alert')
    @endsection
