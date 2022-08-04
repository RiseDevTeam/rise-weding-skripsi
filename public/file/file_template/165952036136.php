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
          <h5>
            Jam <?php echo $data['jam_mulai_akad'] . " " . $data['waktu_wilayah_akad'] ?> - Selesai</h5>
          <p>
            <?php echo $data['lokasi_akad']; ?>
          </p>
          <iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?q=<?php echo $data['lokasi_akad']; ?>&output=embed"></iframe>
        </div>
      </div>

    </div>
  </div>