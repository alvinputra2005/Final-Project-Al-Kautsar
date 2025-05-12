@extends('layouts.app')

@section('content')
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

        .btn-outline-primary {
            border-color: #006699;
            color: #006699;
        }

        .btn-outline-primary:hover {
            background-color: #006699;
            color: white;
        }

        .table-responsive {
            margin-top: 20px;
        }
    </style>
    <div class="container">
        <div class="header text-center">
            <a href="{{ route('alumnis.index') }}">
                <img src="{{ asset('img/logoppm.jpeg') }}" alt="Logo PPM Al Kautsar" class="logo-pondok">
            </a>

            <h2 class="mt-3">Daftar Alumni</h2>
            <p>PPM Al Kautsar - Kuliah nomor 1, Mondok nomor 1</p>
        </div>

        <!-- Tabel Alumni -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover shadow bg-white">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Kampus</th>
                        <th>Angkatan</th>
                        <th>Pekerjaan</th>
                        <th>Bidang Keahlian</th>
                        <th>Pengalaman</th>
                        <th>Kontak</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($alumnis as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->kampus }}</td>
                            <td>{{ $item->angkatan }}</td>
                            <td>{{ $item->pekerjaan }}</td>
                            <td>{{ $item->bidang_keahlian }}</td>
                            <td>{{ $item->pengalaman }}</td>
                            <td>{{ $item->contact }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Tombol Kembali ke Beranda -->
        <div class="text-left mb-5 ml-4">
            <a href="{{ route('home') }}" class="btn btn-outline-primary">← Kembali ke Beranda</a>
        </div>
    </div>
@endsection
