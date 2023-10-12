@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="text-center">Daftar Pemain</h1>
    <a href="{{ route('pemain.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i>Tambah Pemain Baru</a>
    
    <table class="table table-striped table-hover mt-3">
        <thead class="table-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama pemain</th>
                <th scope="col">No punggung</th>
                <th scope="col">Posisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($daftarPemain as $pemain)
                <tr>
                    <td scope="row">{{ ++$no }}</td>
                    <td>{{ $pemain->nama_pemain }}</td>
                    <td>{{ $pemain->no_punggung }}</td>
                    <td>{{ $pemain->posisi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

