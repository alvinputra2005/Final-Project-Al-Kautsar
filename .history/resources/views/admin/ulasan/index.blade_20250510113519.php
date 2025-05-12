@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <h2>Manajemen Ulasan</h2>

        <!-- Menampilkan pesan sukses -->
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Tombol Tambah Ulasan -->
        <div class="mt-3">
            <a href="{{ route('admin.ulasan.create') }}" class="btn btn-primary">Tambah Ulasan</a>
        </div>

        <!-- Tabel Ulasan -->
        <div class="table-responsive mt-3">
            <table class="table table-bordered table-hover shadow bg-white">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Bintang</th>
                        <th>Ulasan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ulasan as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ str_repeat('⭐', $item->rating) }}</td>
                            <td>{{ $item->ulasan }}</td>
                            <td>
                                <!-- Tombol Edit dan Hapus -->
                                <a href="{{ route('admin.ulasan
