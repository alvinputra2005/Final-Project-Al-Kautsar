@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<div class="container mt-5">
    <div class="text-center mb-4">
        <h2 class="font-weight-bold text-primary"><i class="fas fa-users"></i> Daftar Alumni</h2>
        <p class="text-muted">Informasi alumni yang telah terdata di sistem</p>
    </div>

    <!-- Notifikasi sukses -->
    @if(session('success'))
        <div class="alert alert-success shadow-sm rounded">
            <i class="fas fa-check-circle"></i> {{ session('success') }}
        </div>
    @endif

    <!-- Tombol tambah alumni -->
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('admin.alumnis.create') }}" class="btn btn-primary shadow-sm">
            <i class="fas fa-user-plus"></i> Tambah Alumni
        </a>
    </div>

    <!-- Tabel responsif -->
    <div class="table-responsive shadow-sm rounded">
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="text-center">
                    <th><i class="fas fa-user"></i> Nama</th>
                    <th><i class="fas fa-venus-mars"></i> Gender</th>
                    <th><i class="fas fa-university"></i> Kampus</th>
                    <th><i class="fas fa-calendar-alt"></i> Angkatan</th>
                    <th><i class="fas fa-briefcase"></i> Pekerjaan</th>
                    <th><i class="fas fa-tools"></i> Keahlian</th>
                    <th><i class="fas fa-award"></i> Pengalaman</th>
                    <th><i class="fas fa-map-marker-alt"></i> Asal</th>
                    <th><i class="fas fa-phone"></i> Kontak</th>
                    <th><i class="fas fa-graduation-cap"></i> Pendidikan</th>
                    <th><i class="fas fa-cogs"></i> Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($alumni as $item)
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
                        <td class="text-center">
                            <a href="{{ route('admin.alumnis.edit', $item->id) }}" class="btn btn-warning btn-sm mx-1" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.alumnis.destroy', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete()" title="Hapus">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm mx-1">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="11" class="text-center text-muted">Belum ada data alumni.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        {{ $alumni->links('pagination::bootstrap-5') }}
    </div>
</div>

<!-- Konfirmasi hapus -->
<script>
    function confirmDelete() {
        return confirm("Apakah Anda yakin ingin menghapus alumni ini?");
    }
</script>

<!-- Styling tambahan -->
<style>
    .table thead {
        background-color: #006699;
        color: white;
    }

    .table th, .table td {
        vertical-align: middle;
        padding: 12px;
    }

    .table td {
        color: #333;
    }

    .btn-primary, .btn-warning, .btn-danger {
        border-radius: 5px;
        font-weight: bold;
    }

    .btn-primary:hover, .btn-warning:hover, .btn-danger:hover {
        opacity: 0.9;
    }

    .alert-success {
        border-radius: 8px;
    }

    .pagination .page-link {
        color: #006699;
        border-radius: 6px;
        margin: 0 2px;
    }

    .pagination .page-item.active .page-link {
        background-color: #006699;
        border-color: #006699;
        color: white;
    }
</style>
@endsection
