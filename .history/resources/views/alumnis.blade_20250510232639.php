<!-- resources/views/home/alumnis.blade.php -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Alumni - PPM Al Kautsar</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .table th, .table td {
            white-space: nowrap;
            vertical-align: middle;
            font-size: 14px;
        }

        .table th {
            background-color: #cfe2ff;
        }

        .btn-sm {
            padding: 4px 8px;
            font-size: 13px;
        }

        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .scroll-hint {
            font-size: 0.85rem;
            color: #6c757d;
            margin-bottom: 6px;
            margin-left: 6px;
        }

        .sticky-header {
            position: sticky;
            top: 0;
            z-index: 1050;
            background-color: #fff;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0"><i class="fas fa-user-graduate me-2"></i>Daftar Alumni</h4>
        <div>
            <a href="{{ url('/#statistik') }}" class="btn btn-outline-secondary btn-sm">
                <i class="fas fa-arrow-left me-1"></i>Kembali ke Beranda Utama
            </a>
        </div>
    </div>

    <!-- Filter -->
    <div class="card mb-4">
        <div class="card-body">
            <form action="{{ route('alumnis') }}" method="get" class="row gx-2 gy-2 align-items-center">
                <div class="col-md-4">
                    <label for="kampus" class="form-label mb-1"><strong>Pilih Kampus:</strong></label>
                    <select name="kampus" id="kampus" class="form-select form-control">
                        <option value="">-- Semua Kampus --</option>
                        <option value="UM" {{ request('kampus') == 'UM' ? 'selected' : '' }}>UM</option>
                        <option value="UB" {{ request('kampus') == 'UB' ? 'selected' : '' }}>UB</option>
                        <option value="Polinema" {{ request('kampus') == 'Polinema' ? 'selected' : '' }}>Polinema</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="angkatan" class="form-label mb-1"><strong>Filter Angkatan:</strong></label>
                    <select name="angkatan" id="angkatan" class="form-select form-control">
                        <option value="">-- Semua Angkatan --</option>
                        @for ($i = 2021; $i >= 2018; $i--)
                            <option value="{{ $i }}" {{ request('angkatan') == $i ? 'selected' : '' }}>{{ $i }}</option>
                        @endfor
                        <option value="lama" {{ request('angkatan') == 'lama' ? 'selected' : '' }}>Kurang dari Tahun 2018</option>
                    </select>
                </div>

                <div class="col-md-4 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary w-100">🔍 Tampilkan Alumni</button>
                </div>
            </form>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="scroll-hint">Geser ke kanan untuk melihat lebih banyak kolom →</div>
            <div class="sticky-header bg-white shadow-sm py-2 px-2 mb-2">
                <div class="table-scroll-top">
                    <div class="table-responsive" id="scrollTop">
                        <div style="width: 2290px; height: 1px;"></div>
                    </div>
                </div>
            </div>

            <div class="table-responsive" id="scrollMain">
                <table class="table table-bordered table-hover mb-0">
                    <thead class="table-primary text-center">
                        <tr>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Kampus</th>
                            <th>Angkatan</th>
                            <th>Pekerjaan</th>
                            <th>Bidang Keahlian</th>
                            <th>Pengalaman</th>
                            <th>Asal</th>
                            <th>Kontak</th>
                            <th>Riwayat Pendidikan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alumnis as $alumni)
                            <tr>
                                <td>{{ $alumni->nama }}</td>
                                <td>{{ $alumni->jk }}</td>
                                <td>{{ $alumni->kampus }}</td>
                                <td>{{ $alumni->angkatan }}</td>
                                <td>{{ $alumni->pekerjaan }}</td>
                                <td>{{ $alumni->bidang_keahlian }}</td>
                                <td>{{ $alumni->pengalaman }}</td>
                                <td>{{ $alumni->asal }}</td>
                                <td>{{ $alumni->contact }}</td>
                                <td>{{ $alumni->riwayat_pendidikan }}</td>
                            </tr>
                        @endforeach
                        @if($alumnis->isEmpty())
                            <tr>
                                <td colspan="10" class="text-center text-muted">Tidak ada data alumni.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="text-center my-4">
        <a href="{{ url('/#statistik') }}" class="btn btn-outline-secondary">← Kembali ke Beranda Utama</a>
    </div>
</div>

<script>
    const scrollTop = document.getElementById('scrollTop');
    const scrollMain = document.getElementById('scrollMain');
    const scrollBottom = document.getElementById('scrollBottom');

    function syncScroll(source, targets) {
        source.addEventListener('scroll', () => {
            targets.forEach(target => {
                if (target !== source) {
                    target.scrollLeft = source.scrollLeft;
                }
            });
        });
    }

    syncScroll(scrollTop, [scrollMain, scrollBottom]);
    syncScroll(scrollMain, [scrollTop, scrollBottom]);
    syncScroll(scrollBottom, [scrollTop, scrollMain]);
</script>

</body>
</html>
