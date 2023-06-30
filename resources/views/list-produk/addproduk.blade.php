@extends('layouts.app')
@section('title', 'Add Produk')

@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            <div class="row">
                <div class="col-sm-6 col-ml-12">
                    <div class="row">
                        <!-- Textual inputs start -->
                        <div class="col-12 mt-4">
                            <div class="card">
                                <div class="card-body">
                                    <h1 class="header-title">
                                        <a href="{{ 'users' }}"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="25" fill="currentColor" class="bi bi-arrow-left"
                                                viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                                            </svg></a> Add Produk</h4>

                                        <form method="POST" action="/add-produk/store">
                                            {{ csrf_field() }}

                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Nama Produk</label>
                                                <input class="form-control" type="text" value=""
                                                    id="example-text-input" name="username" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Harga Produk</label>
                                                <input class="form-control" type="text" value=""
                                                    id="example-text-input" name="email" required>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Deskripsi</label>
                                                <input class="form-control" type="text" value=""
                                                    id="deskripsi-input" name="deskripsi">
                                            </div>

                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Jenis Cetak</label>
                                                <select class="form-control form-select mb-5" name="getjenis" value=""
                                                    id="getjenis" required>
                                                    <option disabled selected>Pilih Jenis Cetakan</option>
                                                    @foreach ($getjenis as $gj)
                                                        <option name="getjenis">{{ $gj->jenisCetak }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="formFileSm" class="form-label">Gambar</label>
                                                <input class="form-control form-control-sm" id="formFileSm" name="foto"
                                                    type="file">
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
<!-- 
    <script>
        var selectElement = document.getElementById('getroles');
        var validationMessage = document.getElementById('validation-message');

        // Menambahkan event listener pada perubahan nilai select
        selectElement.addEventListener('change', function() {
            // Mengecek apakah nilai select sudah dipilih
            if (selectElement.value === '') {
                validationMessage.style.display = 'block';
            } else {
                validationMessage.style.display = 'none';
            }
        });
    </script> -->
@endsection
