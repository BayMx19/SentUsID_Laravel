@extends('layouts.appNoSidebar')
@section('title', 'Detail Users')

@section('content')
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/default-css.css') }}"> --}}

    <div>
        <div class="main-content-inner">
            <div class="row">
                <div class="col-sm-6 col-ml-12">
                    <div class="row">
                        <!-- Textual inputs start -->
                        <div class="col-12 mt-4">
                            <div class="card">
                                <div class="card-body">
                                    <h1 class="header-title">
                                        <a href="{{ '/mitra' }}"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="25" fill="currentColor" class="bi bi-arrow-left"
                                                viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                                            </svg></a> Detail Users</h4>

                                        <form action="/list-mitra/update/{{ request()->route('id_mitra') }}" method="post">

                                            {{ csrf_field() }}
                                            <input type="hidden" name="id_mitra"
                                                value="{{ request()->route('id_mitra') }}">

                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Nama Mitra</label>
                                                <input class="form-control" type="text" name="nama"
                                                    value="{{ $mitra->nama }}" id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Email</label>
                                                <input class="form-control" type="text" name="email"
                                                    value="{{ $mitra->email }}" id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Alamat Mitra</label>
                                                <input class="form-control" type="text" name="alamat"
                                                    value="{{ $mitra->alamat }}" id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Nomor Telepon</label>
                                                <input class="form-control" type="text" name="notelp"
                                                    value="{{ $mitra->notelp }}" id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Tanggal
                                                    Daftar</label>
                                                <input class="form-control " type="date" name="tanggal_daftar"
                                                    value="{{ date('Y-m-d', strtotime($mitra->tanggal_daftar)) }}"
                                                    id="tgl-daftar-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Tanggal
                                                    Selesai</label>
                                                <input class="form-control " type="date" name="tanggal_selesai"
                                                    value="{{ date('Y-m-d', strtotime($mitra->tanggal_selesai)) }}"
                                                    id="tgl-selesai-input" disabled>
                                                    <input type="hidden" name="tanggal_selesai"
                                                    value="{{ date('Y-m-d', strtotime($mitra->tanggal_selesai)) }}"
                                                    id="tgl-selesai-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="status-input" class="col-form-label">Status Kemitraan</label>
                                                <select class="form-control" value="" id="status-input"
                                                    name="status_mitra">
                                                    <option disabled selected>{{ $mitra->status_mitra }}</option>
                                                    <option value="Aktif">Aktif</option>
                                                    <option value="Tidak Aktif">Tidak Aktif</option>
                                                </select>
                                                <!-- <input type="hidden" name="status_mitra" value="{{ $mitra->status_mitra }}"> -->
                                            </div>

                                            <br>
                                            <div class="d-grid gap-2 col-6 mx-auto">
                                                <button type="submit" class="btn4 btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var tglBergabungInput = document.getElementById('tgl-daftar-input');
        var tglExpiredInput = document.getElementById('tgl-selesai-input');

        tglBergabungInput.addEventListener('change', function() {
            var tglBergabung = new Date(tglBergabungInput.value);
            var tglExpired = new Date(tglBergabung.getFullYear() + 1, tglBergabung.getMonth(), tglBergabung
                .getDate() + 1);
            tglExpiredInput.value = tglExpired.toISOString().split('T')[0];
            document.querySelector('input[name="tanggal_selesai"]').value = tglExpired.toISOString().split('T')[0];
        });
    </script>
@endsection
