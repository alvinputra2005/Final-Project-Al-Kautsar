@extends('layouts.admin')

@section('content')
<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    body {
        background-color: #f0f4f8;
        font-family: 'Segoe UI', sans-serif;
    }

    .container {
        max-width: 600px;
        margin-top: 60px;
    }

    .form-card {
        background: white;
        padding: 35px 30px;
        border-radius: 20px;
        box-shadow: 0 8px 20px rgba(0, 102, 153, 0.15);
        transition: transform 0.3s ease;
    }

    .form-card:hover {
        transform: translateY(-5px);
    }

    .form-title {
        color: #006699;
        font-weight: bold;
        margin-bottom: 25px;
        position: relative;
        text-align: center;
        font-size: 24px;
    }

    .form-title i {
        margin-right: 10px;
        color: #006699;
    }

    .form-group label {
        font-weight: 600;
        margin-bottom: 8px;
        color: #333;
    }

    .form-control {
        border-radius: 10px;
        padding: 10px 15px;
        border: 1px solid #ccd6dd;
        transition: border-color 0.3s;
    }

    .form-control:focus {
        border-color: #006699;
        box-shadow: 0 0 5px rgba(0,102,153,0.3);
    }

    .btn-primary {
        background-color: #006699;
        border: none;
        width: 100%;
        margin-top: 20px;
        padding: 10px;
        border-radius: 8px;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #004466;
    }

    .btn-secondary {
        background-color: #ccc;
        border: none;
        width: 100%;
        margin-top: 10px;
        padding: 10px;
        border-radius: 8px;
        font-weight: bold;
    }

    .btn-secondary:hover {
        background-color: #bbb;
    }
</style>

<div class="container">
    <div class="form-card">
        <!-- Judul dengan ikon -->
        <h3 class="form-title">
            <i class="fas fa-pen-fancy"></i> Edit Testimoni
        </h3>

        <form action="{{ route('admin.ulasan.update', $ulasan->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Input Nama -->
            <div class="form-group mb-3">
                <label for="nama"><i class="fas fa-user"></i> Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $ulasan->nama) }}" required>
            </div>

            <!-- Input Ulasan -->
            <div class="form-group mb-3">
                <label for="ulasan"><i class="fas fa-comment-dots"></i> Ulasan</label>
                <textarea name="ulasan" id="ulasan" class="form-control" rows="4" required>{{ old('ulasan', $ulasan->ulasan) }}</textarea>
            </div>

            <!-- Input Rating -->
            <div class="form-group mb-4">
                <label for="rating"><i class="fas fa-star"></i> Rating (1-5)</label>
                <input type="number" name="rating" id="rating" class="form-control" min="1" max="5" value="{{ old('rating', $ulasan->rating) }}" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan Perubahan</button>

            <!-- Cancel Button -->
            <a href="{{ route('admin.ulasan.index') }}" class="btn btn-secondary"><i class="fas fa-times"></i> Batal</a>
        </form>
    </div>
</div>
@endsection
