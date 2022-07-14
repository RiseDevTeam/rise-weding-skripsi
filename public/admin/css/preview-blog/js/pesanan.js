// Card Pesanan Template
function viewTemplate(name) {
  const templateWedding = document.getElementById('templateWedding').innerText=name;

  if(templateWedding == "semua") {
    document.getElementById('templateWedding').innerHTML=`
        <div id="templateWedding">
          <!-- Card Template Wedding Selesai -->
          <div class="card" id="tSelesai">
            <div class="row">
              <!-- Image and Video -->
              <div class="col-lg-3 template">
                <img src="../../img/cwi1.jpg" class="img-fluid mx-auto" alt="" />
              </div>
              <!-- isi Card -->
              <div class="col-lg-9 isi">
                <!-- Kategori and Selesai -->
                <div class="kas">
                  <span>Kategori : <b>Template Spesial</b></span>
                  <span>Template Selesai</span>
                </div>
                <!-- Nama Pengantin and Link Wedding -->
                <div class="npalw">
                  <h3 class="my-4">Joko Blackzycowskzy & Putri Rostchild</h3>
                  <a href="#">https://www.weddingku.com/</a>
                </div>
                <!-- Bagikan -->
                <div class="bagikan">
                  <span>
                    Bagikan : &nbsp;
                    <a class="bi bi-whatsapp" href="#"></a>
                    <a class="bi bi-telegram" href="#"></a>
                  </span>
                  <h4 class="harga">Harga : <b>Rp199.000</b></h4>
                </div>
                <!-- Daftar Button Preview and Sunting -->
                <div class="daftar-button">
                  <div class="bpas">
                    <button class="btn">
                      Preview
                    </button>
                    <button class="btn">
                      Sunting
                    </button>
                  </div>
                  <!-- Ulasan and Bayar-->
                  <button class="btn uab">
                    Ulasan
                  </button>
                </div>
              </div>
              <!-- End isi Card -->
            </div>
          </div>
          <!-- End Card Template Wedding Selesai -->

          <!-- Card Template Wedding Belum Bayar -->
          <div class="card" id="tBelumBayar">
            <div class="row">
              <!-- Template Wedding -->
              <div class="col-lg-3 template">
                <img src="../../img/cwi1.jpg" class="img-fluid mx-auto" alt="" />
              </div>
              <!-- isi Card -->
              <div class="col-lg-9 isi">
                <!-- Kategori and Selesai -->
                <div class="kas">
                  <span>Kategori : <b>Template Spesial</b></span>
                  <span>Belum Bayar</span>
                </div>
                <!-- Nama Pengantin and Link Wedding -->
                <div class="npalw">
                  <h3 class="my-4">Joko Blackzycowskzy & Putri Rostchild</h3>
                  <p>Silahkan Melakukan Pembayaran paling lambat 1 X 24 jam</p>
                </div>
                <!-- Bagikan -->
                <div class="bagikan">
                  <span>
                    Bagikan : &nbsp;
                    <a class="bi bi-whatsapp" href="#"></a>
                    <a class="bi bi-telegram" href="#"></a>
                  </span>
                  <h4 class="harga">Harga : <b>Rp199.000</b></h4>
                </div>
                <!-- Daftar Button -->
                <div class="daftar-button">
                  <div class="bpas">
                    <button class="btn">
                      Preview
                    </button>
                    <button class="btn">
                      Sunting
                    </button>
                  </div>
                  <!-- Ulasan and Bayar -->
                  <button class="btn uab">
                    Bayar
                  </button>
                </div>
              </div>
              <!-- End isi Card -->
            </div>
          </div>
          <!-- End Card Template Wedding Belum Bayar -->

          <!-- Card Video Wedding Sedang Diproses -->
          <div class="card" id="tDiProses">
            <div class="row">
              <!-- Template Wedding -->
            <div class="col-lg-3 template">
              <img src="../../img/cwi1.jpg" class="img-fluid mx-auto" alt="" />
            </div>
              <!-- isi Card -->
              <div class="col-lg-9 isi">
                <!-- Kategori and Selesai -->
              <div class="kas">
                <span>Kategori : <b>Template Spesial</b></span>
                <span>Sedang Diproses</span>
              </div>
                <!-- Nama Pengantin and Link Wedding -->
                <div class="npalw">
                  <h3 class="mt-4">Joko Blackzycowskzy & Putri Rostchild</h3>
                  <p class="mt-4 mb-0">
                    Estimasi Template Wedding selesai: 1 X 24 jam
                  </p>
                  <p>
                    Setelah Template Wedding selesai Kami akan mengirimkan notifikasi ke
                    nomor What's App Anda
                  </p>
                </div>
                <!-- Bagikan -->
                <div class="bagikan">
                  <span>
                    Bagikan : &nbsp;
                    <a class="bi bi-whatsapp" href="#"></a>
                    <a class="bi bi-telegram" href="#"></a>
                  </span>
                  <h4 class="harga">Harga : <b>Rp199.000</b></h4>
                </div>
                <!-- Daftar Button Preview and Sunting -->
                <div class="daftar-button">
                  <div class="bpas">
                    <button class="btn">
                      Preview
                    </button>
                  </div>
                  <!-- Ulasan and Bayar -->
                  <button class="btn uab">
                    Ulasan
                  </button>
                </div>
              </div>
              <!-- End isi Card -->
            </div>
          </div>
          <!-- End Card Video Wedding Sedang Diproses -->
        </div>
    `;
  }
    if(templateWedding == "belumBayar") {
    document.getElementById('templateWedding').innerHTML=`
          <!-- Card Template Wedding Belum Bayar -->
          <div class="card" id="tBelumBayar">
            <div class="row">
              <!-- Template Wedding -->
              <div class="col-lg-3 template">
                <img src="../../img/cwi1.jpg" class="img-fluid mx-auto" alt="" />
              </div>
              <!-- isi Card -->
              <div class="col-lg-9 isi">
                <!-- Kategori and Selesai -->
                <div class="kas">
                  <span>Kategori : <b>Template Spesial</b></span>
                  <span>Belum Bayar</span>
                </div>
                <!-- Nama Pengantin and Link Wedding -->
                <div class="npalw">
                  <h3 class="my-4">Joko Blackzycowskzy & Putri Rostchild</h3>
                  <p>Silahkan Melakukan Pembayaran paling lambat 1 X 24 jam</p>
                </div>
                <!-- Bagikan -->
                <div class="bagikan">
                  <span>
                    Bagikan : &nbsp;
                    <a class="bi bi-whatsapp" href="#"></a>
                    <a class="bi bi-telegram" href="#"></a>
                  </span>
                  <h4 class="harga">Harga : <b>Rp199.000</b></h4>
                </div>
                <!-- Daftar Button -->
                <div class="daftar-button">
                  <div class="bpas">
                    <button class="btn">
                      Preview
                    </button>
                    <button class="btn">
                      Sunting
                    </button>
                  </div>
                  <!-- Ulasan and Bayar -->
                  <button class="btn uab">
                    Bayar
                  </button>
                </div>
              </div>
              <!-- End isi Card -->
            </div>
          </div>
          <!-- End Card Template Wedding Belum Bayar -->
      `;
  }
    if(templateWedding == "diProses") {
    document.getElementById('templateWedding').innerHTML=`
          <!-- Card Video Wedding Sedang Diproses -->
          <div class="card" id="tDiProses">
            <div class="row">
              <!-- Template Wedding -->
            <div class="col-lg-3 template">
              <img src="../../img/cwi1.jpg" class="img-fluid mx-auto" alt="" />
            </div>
              <!-- isi Card -->
              <div class="col-lg-9 isi">
                <!-- Kategori and Selesai -->
              <div class="kas">
                <span>Kategori : <b>Template Spesial</b></span>
                <span>Sedang Diproses</span>
              </div>
                <!-- Nama Pengantin and Link Wedding -->
                <div class="npalw">
                  <h3 class="mt-4">Joko Blackzycowskzy & Putri Rostchild</h3>
                  <p class="mt-4 mb-0">
                    Estimasi Template Wedding selesai: 1 X 24 jam
                  </p>
                  <p>
                    Setelah Template Wedding selesai Kami akan mengirimkan notifikasi ke
                    nomor What's App Anda
                  </p>
                </div>
                <!-- Bagikan -->
                <div class="bagikan">
                  <span>
                    Bagikan : &nbsp;
                    <a class="bi bi-whatsapp" href="#"></a>
                    <a class="bi bi-telegram" href="#"></a>
                  </span>
                  <h4 class="harga">Harga : <b>Rp199.000</b></h4>
                </div>
                <!-- Daftar Button Preview and Sunting -->
                <div class="daftar-button">
                  <div class="bpas">
                    <button class="btn">
                      Preview
                    </button>
                  </div>
                  <!-- Ulasan and Bayar -->
                  <button class="btn uab">
                    Ulasan
                  </button>
                </div>
              </div>
              <!-- End isi Card -->
            </div>
          </div>
          <!-- End Card Video Wedding Sedang Diproses -->
    `;
  }
    if(templateWedding == "selesai") {
    document.getElementById('templateWedding').innerHTML=`
          <!-- Card Template Wedding Selesai -->
          <div class="card" id="tSelesai">
            <div class="row">
              <!-- Image and Video -->
              <div class="col-lg-3 template">
                <img src="../../img/cwi1.jpg" class="img-fluid mx-auto" alt="" />
              </div>
              <!-- isi Card -->
              <div class="col-lg-9 isi">
                <!-- Kategori and Selesai -->
                <div class="kas">
                  <span>Kategori : <b>Template Spesial</b></span>
                  <span>Template Selesai</span>
                </div>
                <!-- Nama Pengantin and Link Wedding -->
                <div class="npalw">
                  <h3 class="my-4">Joko Blackzycowskzy & Putri Rostchild</h3>
                  <a href="#">https://www.weddingku.com/</a>
                </div>
                <!-- Bagikan -->
                <div class="bagikan">
                  <span>
                    Bagikan : &nbsp;
                    <a class="bi bi-whatsapp" href="#"></a>
                    <a class="bi bi-telegram" href="#"></a>
                  </span>
                  <h4 class="harga">Harga : <b>Rp199.000</b></h4>
                </div>
                <!-- Daftar Button Preview and Sunting -->
                <div class="daftar-button">
                  <div class="bpas">
                    <button class="btn">
                      Preview
                    </button>
                    <button class="btn">
                      Sunting
                    </button>
                  </div>
                  <!-- Ulasan and Bayar-->
                  <button class="btn uab">
                    Ulasan
                  </button>
                </div>
              </div>
              <!-- End isi Card -->
            </div>
          </div>
          <!-- End Card Template Wedding Selesai -->
        `;
  }
  
}

// Card Pesanan Video
function viewVideo(name) {
  const videoWedding = document.getElementById('videoWedding').innerText=name;

  if(videoWedding == "semua") {
    document.getElementById('videoWedding').innerHTML = `
        <div id="videoWedding">
          <!-- Card Video Wedding Selesai -->
          <div class="card" id="tSelesai">
            <div class="row">
              <!-- Video Wedding -->
              <div class="col-lg-3 video">
                <div class="ratio ratio-16x9">
                  <iframe
                    src="https://www.youtube.com/embed/Vq2uDHYXdN8"
                    title="YouTube video"
                    frameborder="0"
                    allowfullscreen
                  ></iframe>
                </div>
              </div>
              <!-- isi Card -->
              <div class="col-lg-9 isi">
                <!-- Kategori and Selesai -->
                <div class="kas">
                  <span>Kategori : <b>Video Spesial</b></span>
                  <span>Video Selesai</span>
                </div>
                <!-- Nama Pengantin and Keterangan -->
                <div class="npak">
                  <h3 class="mt-4 mb-4">
                    Joko Blackzycowskzy & Putri Rostchild
                  </h3>
                  <button class="btn">
                    Download
                  </button>
                </div>
                <!-- Bagikan -->
                <div class="bagikan">
                  <span>
                    Bagikan : &nbsp;
                    <a class="bi bi-whatsapp" href="#"></a>
                    <a class="bi bi-telegram" href="#"></a>
                  </span>
                  <h4 class="harga">Harga : <b>Rp199.000</b></h4>
                </div>
                <!-- Daftar Button Preview and Sunting -->
                <div class="daftar-button">
                  <div class="bpas">
                    <button class="btn">
                      Preview
                    </button>
                    <button class="btn">
                      Sunting
                    </button>
                  </div>
                  <!-- Ulasan -->
                  <button class="btn uab">
                    Ulasan
                  </button>
                </div>
              </div>
              <!-- End isi Card -->
            </div>
          </div>
          <!-- End Card Video Wedding Selesai -->

          <!-- Card Video Wedding Belum Bayar -->
          <div class="card" id="tBelumBayar">
            <div class="row">
              <!-- Video Wedding -->
              <div class="col-lg-3 video">
                <div class="ratio ratio-16x9">
                  <iframe
                    src="https://www.youtube.com/embed/Vq2uDHYXdN8"
                    title="YouTube video"
                    frameborder="0"
                    allowfullscreen
                  ></iframe>
                </div>
              </div>
              <!-- isi Card -->
              <div class="col-lg-9 isi">
                <!-- Kategori and Selesai -->
                <div class="kas">
                  <span>Kategori : <b>Video Spesial</b></span>
                  <span>Belum Bayar</span>
                </div>
                <!-- Nama Pengantin and Link Wedding -->
                <div class="npalw">
                  <h3 class="mt-4 mb-4">
                    Joko Blackzycowskzy & Putri Rostchild
                  </h3>
                  <p>Silahkan Melakukan Pembayaran paling lambat 1 X 24 jam</p>
                </div>
                <!-- Bagikan -->
                <div class="bagikan">
                  <span>
                    Bagikan : &nbsp;
                    <a class="bi bi-whatsapp" href="#"></a>
                    <a class="bi bi-telegram" href="#"></a>
                  </span>
                  <h4 class="harga">Harga : <b>Rp199.000</b></h4>
                </div>
                <!-- Daftar Button Preview and Sunting -->
                <div class="daftar-button">
                  <div class="bpas">
                    <button class="btn">
                      Preview
                    </button>
                  </div>
                  <!-- Ulasan and Bayar -->
                  <button class="btn uab">
                    Bayar
                  </button>
                </div>
              </div>
              <!-- End isi Card -->
            </div>
          </div>
          <!-- End Card Video Wedding Belum Bayar -->

          <!-- Card Video Wedding Sedang Diproses -->
          <div class="card" id="tDiProses">
            <div class="row">
              <!-- Video Wedding -->
              <div class="col-lg-3 video">
                <div class="ratio ratio-16x9">
                  <iframe
                    src="https://www.youtube.com/embed/Vq2uDHYXdN8"
                    title="YouTube video"
                    frameborder="0"
                    allowfullscreen
                  ></iframe>
                </div>
              </div>
              <!-- isi Card -->
              <div class="col-lg-9 isi">
                <!-- Kategori and Selesai -->
                <div class="kas">
                  <span>Kategori : <b>Video Spesial</b></span>
                  <span>Sedang Diproses</span>
                </div>
                <!-- Nama Pengantin and Link Wedding -->
                <div class="npalw">
                  <h3 class="mt-4">Joko Blackzycowskzy & Putri Rostchild</h3>
                  <p class="mt-4 mb-0">
                    Estimasi Video Wedding selesai: 1 X 24 jam
                  </p>
                  <p>
                    Setelah Video selesai Kami akan mengirimkan notifikasi ke
                    nomor What's App Anda
                  </p>
                </div>
                <!-- Bagikan -->
                <div class="bagikan">
                  <span>
                    Bagikan : &nbsp;
                    <a class="bi bi-whatsapp" href="#"></a>
                    <a class="bi bi-telegram" href="#"></a>
                  </span>
                  <h4 class="harga">Harga : <b>Rp199.000</b></h4>
                </div>
                <!-- Daftar Button Preview and Sunting -->
                <div class="daftar-button">
                  <div class="bpas">
                    <button class="btn">
                      Preview
                    </button>
                  </div>
                  <!-- Ulasan and Bayar -->
                  <button class="btn uab">
                    Ulasan
                  </button>
                </div>
              </div>
              <!-- End isi Card -->
            </div>
          </div>
          <!-- End Card Video Wedding Sedang Diproses -->
        </div>
    `;
  }

  if(videoWedding == "belumBayar") {
    document.getElementById('videoWedding').innerHTML = `
          <!-- Card Video Wedding Belum Bayar -->
          <div class="card" id="tBelumBayar">
            <div class="row">
              <!-- Video Wedding -->
              <div class="col-lg-3 video">
                <div class="ratio ratio-16x9">
                  <iframe
                    src="https://www.youtube.com/embed/Vq2uDHYXdN8"
                    title="YouTube video"
                    frameborder="0"
                    allowfullscreen
                  ></iframe>
                </div>
              </div>
              <!-- isi Card -->
              <div class="col-lg-9 isi">
                <!-- Kategori and Selesai -->
                <div class="kas">
                  <span>Kategori : <b>Video Spesial</b></span>
                  <span>Belum Bayar</span>
                </div>
                <!-- Nama Pengantin and Link Wedding -->
                <div class="npalw">
                  <h3 class="mt-4 mb-4">
                    Joko Blackzycowskzy & Putri Rostchild
                  </h3>
                  <p>Silahkan Melakukan Pembayaran paling lambat 1 X 24 jam</p>
                </div>
                <!-- Bagikan -->
                <div class="bagikan">
                  <span>
                    Bagikan : &nbsp;
                    <a class="bi bi-whatsapp" href="#"></a>
                    <a class="bi bi-telegram" href="#"></a>
                  </span>
                  <h4 class="harga">Harga : <b>Rp199.000</b></h4>
                </div>
                <!-- Daftar Button Preview and Sunting -->
                <div class="daftar-button">
                  <div class="bpas">
                    <button class="btn">
                      Preview
                    </button>
                  </div>
                  <!-- Ulasan and Bayar -->
                  <button class="btn uab">
                    Bayar
                  </button>
                </div>
              </div>
              <!-- End isi Card -->
            </div>
          </div>
          <!-- End Card Video Wedding Belum Bayar -->
    `;
  }

  if(videoWedding == "diProses") {
    document.getElementById('videoWedding').innerHTML = `
          <!-- Card Video Wedding Sedang Diproses -->
          <div class="card" id="tDiProses">
            <div class="row">
              <!-- Video Wedding -->
              <div class="col-lg-3 video">
                <div class="ratio ratio-16x9">
                  <iframe
                    src="https://www.youtube.com/embed/Vq2uDHYXdN8"
                    title="YouTube video"
                    frameborder="0"
                    allowfullscreen
                  ></iframe>
                </div>
              </div>
              <!-- isi Card -->
              <div class="col-lg-9 isi">
                <!-- Kategori and Selesai -->
                <div class="kas">
                  <span>Kategori : <b>Video Spesial</b></span>
                  <span>Sedang Diproses</span>
                </div>
                <!-- Nama Pengantin and Link Wedding -->
                <div class="npalw">
                  <h3 class="mt-4">Joko Blackzycowskzy & Putri Rostchild</h3>
                  <p class="mt-4 mb-0">
                    Estimasi Video Wedding selesai: 1 X 24 jam
                  </p>
                  <p>
                    Setelah Video selesai Kami akan mengirimkan notifikasi ke
                    nomor What's App Anda
                  </p>
                </div>
                <!-- Bagikan -->
                <div class="bagikan">
                  <span>
                    Bagikan : &nbsp;
                    <a class="bi bi-whatsapp" href="#"></a>
                    <a class="bi bi-telegram" href="#"></a>
                  </span>
                  <h4 class="harga">Harga : <b>Rp199.000</b></h4>
                </div>
                <!-- Daftar Button Preview and Sunting -->
                <div class="daftar-button">
                  <div class="bpas">
                    <button class="btn">
                      Preview
                    </button>
                  </div>
                  <!-- Ulasan and Bayar -->
                  <button class="btn uab">
                    Ulasan
                  </button>
                </div>
              </div>
              <!-- End isi Card -->
            </div>
          </div>
          <!-- End Card Video Wedding Sedang Diproses -->
    `;
  }

  if(videoWedding == "selesai") {
    document.getElementById('videoWedding').innerHTML = `
          <!-- Card Video Wedding Selesai -->
          <div class="card" id="tSelesai">
            <div class="row">
              <!-- Video Wedding -->
              <div class="col-lg-3 video">
                <div class="ratio ratio-16x9">
                  <iframe
                    src="https://www.youtube.com/embed/Vq2uDHYXdN8"
                    title="YouTube video"
                    frameborder="0"
                    allowfullscreen
                  ></iframe>
                </div>
              </div>
              <!-- isi Card -->
              <div class="col-lg-9 isi">
                <!-- Kategori and Selesai -->
                <div class="kas">
                  <span>Kategori : <b>Video Spesial</b></span>
                  <span>Video Selesai</span>
                </div>
                <!-- Nama Pengantin and Keterangan -->
                <div class="npak">
                  <h3 class="mt-4 mb-4">
                    Joko Blackzycowskzy & Putri Rostchild
                  </h3>
                  <button class="btn">
                    Download
                  </button>
                </div>
                <!-- Bagikan -->
                <div class="bagikan">
                  <span>
                    Bagikan : &nbsp;
                    <a class="bi bi-whatsapp" href="#"></a>
                    <a class="bi bi-telegram" href="#"></a>
                  </span>
                  <h4 class="harga">Harga : <b>Rp199.000</b></h4>
                </div>
                <!-- Daftar Button Preview and Sunting -->
                <div class="daftar-button">
                  <div class="bpas">
                    <button class="btn">
                      Preview
                    </button>
                    <button class="btn">
                      Sunting
                    </button>
                  </div>
                  <!-- Ulasan -->
                  <button class="btn uab">
                    Ulasan
                  </button>
                </div>
              </div>
              <!-- End isi Card -->
            </div>
          </div>
          <!-- End Card Video Wedding Selesai -->
    `;
  }

}