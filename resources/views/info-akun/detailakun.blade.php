@extends('layouts.appNoSidebar')
@section('title', 'Akun')

@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            <div class="row">
                <!-- Textual inputs start -->
                <div class="col-12 mt-1">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="header-title">

                                <a href="{{ '/acc' }}"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="25" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                                    </svg></a>Edit Akun</h4>


                                <form action="/info-akun/update/{{ request()->route('id') }}" method="post"
                                    enctype="multipart/form-data">

                                    {{ csrf_field() }}

                                    <input type="hidden" name="id_users" value="{{ request()->route('id') }}">

                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">Nama</label>
                                        <input class="form-control" type="text" name="username"
                                            value="{{ Auth::user()->username }}" id="example-text-input">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-search-input" class="col-form-label">Email</label>
                                        <input class="form-control" type="search" name="email"
                                            value="{{ Auth::user()->email }}" id="example-search-input">
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
                                            <input class="form-control" type="text" name="alamat"
                                                value="{{ Auth::user()->alamat }}" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">No. Telpon</label>
                                            <input class="form-control" type="text" name="notelp"
                                                value="{{ Auth::user()->notelp }}" id="example-text-input">
                                        </div>
                                        <div class="mb-3">
                                            <label for="formFileSm" class="form-label">Foto Profil</label>
                                            <input class="form-control form-control-sm" id="formFileSm" name="foto" type="file">
                                            @if($errors->has('foto'))
                                                <span class="text-danger">{{ $errors->first('foto') }}</span>
                                            @endif
                                        </div>
                                    @endif
                                    <br>
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <button type="submit" class="btn4 btn-primary">Simpan</button>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
                <!-- Custom file input end -->
            </div>
        </div>
    </div>
@endsection
