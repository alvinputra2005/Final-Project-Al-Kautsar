@extends('layouts.admin')

@section('content')
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

        .btn-primary:hover {
            background-color: #004466;
        }

        .logo-pondok {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 10px;
        }
    </style>

    <div class="container text-center">
        <!-- Logo Pondok -->
        <img src="{{ asset('img/logoppm.jpeg') }}" alt="Logo Pondok" class="logo-pondok">

        <!-- Form Card -->
        <div class="form-card text-left">
            <h3 class="text-center mb-4">Edit Testimoni</h3>

            <!-- Form Edit Ulasan -->
            <form action="{{ route('admin.ulasan.update', $ulasan->id) }}" method="POST">
                @csrf
                @method('PUT') <!-- Menggunakan metode PUT untuk update -->

                <!-- Input Nama -->
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $ulasan->nama) }}" required>
                </div>

                <!-- Input Ulasan -->
                <div class="form-group">
                    <label for="ulasan">Ulasan</label>
                    <textarea name="ulasan" id="ulasan" class="form-control" rows="4" required>{{ old('ulasan', $ulasan->ulasan) }}</textarea>
                </div>

                <!-- Input Rating -->
                <div class="form-group">
                    <label for="rating">Rating (1-5)</label>
                    <input type="number" name="rating" id="rating" class="form-control" min="1" max="5" value="{{ old('rating', $ulasan->rating) }}" required>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary btn-block">Update</button>

                <!-- Cancel Button -->
                <a href="{{ route('admin.ulasan.index') }}" class="btn btn-secondary btn-block">Batal</a>
            </form>
        </div>
    </div>
@endsection
