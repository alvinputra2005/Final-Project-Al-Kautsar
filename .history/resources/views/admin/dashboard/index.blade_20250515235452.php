<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .card {
      margin: 15px;
    }
    .card-header {
      background-color: #1A4F87;
      color: white;
    }
    .card-body {
      text-align: center;
    }
    .card-footer {
      background-color: #f8f9fa;
    }
    .container {
      margin-top: 20px;
    }
    .chart-container {
      margin-top: 30px;
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Dashboard Admin</a>
      <button class="btn btn-danger ml-auto">Logout</button>
    </nav>

    <!-- Cards -->
    <div class="row">
      <div class="col-md-2">
        <div class="card">
          <div class="card-header">
            Total Ulasan
          </div>
          <div class="card-body">
            <h5 class="card-title" id="total-ulasan">150</h5>
          </div>
        </div>
      </div>

      <div class="col-md-2">
        <div class="card">
          <div class="card-header">
            Total Alumni
          </div>
          <div class="card-body">
            <h5 class="card-title" id="total-alumni">200</h5>
          </div>
        </div>
      </div>

      <div class="col-md-2">
        <div class="card">
          <div class="card-header">
            Total Tendik
          </div>
          <div class="card-body">
            <h5 class="card-title">50</h5>
          </div>
        </div>
      </div>

      <div class="col-md-2">
        <div class="card">
          <div class="card-header">
            Total Santri
          </div>
          <div class="card-body">
            <h5 class="card-title">500</h5>
          </div>
        </div>
      </div>

      <div class="col-md-2">
        <div class="card">
          <div class="card-header">
            Total Sarpras
          </div>
          <div class="card-body">
            <h5 class="card-title">30</h5>
          </div>
        </div>
      </div>
    </div>

    <!-- Chart -->
    <div class="chart-container">
      <h3>Statistik Penyebaran Santri Berdasarkan Tahun</h3>
      <canvas id="myChart"></canvas>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    // Data Chart.js
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['2021', '2022', '2023', '2024', '2025'],
        datasets: [{
          label: 'Jumlah Santri',
          data: [120, 130, 140, 150, 160], // Data dummy
          backgroundColor: 'rgba(26, 79, 135, 0.6)',
          borderColor: 'rgba(26, 79, 135, 1)',
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
  </script>
</body>
</html>
