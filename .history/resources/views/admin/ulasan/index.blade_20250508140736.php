<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Ulasan - PPM Al Kautsar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f0f4f8;
            font-family: 'Segoe UI', sans-serif;
        }

        .table thead {
            background-color: #006699;
            color: white;
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
        }

        .btn-outline-primary {
            border-color: #006699;
            color: #006699;
        }

        .btn-outline-primary:hover {
            background-color: #006699;
            color: white;
        }

    </style>
</head>
<body>

<div class="container">
    <div class="header text-center">
        <img src="{{ asset('img/logoppm.jpeg') }}" alt="Logo PPM Al Kautsar" class="logo-pondok">
        
        <h2 class="mt-3">Manajemen Ulasan Pengunjung</h2>
        <p>PPM Al Kautsar - Kuliah nomor 1, Mondok nomor 1</p>
    </div>

    <!-- Pesan sukses setelah operasi -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Tabel Ulasan -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover shadow bg-white">
            <thead>
            <tr>
                <th>Nama</th>
                <th>Bintang</th>
                <th>Ulasan</th>
                <th class="text-center">Aksi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($ulasan as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ str_repeat("⭐", $item->rating) }}</td>
                    <td>{{ $item->ulasan }}</td>
                    <td class="text-center">
                        <!-- Tombol Edit dan Hapus -->
                        <a href="{{ route('ulasan.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="{{ $item->id }}" data-nama="{{ $item->nama }}">Hapus</button>
                    </td>
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

<!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Anda yakin ingin menghapus ulasan ini?
        <br><br>
        <strong id="ulasan-nama"></strong>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <form id="delete-form" action="{{ route('ulasan.destroy', 0) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $('#deleteModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        var nama = button.data('nama');
        
        var modal = $(this);
        modal.find('#ulasan-nama').text(nama);
        
        var action = '{{ route('ulasan.destroy', ':id') }}';
        action = action.replace(':id', id);
        modal.find('#delete-form').attr('action', action);
    });
</script>

</body>
</html>