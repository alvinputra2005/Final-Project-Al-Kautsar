@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4">Daftar Alumni</h2>

        <!-- Menampilkan notifikasi jika ada -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('admin.alumnis.create') }}" class="btn btn-primary mb-4">Tambah Alumni</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <td>Jenis Kelamin</td>
                    <th>Kampus</th>
                    <th>Angkatan</th>
                    <th>Pekerjaan</th>
                    <th>Bidang Keahlian</th>
                    <th>Pengalaman</th>
                    <th>Asal</th>
                    <th>Kontak</th>
                    <th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alumni as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $jenis->jenis_kelamin}}</td>
                    <td>{{ $item->kampus }}</td>
                    <td>{{ $item->angkatan }}</td>
                    <td>{{ $item->pekerjaan }}</td>
                    <td>{{ $item->bidang_keahlian }}</td>
                    <td>{{ $item->pengalaman }}</td>
                    <td>{{ $item->contact }}</td>
                    <td>
                        <a href="{{ route('admin.alumnis.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.alumnis.destroy', $item->id) }}" method="POST" style="display:inline;">
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
@endsection
