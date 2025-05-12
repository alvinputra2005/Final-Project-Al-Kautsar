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
                    <th>Jenis Kelamin</th>
                    <th>Kampus</th>
                    <th>Angkatan</th>
                    <th>Pekerjaan</th>
                    <th>Bidang Keahlian</th>
                    <th>Pengalaman</th>
                    <th>Asal</th>
                    <th>Kontak</th>
                    <th>Riwayat Pendidikan</th>
                    <th>Aksi</th> <!-- Kolom untuk tombol aksi -->
                </tr>
            </thead>
            <tbody>
                @foreach($alumni as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->kampus }}</td>
                    <td>{{ $item->angkatan }}</td>
                    <td>{{ $item->pekerjaan }}</td>
                    <td>{{ $item->bidang_keahlian }}</td>
                    <td>{{ $item->pengalaman }}</td>
                    <td>{{ $item->asal }}</td>
                    <td>{{ $item->contact }}</td>
                    <td>{{ $item->riwayat_pendidikan }}</td>
                    <td>
                        <!-- Tombol Sunting -->
                        <a href="{{ route('admin.alumnis.edit', $item->id) }}" class="btn btn-warning btn-sm mx-1">Sunting</a>
                        
                        <!-- Form Hapus dengan konfirmasi -->
                        <form action="{{ route('admin.alumnis.destroy', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete()">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm mx-1">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Script untuk konfirmasi sebelum menghapus -->
    <script>
        function confirmDelete() {
            return confirm("Apakah Anda yakin ingin menghapus alumni ini?");
        }
    </script>
@endsection
