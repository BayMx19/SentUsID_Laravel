@extends('layouts.app')
@section('title', 'Add Jenis Produk')

@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <!-- Textual inputs start -->
                        <div class="col-12 mt-4">
                            <div class="card">
                                <div class="card-body">
                                    <h1 class="header-title">
                                        <a href="{{ '/jenis' }}"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="25" fill="currentColor" class="bi bi-arrow-left"
                                                viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                                            </svg></a> Add Jenis Produk</h4>

                                        <form method="POST" action="/add-jenis/store">
                                            {{ csrf_field() }}

                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Jenis Produk</label>
                                                <input class="form-control" type="text" name="nama" value="">
                                            </div>
                                            <div class="d-grid mt-5 gap-2 mx-auto">
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

    {{-- <script>
        var selectEmail = document.getElementById('getEmail');
        var namaMitraInput = document.getElementById('namaMitra');
        var alamatMitraInput = document.getElementById('alamatMitra');
        var teleponMitraInput = document.getElementById('teleponMitra');
        var emailMitraInput = document.getElementById('emailMitra');
        var tglBergabungInput = document.getElementById('tgl-daftar-input');
        var tglExpiredInput = document.getElementById('tgl-selesai-input');

        selectEmail.addEventListener('change', function() {
            var selectedOption = selectEmail.options[selectEmail.selectedIndex];
            var selectedEmail = selectedOption.value;
            var selectedUsername = selectedOption.getAttribute('data-username');
            var selectedAlamat = selectedOption.getAttribute('data-alamat');
            var selectedTelepon = selectedOption.getAttribute('data-telepon');

            namaMitraInput.value = selectedUsername;
            alamatMitraInput.value = selectedAlamat;
            teleponMitraInput.value = selectedTelepon;
            emailMitraInput.value = selectedEmail;
            document.querySelector('input[name="email"]').value = selectedEmail;
            document.querySelector('input[name="nama"]').value = selectedUsername;
            document.querySelector('input[name="alamat"]').value = selectedAlamat;
            document.querySelector('input[name="telepon"]').value = selectedTelepon;
        });

        tglBergabungInput.addEventListener('change', function() {
            var tglBergabung = new Date(tglBergabungInput.value);
            var tglExpired = new Date(tglBergabung.getFullYear() + 1, tglBergabung.getMonth(), tglBergabung
                .getDate() + 1);
            tglExpiredInput.value = tglExpired.toISOString().split('T')[0];
            document.querySelector('input[name="tanggal_selesai"]').value = tglExpired.toISOString().split('T')[0];
        });
    </script> --}}
@endsection
