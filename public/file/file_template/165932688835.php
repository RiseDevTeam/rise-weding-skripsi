  <div class="lokasi" id="lokasi">
    <div class="container">
      <h2 class="tl">Lokasi</h2>
      <hr />

      <!-- Resepsi 2 -->
      <div class="resepsi2">
        <h3>Resepsi 2</h3>
        <div class="jdt">
          <h5><?php
              $resp2 = strtotime($data['tanggal_resepsi_2']);
              $dateResp2 = strftime('%A, %d %B %Y', $resp2);
              echo $dateResp2 ?></h5>
          <h5>Jam <?php echo $data['jam_mulai_resepsi_2'] . " " . $data['waktu_wilayah_resepsi_2'] ?> - Selesai</h5>
          <p>
            <?php echo $data['lokasi_resepsi_2']; ?>
          </p>

          <iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?q=<?php echo $data['lokasi_resepsi_2']; ?>&output=embed"></iframe>
        </div>
      </div>
    </div>
  </div>