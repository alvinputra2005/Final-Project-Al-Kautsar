<footer class="footer" id="footer" style="scroll-margin-top: 50px;">
    <div class="footer-container">
      <div class="footer-top">
        <div class="footer-about">
          <h2>PPM AL KAUTSAR</h2>
          <p>
            Pondok Pesantren Mahasiswa: Mewujudkan generasi sarjana berilmu fiqih, sesuai slogan 'Sarjana yang Mubaligh, Mubaligh yang Sarjana'.
          </p><br><p>Hubungi Kami</p>
          <div class="footer-socials">
            <a href="https://www.facebook.com/share/1J1Po2TLNa/" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/ppm_alkautsar?igsh=ZG4wbG5lMTFreWdl" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://youtube.com/@ppmal-kautsar6141?si=yK28UWqUGL0L-CIU" target="_blank"><i class="fab fa-youtube"></i></a>
            <a href="https://wa.me/6285646322300?text=Assalamu'alaikum%20Wr.Wb.%2C%20saya%20ingin%20bertanya%20tentang%20PPM%20Al%20Kautsar" target="_blank"><i class="fab fa-whatsapp"></i></a>
          </div>
        </div>
  
        <div class="footer-links-container">
          <div class="footer-links">
            <h3>Link Terkait</h3>
            <ul>
              <li><a href="https://www.ldii.or.id/" target="_blank">LDII</a></li>
              <li><a href="https://kemenag.go.id/" target="_blank">Kemenag RI</a></li>
              <li><a href="https://vervalyayasan.data.kemdikbud.go.id/index.php/Chome/profil?yayasan_id=379D3532-D82D-40E9-ABD2-4A86C14EFE0C" target="_blank">Yayasan</a></li>
            </ul>
          </div>

          <div class="footer-links-container">
            <div class="footer-links-group">
              <div class="footer-links">
                <h3>Lanjutan</h3>
                <ul>
                    <li><a href="{{ route('tendik') }}">Biodata TENDIK</a></li>
                    <li><a href="{{ route('santri') }}">Biodata Santri</a></li>
                    <li><a href="{{ route('alumnis') }}">Biodata Alumni</a></li>
                    <li><a href="{{ route('sarpras') }}">Biodata Sarpras</a></li>
                </ul>
              </div>
              <div class="footer-links">
              <ul>
                  <br>
                  <br>
                  <li><a href="{{ route('ulasan.create') }}">Tambah Ulasan</a></li>
                  <li><a href="{{ route('kegiatan') }}">Kegiatan Tahunan</a></li>
                  <li><a href="{{ route('prestasi') }}">Prestasi</a></li>
              </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <div class="footer-map-box">
        <iframe 
          src="https://maps.google.com/maps?q=PPM+Al Kautsar+Malang&output=embed"
          allowfullscreen
          loading="lazy">
        </iframe>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2025 PPM Al Kautsar. Hak cipta dilindungi undang-undang. | Dikembangkan oleh Tim Meownyala</p>
    </div>    
  </footer>

@push('styles')
<link href="{{ asset('css/footer.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<script src="{{ asset('js/footer.js') }}"></script>
@endpush