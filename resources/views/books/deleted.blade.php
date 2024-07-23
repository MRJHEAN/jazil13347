@extends('layouts.master')
@section('title', 'Halaman Kategori')

@section('content')
    <h1>Daftar Buku Terhapus</h1>

    <div class="mt-5">
        <a href="{{ route('books.index') }}" class="btn btn-primary">Kembali</a>
    </div>

    <div class="mt-5">
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>

    <div class="mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th width="5%">No.</th>
                    <th>Kode</th>
                    <th>Judul</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($book as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->book_code }}</td>
                        <td>{{ $data->title }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('books.restore', $data->slug) }}" class="btn btn-warning me-2">Pulihkan</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
