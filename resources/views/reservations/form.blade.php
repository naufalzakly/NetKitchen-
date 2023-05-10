@extends('layouts.app')
@section('title', 'Form Meja')

section('contents')
    <form action="{{ isset($reservations) ? route('reservations.update', $reservations->id) : route('reservations.simpan') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">{{ isset($reservations) ? 'Form Edit Meja' : 'Form Tambah Meja' }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_meja">Nama Meja</label>
                            <input type="text" class="form-control" id="nama_meja" name="nama_meja" value="{{ isset($reservations) ? $reservations->nama_meja : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="jumlah_orang">Jumlah Orang</label>
                            <input type="text" class="form-control" id="jumlah_orang" name="jumlah_orang" value="{{ isset($reservations) ? $reservations->jumlah_orang : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="stok">Status</label>
                            <input tye="text" class="form-control" id="stok" name="stok" value="{{ isset($reservations) ? $reservations->stok : '' }}">
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
