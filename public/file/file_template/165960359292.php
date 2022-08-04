    <div class="lokasi" id="lokasi">
      <div class="container">
        <h2 class="tl">Lokasi</h2>
        <hr />
        <!-- Akad Nikah -->
        <div class="akad-nikah">
          <h3>Akad Nikah</h3>
          <div class="jdt">
            <h5>
              <?php
              $datee = strftime('%A, %d %B %Y', $tgl);
              echo $datee ?>

            </h5>
            <h5>Jam <?php echo $data['jam_mulai_akad'] . " " . $data['waktu_wilayah_akad'] ?> - Selesai</h5>
            <p>
              <?php echo $data['lokasi_akad']; ?>
            </p>
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3010958429218!2d100.3577223147536!3d-0.9225826993269867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b8b50f84e2df%3A0x6b663fb549733102!2sSTMIK%20Indonesia%20Padang!5e0!3m2!1sid!2sid!4v1656595492006!5m2!1sid!2sid" class="google-map" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->

            <iframe width="1000" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?q=<?php echo $data['lokasi_akad']; ?>&output=embed"></iframe>

          </div>
        </div>
      </div>
    </div>