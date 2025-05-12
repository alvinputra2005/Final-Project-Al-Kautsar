@extends('layouts.app')

@section('content')
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
