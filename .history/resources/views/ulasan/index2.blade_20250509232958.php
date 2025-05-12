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
    <style>
        body {
            background-color: #f0f4f8;
            font-family: 'Segoe UI', sans-serif;
        }

        .header {
            background: linear-gradient(to right, #006699, #004466);
            color: white;
            padding: 30px;
            border-radius: 12px;
            margin-bottom: 30px;
            text-align: center;
        }

        .header h2 {
            margin: 0;
            font-weight: bold;
        }

        .table thead {
            background-color: #006699;
            color: white;
        }

        .table td {
            vertical-align: middle;
        }

        .logo-pondok {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0 4px 12px rgba(0, 102, 153, 0.3);
            background-color: white;
            padding: 5px;
            cursor: pointer;
        }

        .logo-pondok:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }

        .btn-primary {
            background-color: #006699;
            border: none;
        }

        .btn-outline-primary {
            border-color: #006699;
            color: #006699;
        }

        .btn-outline-primary:hover {
            background-color: #006699;
            color: white;
        }

        .btn-warning, .btn-danger {
            font-weight: bold;
        }

        .table-responsive {
            overflow-x: auto;
        }
    </style>
@endpush
