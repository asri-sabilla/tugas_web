@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h2 class="text-2xl font-bold mb-4">Daftar Cart</h2>

    <a href="{{ route('carts.create') }}" class="btn btn-primary">Tambah Data</a>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nama Lengkap</th>
            <th>Kategori</th>
            <th>Jumlah Tersisa</th>
            <th>Aksi</th>
        </tr>

        @foreach ($carts as $c)
        <tr>
            <td>{{ $c->id }}</td>
            <td>{{ $c->nama_lengkap }}</td>
            <td>{{ $c->kategori }}</td>
            <td>{{ $c->jumlah_tersisa }}</td>
            <td>
                <form action="{{ route('carts.destroy', $c->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection
