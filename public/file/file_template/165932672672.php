  <div class="pasangan" id="pasangan">
    <div class="bunga-atas">
      <img src="http://risedevteam.com/template-basic-2/public/images/bunga.png" class="bunga-kiri" alt="Bunga" />
      <img src="http://risedevteam.com/template-basic-2/public/images/bunga.png" class="bunga-kanan" alt="Bunga" />
    </div>
    <div class="container">
      <h2>Pasangan Mempelai</h2>
      <hr />
      <div class="row mempelai">
        <div class="pria col-lg-6 col-md-6">
          <div class="card">
            <img src="../../user_page/template/public/biodata_pelanggan/gambar_mempelai_pria/<?php echo $data['gambar_mempelai_pria'] ?>" alt="mempelai-pria" class="foto" />
            <div class="card-body">
              <h3><?php echo $data['nama_lengkap_pria'] ?></h3>
              <p><?php echo $data['putra_dari'] . " Bpk. " . $data['nama_bapak_pria'] . " Ibu " . $data['nama_ibu_pria'] ?></p>
            </div>
          </div>
        </div>
        <div class="wanita col-lg-6 col-md-6">
          <div class="card">
            <img src="../../user_page/template/public/biodata_pelanggan/gambar_mempelai_wanita/<?php echo $data['gambar_mempelai_wanita'] ?>" alt="mempelai-wanita" class="foto" />
            <div class="card-body">
              <h3><?php echo $data['nama_lengkap_wanita'] ?></h3>
              <p><?php echo $data['putri_dari'] . " Bpk. " . $data['nama_bapak_wanita'] . " Ibu " . $data['nama_ibu_wanita'] ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bunga-bawah">
      <img src="http://risedevteam.com/template-basic-2/public/images/bunga.png" class="bunga-kiri" alt="Bunga" />
      <img src="http://risedevteam.com/template-basic-2/public/images/bunga.png" class="bunga-kanan" alt="Bunga" />
    </div>
  </div>