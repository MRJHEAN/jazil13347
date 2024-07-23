@extends('layouts.master')
@section('title', 'Halaman Kategori')

@section('content')
    <h1>Daftar Kategori Terhapus</h1>

    <div class="mt-5">
        <a href="{{ route('category.index') }}" class="btn btn-primary">Kembali</a>
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
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deleted as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('category.restore', $data->slug) }}" class="btn btn-warning me-2">Pulihkan</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
