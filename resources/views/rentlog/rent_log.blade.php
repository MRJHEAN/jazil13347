@extends('layouts.master')
@section('title', 'Halaman Log Sewa')

@section('content')
<h1>Daftar Log Sewa</h1>

<div class="mt-5">
    <x-rent-log-table :rentlog='$rentlogs' />
</div>
@endsection