@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Manajemen Ulasan</h2>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        
        <div class="mt-3">
            <a href="{{ route('admin.ulasan.create') }}" class="btn btn-primary">Tambah Ulasan</a>
        </div>
        
        <div class="mt-3">
            <table class="table">
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
                            <td>{{ str_repeat('⭐', $item->rating) }}</td>
                            <td>{{ $item->ulasan }}</td>
                            <td>
                                <a href="{{ route('admin.ulasan.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('admin.ulasan.destroy', $item->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
