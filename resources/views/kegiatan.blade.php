<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kegiatan Tahunan - PPM Al Kautsar</title>
    <link rel="icon" type="image/jpeg" href="{{ url('img/logoppm.jpeg') }}">
</head>
<body>
<style>
  body {
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #f9f9fb;
    color: #333;
}
header, footer {
    background: linear-gradient(to right, #003973,rgb(88, 120, 201));
    color: white;
    padding: 1rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    animation: slideDown 0.6s ease-out;
}
header img {
    height: 40px;
    animation: fadeIn 1s ease-in;
    border-radius: 12px;
}
header h1 {
    margin: 0;
    font-size: 1.5rem;
    animation: fadeIn 1.2s ease-in;
}

.back-button {
    background-color: white;
    color: #0d6efd;
    padding: 10px 20px;
    border-radius: 8px;
    font-weight: bold;
    text-decoration: none;
    border: 2px solid #0d6efd;
    transition: all 0.4s ease;
    position: relative;
    overflow: hidden;
}

.back-button::before {
    content: "";
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(to right, rgba(255,255,255,0.2), rgba(255,255,255,0.4));
    transition: left 0.6s ease;
}

.back-button:hover::before {
    left: 100%;
}

.back-button:hover {
    background: linear-gradient(to right, #0d6efd, #083d77);
    color: white;
    transform: scale(1.05);
    box-shadow: 0 6px 16px rgba(13, 110, 253, 0.3);
}

.container {
    display: flex;
    min-height: 90vh;
}

.sidebar {
    width: 250px;
    background: #eef4ff;
    padding: 1rem;
    box-shadow: 2px 0 6px rgba(0,0,0,0.1);
    animation: fadeInLeft 0.8s ease-out;
}

.sidebar button {
    display: block;
    width: 100%;
    margin-bottom: 10px;
    padding: 10px;
    border: none;
    background: #fff;
    cursor: pointer;
    border-left: 4px solid transparent;
    border-radius: 5px;
    transition: all 0.3s;
    font-weight: 500;
}

.sidebar button:hover {
    background: #dce9ff;
}

.sidebar button.active {
    border-left: 4px solid #0d6efd;
    background: #e9f2ff;
    font-weight: bold;
}

.content {
    flex: 1;
    padding: 2rem;
    animation: fadeIn 1s ease-in;
}

.content img {
    max-width: 100%;
    height: auto;
    border-radius: 12px;
    margin-bottom: 1rem;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.content img:hover {
    transform: scale(1.03);
}

footer {
    text-align: center;
    padding: 1rem;
    font-size: 0.9rem;
    justify-content: center;
    display: flex;
    background: linear-gradient(to right, #003973,rgb(73, 126, 196));
    animation: slideUp 0.6s ease-out;
}

@keyframes fadeIn {
    from {opacity: 0;} to {opacity: 1;}
}

@keyframes fadeInLeft {
    from {opacity: 0; transform: translateX(-20px);} to {opacity: 1; transform: translateX(0);}
}

@keyframes slideDown {
    from {transform: translateY(-20px); opacity: 0;} to {transform: translateY(0); opacity: 1;}
}

@keyframes slideUp {
    from {transform: translateY(20px); opacity: 0;} to {transform: translateY(0); opacity: 1;}
}
</style>

<header>
    <div style="display: flex; align-items: center; gap: 10px;">
        <img src="{{ url('img/logoppm.jpeg') }}" alt="Logo">
        <h1>Kegiatan Tahunan PPM Al Kautsar</h1>
    </div>
    <a href="{{ url('home') }}#kegiatan" class="back-button">&larr; Kembali ke Beranda Utama</a>
</header>

<div class="container">
    <aside class="sidebar">
        <button class="active" onclick="showActivity(0)">September</button>
        <button onclick="showActivity(1)">Agustus</button>
        <button onclick="showActivity(2)">Desember</button>
        <button onclick="showActivity(3)">Januari</button>
        <button onclick="showActivity(4)">Juli</button>
        <button onclick="showActivity(5)">Juni</button>
        <button onclick="showActivity(6)">April</button>
    </aside>

    <main class="content" id="activity-content">
        <!-- Konten akan dimuat oleh JavaScript -->
    </main>
</div>

<footer>
    <p>&copy; 2025 PPM Al Kautsar. Hak cipta dilindungi undang-undang. | Dikembangkan oleh Tim Meownyala</p>
</footer>

<script>
  const activities = [
  {
    date: "5 September 2025 - AK AWARD",
    image: "img/kg1.jpg",
    description: `
      <p>AK AWARD adalah ajang penghargaan tahunan bergengsi yang diselenggarakan oleh PPM Al Kautsar sebagai bentuk apresiasi terhadap santri yang menunjukkan prestasi gemilang selama satu tahun ajaran. Kegiatan ini tidak hanya menjadi sarana motivasi, tetapi juga ajang selebrasi dan penghormatan terhadap dedikasi, semangat belajar, serta kontribusi santri dalam berbagai aspek kehidupan pondok.</p>
      <p>Acara ini dihadiri oleh seluruh santri, dewan asatidz, alumni, hingga wali santri. Kategori penghargaan mencakup bidang akademik, tahfidz, organisasi, kerapian kamar, hingga kepribadian teladan. Atmosfer kegiatan penuh dengan semangat positif, tepuk tangan, dan haru ketika nama-nama terbaik dipanggil ke panggung. AK AWARD menjadi simbol bahwa setiap santri punya kesempatan untuk bersinar dan memberi teladan.</p>
    `
  },
  {
    date: "17 Agustus 2025 - 17 AGUSTUS",
    image: "img/kg2.jpg",
    description: `
      <p>Dalam rangka memperingati Hari Ulang Tahun Republik Indonesia ke-80, PPM Al Kautsar menyelenggarakan rangkaian kegiatan bertema nasionalisme dan kebersamaan. Dimulai dengan upacara bendera yang khidmat, seluruh santri mengikuti jalannya acara dengan penuh semangat dan rasa cinta tanah air.</p>
      <p>Setelah itu, kegiatan dilanjutkan dengan berbagai lomba khas 17-an seperti tarik tambang, balap karung, lomba cerdas cermat sejarah Indonesia, dan lomba yel-yel antar kamar. Nuansa semangat perjuangan dan kebersamaan sangat terasa, memberikan pelajaran berharga bahwa kemerdekaan adalah hasil kerja keras dan kekompakan.</p>
    `
  },
  {
    date: "20 Desember 2025 - PENGAJIAN AKHIR TAHUN",
    image: "img/kg3.jpg",
    description: `
      <p>Pengajian akhir tahun menjadi momen reflektif dan spiritual di penghujung tahun pembelajaran. Kegiatan ini diisi dengan khataman Al-Qur’an, ceramah agama, dan penampilan seni Islami dari para santri. Seluruh elemen pondok berkumpul untuk menyampaikan rasa syukur atas segala pencapaian dan perjuangan yang telah dilalui selama satu tahun penuh.</p>
      <p>Suasana haru terasa ketika para santri kelas akhir menampilkan persembahan terakhir mereka. Dalam acara ini pula dilakukan penyerahan penghargaan kepada santri terbaik serta ucapan perpisahan yang sarat makna. Ini bukan sekadar acara penutupan, tapi simbol perjalanan menuju babak baru kehidupan santri.</p>
    `
  },
  {
    date: "15 Januari 2025 - FOTO MAHAD AL-KAUTSAR",
    image: "img/kg4.jpg",
    description: `
      <p>Dokumentasi tahunan dalam bentuk sesi foto resmi menjadi kegiatan penting di awal semester genap. Setiap santri dan asatidz mengenakan pakaian terbaik mereka untuk diabadikan dalam dokumentasi yang akan digunakan untuk keperluan buku tahunan, arsip pondok, hingga media promosi.</p>
      <p>Lebih dari sekadar foto, kegiatan ini menjadi ajang memperkuat identitas dan rasa memiliki terhadap PPM Al Kautsar. Momen kebersamaan dan antusiasme santri terlihat dalam ekspresi dan kebanggaan mereka saat berdiri di depan kamera, bersama-sama membingkai memori kebersamaan dalam satu frame.</p>
    `
  },
  {
    date: "28 Juli 2025 - AL-KAUTSAR ON VACATION",
    image: "img/kg5.jpg",
    description: `
      <p>Program Al-Kautsar on Vacation adalah bagian dari orientasi kreatif untuk santri baru. Melalui kegiatan ini, para santri diajak untuk menjelajahi tempat-tempat bersejarah dan wisata edukatif sambil mengenal lebih dekat teman-teman baru mereka di luar lingkungan pondok.</p>
      <p>Kegiatan ini dikemas dengan penuh keceriaan dan nilai edukatif. Dengan dipandu para pembina, santri mengunjungi tempat seperti museum Islam, situs sejarah wali songo, serta melakukan permainan kelompok yang melatih kerja sama dan kepemimpinan. Tujuannya adalah membentuk karakter kuat sejak awal masuk pondok dengan pendekatan yang menyenangkan.</p>
    `
  },
  {
    date: "10 Juni 2025 - KEAKRABAN QURBAN",
    image: "img/kg6.jpg",
    description: `
      <p>Dalam rangka menyambut Hari Raya Idul Adha, PPM Al Kautsar mengadakan program Keakraban Qurban, yaitu kegiatan penyembelihan hewan qurban yang dilakukan oleh santri secara bergiliran dan penuh semangat. Kegiatan ini tidak hanya meningkatkan pemahaman spiritual tentang makna berkurban, tetapi juga menumbuhkan rasa tanggung jawab sosial dan empati.</p>
      <p>Daging qurban didistribusikan kepada warga sekitar pondok serta masyarakat yang membutuhkan. Seluruh proses, mulai dari penyembelihan, pemotongan, hingga pembagian, dilakukan secara gotong royong oleh santri dan asatidz. Momen ini mempererat ukhuwah dan memperlihatkan pentingnya berbagi dalam ajaran Islam.</p>
    `
  },
  {
    date: "1 April 2025 - SILATURAHIM SYAWAL",
    image: "img/kg7.jpg",
    description: `
      <p>Silaturahim Syawal menjadi momen sakral pasca bulan Ramadhan. Di bulan penuh kemenangan ini, PPM Al Kautsar menggelar kegiatan halal bihalal yang mempertemukan seluruh santri, guru, dan staf pondok dalam suasana penuh kehangatan dan saling memaafkan.</p>
      <p>Kegiatan diawali dengan ceramah Syawal yang menyampaikan hikmah mempererat ukhuwah Islamiyah dan pentingnya menjaga hubungan antarmanusia. Santri kemudian saling bersalaman dan memaafkan, diiringi dengan suguhan makanan ringan dan suasana akrab. Acara ini menyegarkan hubungan antarindividu sekaligus memperkuat budaya pondok yang ramah dan penuh adab.</p>
    `
  }
];

function showActivity(index) {
  const content = document.getElementById('activity-content');
  const act = activities[index];
  content.innerHTML = `
    <h2>${act.date}</h2>
    <img src="{{ url('${act.image}') }}" alt="Dokumentasi Kegiatan ${act.date}">
    <p>${act.description}</p>
  `;

  document.querySelectorAll('.sidebar button').forEach((btn, i) => {
    btn.classList.toggle('active', i === index);
  });
}

window.onload = () => showActivity(0);
</script>

</body>
</html>