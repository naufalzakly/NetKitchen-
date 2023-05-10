@extends('layouts.app')
@section('title', 'Form Makanan')

@section('contents')
    <form action="{{ isset($foods) ? route('foods.update', $foods->id) : route('foods.simpan') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">{{ isset($foods) ? 'Form Edit Makanan' : 'Form Tambah Makanan' }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_makanan">Nama Makanan</label>
                            <input type="text" class="form-control" id="nama_makanan" name="nama_makanan" value="{{ isset($foods) ? $foods->nama_makanan : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="kategori_makanan">Kategori Makanan</label>
                            <input type="text" class="form-control" id="kategori_makanan" name="kategori_makanan" value="{{ isset($foods) ? $foods->kategori_makanan : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok Makanan</label>
                            <input type="text" class="form-control" id="stok" name="stok" value="{{ isset($foods) ? $foods->stok : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" class="form-control" id="harga" name="harga" value="{{ isset($foods) ? $foods->harga : '' }}">
                        </div>
            
                        <div class="form-group">
                            <label for="photo">Foto</label>
                            <input type="file" class="form-control" id="photo" name="photo" value="{{ isset($foods) ? $foods->photo : '' }}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
