@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <h2>Dashboard Admin</h2>

        <!-- Dashboard Info -->
        <div class="dashboard-info">
            <!-- Total Ulasan -->
            <div class="card mb-4">
                <h3>Total Ulasan</h3>
                <p>150</p> <!-- Data Dummy -->
            </div>

            <!-- Total Alumni -->
            <div class="card mb-4">
                <h3>Total Alumni</h3>
                <p>200</p> <!-- Data Dummy -->
            </div>

            <!-- Total Tendik -->
            <div class="card mb-4">
                <h3>Total Tendik</h3>
                <p>50</p> <!-- Data Dummy -->
            </div>

            <!-- Total Santri -->
            <div class="card mb-4">
                <h3>Total Santri</h3>
                <p>500</p> <!-- Data Dummy -->
            </div>

            <!-- Total Sarpras -->
            <div class="card mb-4">
                <h3>Total Sarpras</h3>
                <p>30</p> <!-- Data Dummy -->
            </div>
        </div>

        <!-- Statistik Penyebaran Santri -->
        <div class="mt-5">
            <h3>Statistik Penyebaran Santri Berdasarkan Tahun</h3>
            <canvas id="santriChart"></canvas>
        </div>

        <!-- Aktivitas Santri per Tahun -->
        <div class="mt-5">
            <h3>Aktivitas Santri per Tahun</h3>
            <canvas id="aktivitasChart"></canvas>
        </div>
    </div>

    <!-- Script untuk Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Statistik Penyebaran Santri
        var ctx1 = document.getElementById('santriChart').getContext('2d');
        var santriChart = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: ['2020', '2021', '2022', '2023'], // Data tahun
                datasets: [{
                    label: 'Jumlah Santri',
                    data: [100, 120, 140, 160], // Data Dummy
                    backgroundColor: '#006699',
                    borderColor: '#004466',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Aktivitas Santri per Tahun
        var ctx2 = document.getElementById('aktivitasChart').getContext('2d');
        var aktivitasChart = new Chart(ctx2, {
            type: 'line',
            data: {
                labels: ['2020', '2021', '2022', '2023'], // Data tahun
                datasets: [{
                    label: 'Aktivitas Santri',
                    data: [75, 80, 90, 95], // Data Dummy untuk Aktivitas
                    fill: false,
                    borderColor: '#FF5733',
                    tension: 0.1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    <!-- Kustom CSS untuk memastikan spasi antar card -->
    <style>
        .card {
            margin-bottom: 20px; /* Spasi antara card */
        }
    </style>
@endsection
