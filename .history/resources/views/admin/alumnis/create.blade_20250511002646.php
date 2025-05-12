<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Alumni</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Tambah Alumni</h2>

        <form action="{{ route('alumni.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="kampus">Kampus</label>
                <input type="text" name="kampus" id="kampus" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="angkatan">Angkatan</label>
                <input type="number" name="angkatan" id="angkatan" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                <input type="text" name="pekerjaan" id="pekerjaan" class="form-control">
            </div>

            <div class="form-group">
                <label for="bidang_keahlian">Bidang Keahlian</label>
                <input type="text" name="bidang_keahlian" id="bidang_keahlian" class="form-control">
            </div>

            <div class="form-group">
                <label for="pengalaman">Pengalaman</label>
                <textarea name="pengalaman" id="pengalaman" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="contact">Kontak</label>
                <input type="text" name="contact" id="contact" class="form-control">
            </div>

            <div class="form-group">
                <label for="riwayat_pendidikan">Riwayat Pendidikan</label>
                <textarea name="riwayat_pendidikan" id="riwayat_pendidikan" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('alumni.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>