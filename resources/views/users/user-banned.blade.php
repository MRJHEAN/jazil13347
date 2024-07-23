@extends('layouts.master')
@section('title', 'Pengguna Diblokir')

@section('content')
    <h1>Daftar Pengguna Diblokir</h1>

    <div class="mt-5">
        <a href="{{ route('category.deleted') }}" class="btn btn-primary">Lihat Pengguna Diblokir</a>
        <a href="{{ route('users.registered') }}" class="btn btn-primary">Pengguna Terdaftar</a>
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
                    <th>Nama Pengguna</th>
                    <th>Nomor Telepon</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bannedUser as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->username }}</td>
                        <td>{{ ($data->phone == true ? $data->phone : '-') }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="/users/user-restore/{{ $data->slug }}" class="btn btn-warning">Pulihkan</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
