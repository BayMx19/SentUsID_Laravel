@extends('layouts.app')
@section('title', 'Produk')

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
                                    <h1 class="header-title">List Produk Toko
                                        {{ Auth::user()->username }}</h1>
                                    <div class="button-tambah">
                                        <a href="{{ '/add-produk' }}"><button class="btn btn-primary"
                                                style="float:right;">Tambah Produk</button></a>
                                        <br>
                                    </div>

                                    <div class="row mt-5 mb-3">
                                        <div class="col-sm-4">
                                            <div class="card">
                                                <div class="card-produk">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="card">
                                                <div class="card-produk">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="card">
                                                <div class="card-produk">

                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('sweetalert::alert')
    @endsection
