    <!-- Navbar Bawah -->
    <ul class="navbar-bawah d-flex justify-content-around m-0">
      <li>
        <a href="#header">
          <i class="bi bi-envelope-heart"></i>
        </a>
      </li>
      <li>
        <a href="#pasangan">
          <i class="bi bi-people-fill"></i>
        </a>
      </li>
      <li>
        <a href="#waktu">
          <i class="bi bi-watch"></i>
        </a>
      </li>
      <li>
        <a href="#lokasi">
          <i class="bi bi-pin-map-fill"></i>
        </a>
      </li>
      <li>
        <a href="#gallery">
          <i class="bi bi-images"></i>
        </a>
      </li>
    </ul>

    <!-- Music -->
    <div class="tombol-musik">
      <audio id="track" src="../../user_page/template/public/biodata_pelanggan/musik/<?php echo $data['musik'] ?>"></audio>
      <i id="play-pause" class="bi bi-play-fill"> </i>
    </div>
    <div class="header" id="header">
      <div class="row">
        <div class="col-lg-5 col-md-7 kiri">
          <div class="wi">
            <h4><?php echo $data['title'] ?></h4>
            <h1>
              <?php echo $data['nama_panggilan_pria'] . " & " . $data['nama_panggilan_wanita'] ?>
              
            </h1>
            <h4>
              <?php
                $date = strftime('%d %B %Y', $tgl);
                echo $date ?>
                  
                </h4>
          </div>
        </div>
        <div class="col-lg-7 col-md-3"></div>
      </div>
    </div>