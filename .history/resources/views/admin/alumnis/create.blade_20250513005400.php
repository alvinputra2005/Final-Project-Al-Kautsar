@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4">Tambah Alumni</h2>

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

        <form action="{{ route('admin.alumnis.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}" required>
            </div>

            <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label><br>
            <input type="radio" name="jenis_kelamin" value="Laki-laki" id="jenis_kelamin_laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'checked' : '' }}> Laki-laki
            <input type="radio" name="jenis_kelamin" value="Perempuan" id="jenis_kelamin_perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'checked' : '' }}> Perempuan
            </div>

            <div class="form-group">
                <label for="kampus">Kampus</label>
                <input type="text" name="kampus" id="kampus" class="form-control" value="{{ old('kampus') }}" required>
            </div>

            <div class="form-group">
                <label for="angkatan">Angkatan</label>
                <input type="number" name="angkatan" id="angkatan" class="form-control" value="{{ old('angkatan') }}" required>
            </div>

            <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" value="{{ old('pekerjaan') }}">
            </div>

            <div class="form-group">
                <label for="bidang_keahlian">Bidang Keahlian</label>
                <input type="text" name="bidang_keahlian" id="bidang_keahlian" class="form-control" value="{{ old('bidang_keahlian') }}">
            </div>

            <div class="form-group">
                <label for="pengalaman">Pengalaman</label>
                <textarea name="pengalaman" id="pengalaman" class="form-control">{{ old('pengalaman') }}</textarea>
            </div>

            
            <div class="form-group">
                <label for="contact">Kontak</label>
                <input type="text" name="contact" id="contact" class="form-control" value="{{ old('contact') }}">
            </div>

            <div class="form-group">
                <label for="riwayat_pendidikan">Riwayat Pendidikan</label>
                <textarea name="riwayat_pendidikan" id="riwayat_pendidikan" class="form-control">{{ old('riwayat_pendidikan') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.alumnis.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection