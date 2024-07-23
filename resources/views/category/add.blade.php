@extends('layouts.master')
@section('title', 'Halaman Kategori')

@section('content')
    <h1>Tambah Kategori Baru</h1>

    <div class="mt-5 w-50">
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('category.store') }}" method="post">
            @csrf
            <div>
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" placeholder="Nama Kategori">
            </div>
            <div class="mt-3">
                <button class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
@endsection
