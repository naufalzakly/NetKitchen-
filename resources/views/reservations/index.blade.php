@extends('layouts.app')
@section('title', 'Data Meja')
@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Meja</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('reservations.tambah') }}" class="btn btn-primary mb-3" >Tambah Meja</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Meja</th>
                        <th>Jumlah Orang</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php($no = 1)
                    @foreach ($reservations as $row)
                        <tr>
                            <th>{{ $no++ }}</th>
                            <td>{{ $row->nama_meja }}</td>
                            <td>{{ $row->jumlah_orang }}</td>
                            <td>{{ $row->stok }}</td>
                            <td>
                                <a href="{{ route('reservations.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('reservations.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection