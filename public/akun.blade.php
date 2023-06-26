@extends('layouts.app')
@section('title', 'Akun')

@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            <div class="row">
                <!-- Textual inputs start -->
                <div class="col-12 mt-1">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="header-title">Informasi Akun</h4>
                                @if (Auth::user()->user_role !== 'SuperAdmin')
                                    <div class="">
                                        <a href="{{ route('edit', ['id' => Auth::user()->id]) }}"><button
                                                class="btn button-tambah" style="float:right;">Edit Akun</button></a> <br>
                                    </div>
                                @endif

                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">Nama</label>
                                    <input class="form-control" type="text" value="{{ Auth::user()->username }}"
                                        id="example-text-input" disabled readonly oncopy="return false;"
                                        onpaste="return false;">
                                </div>
                                <div class="form-group">
                                    <label for="example-search-input" class="col-form-label">Email</label>
                                    <input class="form-control" type="search" value="{{ Auth::user()->email }}"
                                        id="example-search-input" disabled readonly oncopy="return false;"
                                        onpaste="return false;">
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">Role</label>
                                    <input class="form-control" type="text" value="{{ Auth::user()->user_role }}"
                                        id="example-text-input" disabled readonly oncopy="return false;"
                                        onpaste="return false;">
                                </div>
                                @if (Auth::user()->user_role !== 'SuperAdmin')
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">Alamat</label>
                                        <input class="form-control" type="text" value="{{ Auth::user()->alamat }}"
                                            id="example-text-input" disabled readonly oncopy="return false;"
                                            onpaste="return false;">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">No. Telpon</label>
                                        <input class="form-control" type="text" value="{{ Auth::user()->notelp }}"
                                            id="example-text-input" disabled readonly oncopy="return false;"
                                            onpaste="return false;">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFileSm" class="form-label">Foto Profil</label></br>
                                        @if (Auth::user()->foto)
                                            <img src="/public/akun/{{ Auth::user()->foto }}" alt="profil">
                                        @else
                                            <p>Tidak ada foto</p>
                                        @endif
                                    </div>
                                @endif


                        </div>
                    </div>
                </div>
                <!-- Custom file input end -->
            </div>
        </div>
    </div>
@endsection
