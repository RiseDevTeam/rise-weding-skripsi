    <div class="lokasi" id="lokasi">
      <div class="container">
        <h2 class="tl">Lokasi</h2>
        <hr />
        <!-- Resepsi 1 -->
        <div class="resepsi1">
          <h3>Resepsi 1</h3>
          <div class="jdt">
            <h5><?php
                $resp = strtotime($data['tanggal_resepsi']);
                $dateResp = strftime('%A, %d %B %Y', $resp);
                echo $dateResp ?></h5>
            <h5>Jam <?php echo $data['jam_mulai_resepsi'] . " " . $data['waktu_wilayah_resepsi'] ?> - Selesai</h5>
            <p>
              <?php echo $data['lokasi_resepsi']; ?>
            </p>

            <iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?q=<?php echo $data['lokasi_resepsi']; ?>&output=embed"></iframe>

          </div>
        </div>

      </div>
    </div>