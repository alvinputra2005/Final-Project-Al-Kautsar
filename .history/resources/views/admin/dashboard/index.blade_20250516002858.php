@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <!-- Dashboard Info -->
        <div class="dashboard-info">
            <!-- Total Ulasan -->
            <div class="card">
                <h3>Total Ulasan</h3>
                <p>{{ count($ulasan) }}</p> <!-- Menampilkan jumlah ulasan dari database -->
            </div>

            <!-- Total Alumni -->
            <div class="card">
                <h3>Total Alumni</h3>
               <p>{{ count($alumni) }}</p> <!-- Menampilkan jumlah alumni dari database -->
            </div>

            <!-- Total Tendik -->
            <div class="card">
                <h3>Total Tendik</h3>
                <p>7</p> <!-- Data Dummy -->
            </div>

            <!-- Total Santri -->
            <div class="card">
                <h3>Total Santri</h3>
                <p>94</p> <!-- Data Dummy -->
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
                    data: [1, 2, 7, 94], // Data Dummy
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

            // Aktivitas Santri per Tahun
        var ctx2 = document.getElementById('aktivitasChart').getContext('2d');
        var aktivitasChart = new Chart(ctx2, {
            type: 'line',
            data: {
                labels: ['2020', '2021', '2022', '2023'], // Data tahun
                datasets: [{
                    label: 'Aktivitas Santri',
                    data: [50, 60, 70, 80], // Data Dummy untuk Aktivitas
                    fill: false,
                    borderColor: '#FF5733',
                    tension: 0.1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100 // Batas atas untuk sumbu Y
                    }
                }
            }
        });
    </script>

    <!-- Kustom CSS untuk memastikan spasi antar card -->
    <style>
        body {
            font-family: Arial, sans-serif; /* Gaya font default */
            margin: 0;
            padding: 0;
            background-color: #f4f6f9;
        }

        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 22%; /* Lebar card 22% untuk 4 card per row */
            text-align: center;
        }

        .card h3 {
            font-size: 18px;
            color: #006699;
            margin-bottom: 15px;
        }

        .card p {
            font-size: 20px;
            color: #333;
        }

        /* Styling untuk Chart */
        canvas {
            width: 100%;
            height: 400px;
        }

        /* Styling untuk halaman dengan spasi lebih */
        .mt-5 {
            margin-top: 40px;
        }
    </style>
@endsection
