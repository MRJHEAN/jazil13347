@extends('layouts.master')
@section('title', 'Pengguna Terdaftar')

@section('content')
<h1>Detail Pengguna</h1>

<div class="mt-5">
    @if($user->status == 'inactive')
    <a href="{{ route('users.approve', $user->slug ) }}" class="btn btn-info">Setujui Pengguna</a>
    @endif
</div>

<div class="mt-5">
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
</div>

<div class="my-5 w-25">
    <div class="mb-3">
        <label for="" class="form-label">Username</label>
        <input type="text" class="form-control" readonly value="{{ $user->username }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Telepon</label>
        <input type="text" class="form-control" readonly value="{{ $user->phone }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Alamat</label>
        <textarea type="text" class="form-control" rows="5" cols="30"
            style="resize:none;">{{ $user->address }}</textarea>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Status</label>
        <input type="text" class="form-control" readonly value="{{ $user->status }}">
    </div>
</div>

<div class="mt-5">
    <h4>Riwayat Sewa Pengguna</h4>
    <x-rent-log-table :rentlog='$rentlogs' />
</div>

@endsection
