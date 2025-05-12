@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4">Manajemen Ulasan Pengunjung</h2>

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Bintang</th>
                        <th>Ulasan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ulasan as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ str_repeat("⭐", $item->rating) }}</td>
                            <td>{{ $item->ulasan }}</td>
                            <td>
                                <a href="{{ route('ulasan.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="{{ $item->id }}" data-nama="{{ $item->nama }}">Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="text-left mb-5 ml-4">
            <a href="{{ route('home') }}" class="btn btn-outline-primary">← Kembali ke Beranda</a>
        </div>
    </div>
@endsection

@push('styles')
    <link href="{{ asset('css/inde.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('js/footer.js') }}"></script>
@endpush