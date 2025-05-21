@extends('layouts.admin')

@section('content')
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-KdE5bYOv7U5yaO2eC+rDHT8k... (potong untuk ringkas)" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <div class="container mt-4">
        <!-- Dashboard Info -->
        <div class="dashboard-info">
            <!-- Total Ulasan -->
            <div class="card">
                <h3><i class="fas fa-comments"></i> Total Ulasan</h3>
                <p>{{ count($ulasan) }}</p>
            </div>

            <!-- Total Alumni -->
            <div class="card">
                <h3><i class="fas fa-user-graduate"></i> Total Alumni</h3>
                <p>{{ count($alumni) }}</p>
            </div>

            <!-- Total Tendik (Contoh jika diaktifkan)
            <div class="card">
                <h3><i class="fas fa-chalkboard-teacher"></i> Total Tendik</h3>
                <p>7</p>
            </div> -->

            <!-- Total Santri (Contoh jika diaktifkan)
            <div class="card">
                <h3><i class="fas fa-users"></i> Total Santri</h3>
                <p>94</p>
            </div> -->
        </div>

        <!-- Statistik Penyebaran Santri -->
        <div class="mt-5">
            <h3><i class="fas fa-chart-bar"></i> Data Statistik PPM Al Kautsar Yang dapat di CRUD per Bulan Mei 2025</h3>
            <!-- <canvas id="santriChart"></canvas> -->
        </div>

        <!-- Aktivitas Santri per Tahun -->
        <!-- <div class="mt-5">
            <h3><i class="fas fa-chart-line"></i> Aktivitas Santri per Tahun</h3>
            <canvas id="aktivitasChart"></canvas>
        </div> -->
    </div>

    <!-- Chart.js script (jika ingin diaktifkan, hapus komentar) -->
    {{-- 
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx1 = document.getElementById('santriChart').getContext('2d');
        var santriChart = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: ['2020', '2021', '2022', '2023'],
                datasets: [{
                    label: 'Jumlah Santri',
                    data: [1, 2, 7, 94],
                    backgroundColor: '#006699',
                    borderColor: '#004466',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100
                    }
                }
            }
        });

        var ctx2 = document.getElementById('aktivitasChart').getContext('2d');
        var aktivitasChart = new Chart(ctx2, {
            type: 'line',
            data: {
                labels: ['2020', '2021', '2022', '2023'],
                datasets: [{
                    label: 'Aktivitas Santri',
                    data: [50, 60, 70, 80],
                    fill: false,
                    borderColor: '#FF5733',
                    tension: 0.1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100
                    }
                }
            }
        });
    </script>
    --}}

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
        }

        .container {
            padding: 20px;
        }

        .dashboard-info {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
        }

        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 22%;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h3 {
            font-size: 18px;
            color: #006699;
            margin-bottom: 15px;
        }

        .card h3 i {
            margin-right: 8px;
        }

        .card p {
            font-size: 24px;
            color: #333;
            font-weight: bold;
        }

        canvas {
            width: 100%;
            height: 400px;
        }

        .mt-5 {
            margin-top: 40px;
        }
    </style>
@endsection
