@extends('layouts.master')
@section('title', 'Profil')

@section('content')
<div class="mt-5">
    <h4>Riwayat Sewa Anda</h4>
    <x-rent-log-table :rentlog='$rentlogs' />
</div>
@endsection
