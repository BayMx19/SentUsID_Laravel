@extends('layouts.app')
@section('title', 'Detail Users')

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
                                            </svg></a> Detail Users</h4>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection