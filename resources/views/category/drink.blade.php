@extends('layouts.app')

@section('title', 'All Menu Index Page')

@section('scripts')


<!-- Bootstrap CSS -->
<link rel="stylesheet" href="resources/css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="resources/css/style.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="resources/css/responsive.css">


@endsection

@section('content')
<div class="menu-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>Daftar Menu Restoran</h2>
                    @if($categories->name == 'Minuman')
                        <h3>{{ $categories->name }}</h3>
                    @endif
                </div>
            </div>
        </div>

        <div class="row inner-menu-box">
            <div class="col-3">
                <div class="nav flex-column nav-pills" aria-orientation="vertical">
                    <a class="nav-link " href="{{ route('category.index') }}">Semuanya</a>
                    <a class="nav-link  " href="{{ route('category.food') }}">Makanan</a>
                    <a class="nav-link active" href="{{ route('category.drink') }}">Minuman</a>
                </div>
            </div>

            <div class="col-9">
                <div class="tab-content">
                    <div class="tab-pane fade show active">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 special-grid drinks">
                                <div class="gallery-single fix">
                                    <div class="card">
                                        <img src="..." class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Es Teh</h5>
                                            <p>Harga: </p>

                                            <br>
                                            <a href="#" class="btn btn-success">Tambah</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col-lg-4 col-md-6 special-grid drinks">
                                <div class="gallery-single fix">
                                    <div class="card">
                                        <img src="..." class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Es Joshua</h5>
                                            <p class="card-text">Harga: </p>
                                            <br>
                                            <a href="#" class="btn btn-success">Tambah</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col-lg-4 col-md-6 ">
                                <div class="gallery-single fix">
                                    <div class="card">
                                        <img src="..." class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Es Milo</h5>
                                            <p class="card-text">Harga: </p>
                                            <br>
                                            <a href="#" class="btn btn-success">Tambah</a>

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

    @section('js')
    @endsection
