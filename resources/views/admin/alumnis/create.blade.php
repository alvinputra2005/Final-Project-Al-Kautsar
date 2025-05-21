@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <div class="container mt-5">
        <h2 class="text-center mb-4">
            <i class="fas fa-user-graduate text-primary"></i> Tambah Alumni
        </h2>

        <!-- Notifikasi sukses -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Notifikasi error -->
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
            <form action="{{ route('admin.alumnis.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="nama"><i class="fas fa-user"></i> Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}" required>
                </div>

                <div class="form-group">
                    <label for="jenis_kelamin"><i class="fas fa-venus-mars"></i> Jenis Kelamin</label><br>
                    <input type="radio" name="jenis_kelamin" value="Laki-laki" id="jenis_kelamin_laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'checked' : '' }} required> Laki-laki
                    <input type="radio" name="jenis_kelamin" value="Perempuan" id="jenis_kelamin_perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'checked' : '' }} required> Perempuan
                </div>

                <div class="form-group">
                    <label for="kampus"><i class="fas fa-university"></i> Kampus</label>
                    <input type="text" name="kampus" id="kampus" class="form-control" value="{{ old('kampus') }}" required>
                </div>

                <div class="form-group">
                    <label for="angkatan"><i class="fas fa-calendar-alt"></i> Angkatan</label>
                    <input type="number" name="angkatan" id="angkatan" class="form-control" value="{{ old('angkatan') }}" required>
                </div>

                <div class="form-group">
                    <label for="pekerjaan"><i class="fas fa-briefcase"></i> Pekerjaan</label>
                    <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" value="{{ old('pekerjaan') }}" required>
                </div>

                <div class="form-group">
                    <label for="bidang_keahlian"><i class="fas fa-tools"></i> Bidang Keahlian</label>
                    <input type="text" name="bidang_keahlian" id="bidang_keahlian" class="form-control" value="{{ old('bidang_keahlian') }}" required>
                </div>

                <div class="form-group">
                    <label for="pengalaman"><i class="fas fa-book"></i> Pengalaman</label>
                    <textarea name="pengalaman" id="pengalaman" class="form-control" required>{{ old('pengalaman') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="asal"><i class="fas fa-map-marker-alt"></i> Asal</label>
                    <input type="text" name="asal" id="asal" class="form-control" value="{{ old('asal') }}" required>
                </div>

                <div class="form-group">
                    <label for="contact"><i class="fas fa-phone"></i> Kontak</label>
                    <input type="text" name="contact" id="contact" class="form-control" value="{{ old('contact') }}" required>
                </div>

                <div class="form-group">
                    <label for="riwayat_pendidikan"><i class="fas fa-graduation-cap"></i> Riwayat Pendidikan</label>
                    <textarea name="riwayat_pendidikan" id="riwayat_pendidikan" class="form-control" required>{{ old('riwayat_pendidikan') }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan
                </button>
                <a href="{{ route('admin.alumnis.index') }}" class="btn btn-secondary">
                    <i class="fas fa-times"></i> Batal
                </a>
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
