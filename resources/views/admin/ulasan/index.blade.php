@extends('layouts.admin')

@section('content')

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="container mt-4">
    <h2 class="text-center text-primary mb-4"><i class="fas fa-comments"></i> Manajemen Ulasan</h2>

    <!-- Pesan Sukses -->
    @if(session('success'))
        <div class="alert alert-success"><i class="fas fa-check-circle"></i> {{ session('success') }}</div>
    @endif

    <!-- Tabel Ulasan -->
    <div class="table-responsive mt-3">
        <table class="table table-bordered table-hover shadow bg-white">
            <thead class="text-center">
                <tr>
                    <th><i class="fas fa-user"></i> Nama</th>
                    <th><i class="fas fa-star"></i> Rating</th>
                    <th><i class="fas fa-quote-left"></i> Ulasan</th>
                    <th><i class="fas fa-cogs"></i> Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ulasan as $item)
                    <tr>
                        <td class="align-middle">{{ $item->nama }}</td>
                        <td class="text-center align-middle">
                            @for ($i = 0; $i < $item->rating; $i++)
                                <i class="fas fa-star text-warning"></i>
                            @endfor
                        </td>
                        <td class="align-middle">{{ $item->ulasan }}</td>
                        <td class="text-center align-middle">
                            <!-- Tombol Edit dan Hapus -->
                            <a href="{{ route('admin.ulasan.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('admin.ulasan.destroy', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger btn-sm delete-button">
                                    <i class="fas fa-trash-alt"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- CSS untuk Tampilan Tabel -->
<style>
    .table {
        background-color: #ffffff;
        border-radius: 10px;
        overflow: hidden;
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

    .alert-success {
        margin-top: 20px;
        border-radius: 8px;
        font-size: 16px;
    }

    .btn {
        border-radius: 6px;
        font-weight: 600;
    }

    .btn-sm {
        padding: 6px 12px;
        font-size: 14px;
    }

    .btn-warning {
        background-color: #ffc107;
        border: none;
        color: #212529;
    }

    .btn-danger {
        background-color: #dc3545;
        border: none;
    }

    .btn-warning:hover {
        background-color: #e0a800;
    }

    .btn-danger:hover {
        background-color: #c82333;
    }
</style>

<!-- Konfirmasi JavaScript -->
<script>
    document.querySelectorAll('.delete-button').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const form = this.closest('form');
            const confirmation = confirm("Apakah Anda yakin ingin menghapus ulasan ini?");
            if (confirmation) {
                form.submit();
            }
        });
    });
</script>
@endsection
