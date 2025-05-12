@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4">Edit Alumni</h2>

        <!-- Menampilkan notifikasi jika ada -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Menampilkan error jika ada -->
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-card text-left">
            <form action="{{ route('admin.alumnis.update', $alumni->id) }}" method="POST">
                @csrf
                @method('PUT') <!-- Menggunakan metode PUT untuk update -->

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $alumni->nama) }}" required>
                </div>

                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label><br>
                    <input type="radio" name="jenis_kelamin" value="Laki-laki" id="jenis_kelamin_laki" {{ old('jenis_kelamin', $alumni->jenis_kelamin) == 'Laki-laki' ? 'checked' : '' }}> Laki-laki
                    <input type="radio" name="jenis_kelamin" value="Perempuan" id="jenis_kelamin_perempuan" {{ old('jenis_kelamin', $alumni->jenis_kelamin) == 'Perempuan' ? 'checked' : '' }}> Perempuan
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
                    <label for="asal">Asal</label>
                    <input type="text" name="asal" id="asal" class="form-control" value="{{ old('asal', $alumni->asal) }}">
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
                <a href="{{ route('admin.alumnis.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection

@section('styles')
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
@endsection
