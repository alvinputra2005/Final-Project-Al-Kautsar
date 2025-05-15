@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <h2>Dashboard Admin</h2>

        <!-- Dashboard Info -->
        <div class="dashboard-info">
            <!-- Total Ulasan -->
            <div class="card">
                <h3>Total Ulasan</h3>
                <p>{{ count($ulasan) }}</p>
            </div>

            <!-- Total Alumni -->
            <div class="card">
                <h3>Total Alumni</h3>
                <p>{{ count($alumni) }}</p>
            </div>
        </div>
    </div>
@endsection
