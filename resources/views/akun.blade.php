@extends('layouts.app')
@section('title', 'Akun')

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
                                    <h1 class="header-title">Informasi Akun</h4>

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
                                                <input class="form-control" type="text"
                                                    value="{{ Auth::user()->alamat }}" id="example-text-input" disabled
                                                    readonly oncopy="return false;" onpaste="return false;">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">No. Telpon</label>
                                                <input class="form-control" type="text"
                                                    value="{{ Auth::user()->no_telp }}" id="example-text-input" disabled
                                                    readonly oncopy="return false;" onpaste="return false;">
                                            </div>
                                        @endif


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
