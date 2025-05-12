@extends('layouts.admin')

@section('content')
    <div class="container">
        <!-- Header Section -->
        <div class="header text-center">
            <a href="{{ route('admin.ulasan.index') }}">
                <img src="{{ asset('img/logoppm.jpeg') }}" alt="Logo PPM Al Kautsar" class="logo-pondok">
            </a>

            <h2 class="mt-3">Manajemen Ulasan</h2>
            <p>PPM Al Kautsar - Kuliah nomor 1, Mondok nomor 1</p>
        </div>

        <!-- Alert Success -->
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
                                <a href="{{ route('admin.ulasan.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('admin.ulasan.destroy', $item->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection

@push('styles')

@endpush
