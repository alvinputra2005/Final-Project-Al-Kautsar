<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Alumni - PPM Al Kautsar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f0f4f8;
            font-family: 'Segoe UI', sans-serif;
        }
        .container {
            max-width: 600px;
            margin-top: 40px;
        }
        .form-card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0,102,153,0.1);
        }
        .form-card h3 {
            color: #006699;
            font-weight: bold;
        }
        .btn-primary {
            background-color: #006699;
            border: none;
        }
        .logo-pondok {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <img src="{{ asset('img/logoppm.jpeg') }}" alt="Logo Pondok" class="logo-pondok">
        <div class="form-card text-left">
            <h3 class="text-center mb-4">Edit Alumni</h3>
            <form action="{{ route('alumni.update', $alumni->id) }}" method="POST">
                @csrf
                @method('PUT') <!-- Menggunakan metode PUT untuk update -->

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $alumni->nama) }}" required>
                </div>

                <div class="form-group">
                    <label for="kampus">Kampus</label>
                    <input type="text" name="kampus" id="kampus" class="form-control" value="{{ old('kampus', $alumni->kampus) }}" required>
                </div>

                <div class="form-group">
                    <label for="angkatan">Angkatan</label>
                    <input type="number" name="angkatan" id="angkatan" class="form-control" value="{{ old('angkatan', $alumni->angkatan) }}" required>
                </div>

                <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" value="{{ old('pekerjaan', $alumni->pekerjaan) }}">
                </div>

                <div class="form-group">
                    <label for="bidang_keahlian">Bidang Keahlian</label>
                    <input type="text" name="bidang_keahlian" id="bidang_keahlian" class="form-control" value="{{ old('bidang_keahlian', $alumni->bidang_keahlian) }}">
                </div>

                <div class="form-group">
                    <label for="pengalaman">Pengalaman</label>
                    <textarea name="pengalaman" id="pengalaman" class="form-control">{{ old('pengalaman', $alumni->pengalaman) }}</textarea>
                </div>

                <div class="form-group">
                    <label for="contact">Kontak</label>
                    <input type="text" name="contact" id="contact" class="form-control" value="{{ old('contact', $alumni->contact) }}">
                </div>

                <div class="form-group">
                    <label for="riwayat_pendidikan">Riwayat Pendidikan</label>
                    <textarea name="riwayat_pendidikan" id="riwayat_pendidikan" class="form-control">{{ old('riwayat_pendidikan', $alumni->riwayat_pendidikan) }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('alumni.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</body>
</html>