@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <h2>Manajemen Ulasan</h2>

        <!-- Menampilkan pesan sukses -->
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

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

    <!-- CSS untuk Tabel dan Tampilan Admin Ulasan -->
    <style>
        .table {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .table thead {
            background-color: #006699;
            color: white;
        }

        .table td, .table th {
            vertical-align: middle;
            padding: 15px;
        }

        .table td {
            color: #333;
        }

        .table .btn {
            margin-right: 5px;
        }

        .alert-success {
            margin-top: 20px;
            border-radius: 8px;
        }

        .btn-primary, .btn-warning, .btn-danger {
            border-radius: 5px;
            font-weight: bold;
        }

        .btn-primary:hover, .btn-warning:hover, .btn-danger:hover {
            opacity: 0.8;
        }

        /* Styling untuk Tombol Edit, Hapus */
        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-warning {
            background-color: #ffc107;
            border: none;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
        }
    </style>
@endsection