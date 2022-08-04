<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Section 1</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Birthstone+Bounce&family=Noto+Serif&display=swap" rel="stylesheet" />
</head>
<style type="text/css">
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    :root {
        --warna1: #dea057;
        --warna2: #fff;
    }

    ul.navbar-bawah {
        list-style: none;
        position: fixed;
        bottom: 20px;
        left: 49.5%;
        width: 90%;
        padding-left: 0;
        z-index: 11;
        background-color: var(--warna1);
        transform: translateX(-50%);
        -webkit-transform: translateX(-50%);
        -moz-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        -o-transform: translateX(-50%);
        border-radius: 20px;
        -webkit-border-radius: 20px;
        -moz-border-radius: 20px;
        -ms-border-radius: 20px;
        -o-border-radius: 20px;
    }

    ul.navbar-bawah li {
        padding: 5px;
        transition: 0.1s;
        -webkit-transition: 0.1s;
        -moz-transition: 0.1s;
        -ms-transition: 0.1s;
        -o-transition: 0.1s;
    }

    ul.navbar-bawah li a {
        color: var(--warna2);
        font-size: 2rem;
    }

    .tombol-musik {
        position: fixed;
        bottom: 100px;
        right: 70px;
        z-index: 11;
        background-color: var(--warna1);
        cursor: pointer;
        padding: 2px 10px;
        border-radius: 999px;
        -webkit-border-radius: 999px;
        -moz-border-radius: 999px;
        -ms-border-radius: 999px;
        -o-border-radius: 999px;
    }

    .tombol-musik i {
        color: var(--warna2);
        font-size: 30px;
    }

    .header {
        height: 100vh;
        position: relative;
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
            url("header.jpg");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
        overflow: hidden;
    }

    .header .kiri {
        background: rgba(222, 160, 87, 0.8);
        height: 100vh;
        border-top-right-radius: 50%;
        border-bottom-right-radius: 50%;
    }

    .header .wi {
        margin: 33vh auto auto 10vw;
        text-align: left;
    }

    .header .wi h4 {
        color: var(--warna2);
        font-family: "Noto Serif", serif;
    }

    .header .wi h1 {
        margin: 3rem auto;
        font-size: 4rem;
        color: var(--warna2);
        font-family: "Birthstone Bounce", cursive;
    }

    @media (min-width: 768px) and (max-width: 991.98px) {
        .tombol-musik {
            right: 45px;
        }

        .header .wi {
            margin-top: 40vh;
        }
    }

    @media (max-width: 575.98px) {
        .tombol-musik {
            bottom: 95px;
            right: 20px;
        }

        .header .kiri {
            width: 80vw;
            border-top-right-radius: 100%;
            border-bottom-right-radius: 100%;
        }

        .header .wi {
            margin-top: 35vh;
        }

        .header .wi h1 {
            margin: 2rem auto;
            font-size: 3rem;
            font-weight: bold;
        }
    }

    .pasangan .bunga-atas,
    .pasangan .bunga-bawah {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }

    .pasangan .bunga-bawah {
        transform: rotateX(180deg);
        -webkit-transform: rotateX(180deg);
        -moz-transform: rotateX(180deg);
        -ms-transform: rotateX(180deg);
        -o-transform: rotateX(180deg);
    }

    .pasangan .bunga-atas img.bunga-kiri,
    .pasangan .bunga-bawah img.bunga-kiri {
        max-width: calc(25% - 1rem);
    }

    .pasangan .bunga-atas img.bunga-kanan,
    .pasangan .bunga-bawah img.bunga-kanan {
        max-width: calc(25% - 1rem);
        transform: rotateY(180deg);
        -webkit-transform: rotateY(180deg);
        -moz-transform: rotateY(180deg);
        -ms-transform: rotateY(180deg);
        -o-transform: rotateY(180deg);
    }

    .pasangan .container {
        margin-top: -10rem;
        margin-bottom: 2rem;
    }

    .pasangan h2 {
        text-align: center;
        font-family: "Birthstone Bounce", cursive;
        position: relative;
        font-size: 50px;
        color: var(--warna1);
    }

    .pasangan hr {
        margin: 1rem auto 5rem auto;
        width: 50%;
        height: 3px;
        background-color: var(--warna1);
    }

    .pasangan .mempelai {
        justify-content: space-evenly;
        align-items: center;
    }

    .pasangan .mempelai .pria {
        margin-right: -5rem;
    }

    .pasangan .mempelai .wanita {
        margin-left: -5rem;
    }

    .pasangan .mempelai .pria .card {
        margin-right: 5rem;
    }

    .pasangan .mempelai .wanita .card {
        margin-left: 5rem;
    }

    .pasangan .mempelai .pria .card,
    .pasangan .mempelai .wanita .card {
        background-color: transparent;
        border: 0;
        margin: auto;
        max-width: 10rem;
        width: 10rem;
        height: 10rem;
        /* overflow: hidden; */
        border-radius: 9999px;
        -webkit-border-radius: 9999px;
        -moz-border-radius: 9999px;
        -ms-border-radius: 9999px;
        -o-border-radius: 9999px;
    }

    .pasangan .mempelai .pria .card .card-body,
    .pasangan .mempelai .wanita .card .card-body {
        padding: 2rem 0;
    }

    .pasangan .mempelai .pria .card img,
    .pasangan .mempelai .wanita .card img {
        max-width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: top;
        border-radius: 9999px;
        -webkit-border-radius: 9999px;
        -moz-border-radius: 9999px;
        -ms-border-radius: 9999px;
        -o-border-radius: 9999px;
    }

    .pasangan .mempelai .card .card-body h3 {
        text-align: center;
        font-family: "Birthstone Bounce", cursive;
        color: var(--warna1);
        font-weight: bold;
    }

    .pasangan .mempelai .card .card-body p {
        text-align: center;
        font-family: "Noto Serif", serif;
        color: var(--warna1);
    }

    @media (max-width: 575.98px) {
        .pasangan {
            height: 100vh;
        }

        .pasangan .bunga-atas img.bunga-kiri,
        .pasangan .bunga-bawah img.bunga-kiri,
        .pasangan .bunga-atas img.bunga-kanan,
        .pasangan .bunga-bawah img.bunga-kanan {
            max-width: calc(35% - 1rem);
        }

        .pasangan {
            height: auto;
        }

        .pasangan h2 {
            font-size: 2rem;
        }

        .pasangan hr {
            margin-bottom: 4rem;
            width: 90%;
        }

        .pasangan .container {
            margin-top: 0rem;
            margin-bottom: 3rem;
        }

        .pasangan .mempelai .pria {
            margin-right: 0rem;
        }

        .pasangan .mempelai .wanita {
            margin-top: 12rem;
            margin-left: 0rem;
        }

        .pasangan .mempelai .pria .card,
        .pasangan .mempelai .wanita .card {
            margin: auto;
        }
    }

    .waktu {
        margin-top: 7rem;
        padding: 5rem 0;
        background: rgba(222, 160, 87, 90%);
        color: var(--warna2);
    }

    .waktu p {
        text-shadow: 0 0 5px var(--warna2);
        font-size: 46px;
        font-family: "Birthstone Bounce", cursive;
        display: block;
        -webkit-margin-before: 1em;
        margin-block-start: 1em;
        -webkit-margin-after: 1em;
        margin-block-end: 1em;
        -webkit-margin-start: 0px;
        margin-inline-start: 0px;
        -webkit-margin-end: 0px;
        margin-inline-end: 0px;
    }

    .waktu p #hari,
    .waktu p #jam,
    .waktu p #menit,
    .waktu p #detik {
        display: inline-block;
        margin: 0 25px;
    }

    @media (min-width: 768px) and (max-width: 991.98px) {
        .waktu p {
            font-size: 30px;
        }
    }

    @media (max-width: 575.98px) {
        .waktu {
            margin-top: 0;
        }
    }

    .lokasi h2.tl {
        margin-top: 5rem;
        color: var(--warna1);
        text-align: center;
        font-family: "Birthstone Bounce", cursive;
        font-weight: bold;
    }

    .lokasi hr {
        margin: 1rem auto 2rem auto;
        width: 50%;
        height: 3px;
        background-color: var(--warna1);
    }

    .lokasi h3 {
        color: var(--warna1);
        font-family: "Birthstone Bounce", cursive;
        text-align: center;
        font-weight: bold;
    }

    .lokasi .jdt {
        font-family: "Noto Serif", serif;
    }

    .lokasi .google-map {
        margin: 0.5rem auto;
        height: 400px;
        width: 100%;
        border-radius: var(--lengkung);
        -webkit-border-radius: var(--lengkung);
        -moz-border-radius: var(--lengkung);
        -ms-border-radius: var(--lengkung);
        -o-border-radius: var(--lengkung);
    }

    .lokasi .akad-nikah,
    .lokasi .resepsi1,
    .lokasi .resepsi2 {
        text-align: center;
    }

    .lokasi .resepsi1 {
        margin: 3rem auto;
    }

    .lokasi .akad-nikah .jdt,
    .lokasi .resepsi1 .jdt,
    .lokasi .resepsi2 .jdt {
        margin: 1rem auto 2rem auto;
        font-weight: bold;
        color: var(--warna1);
    }

    .lokasi h2.tl {
        margin-top: 5rem;
        color: var(--warna1);
        text-align: center;
        font-family: "Birthstone Bounce", cursive;
        font-weight: bold;
    }

    .lokasi hr {
        margin: 1rem auto 2rem auto;
        width: 50%;
        height: 3px;
        background-color: var(--warna1);
    }

    .lokasi h3 {
        color: var(--warna1);
        font-family: "Birthstone Bounce", cursive;
        text-align: center;
        font-weight: bold;
    }

    .lokasi .jdt {
        font-family: "Noto Serif", serif;
    }

    .lokasi .google-map {
        margin: 0.5rem auto;
        height: 400px;
        width: 100%;
        border-radius: var(--lengkung);
        -webkit-border-radius: var(--lengkung);
        -moz-border-radius: var(--lengkung);
        -ms-border-radius: var(--lengkung);
        -o-border-radius: var(--lengkung);
    }

    .lokasi .akad-nikah,
    .lokasi .resepsi1,
    .lokasi .resepsi2 {
        text-align: center;
    }

    .lokasi .resepsi1 {
        margin: 3rem auto;
    }

    .lokasi .akad-nikah .jdt,
    .lokasi .resepsi1 .jdt,
    .lokasi .resepsi2 .jdt {
        margin: 1rem auto 2rem auto;
        font-weight: bold;
        color: var(--warna1);
    }

    .lokasi h2.tl {
        margin-top: 5rem;
        color: var(--warna1);
        text-align: center;
        font-family: "Birthstone Bounce", cursive;
        font-weight: bold;
    }

    .lokasi hr {
        margin: 1rem auto 2rem auto;
        width: 50%;
        height: 3px;
        background-color: var(--warna1);
    }

    .lokasi h3 {
        color: var(--warna1);
        font-family: "Birthstone Bounce", cursive;
        text-align: center;
        font-weight: bold;
    }

    .lokasi .jdt {
        font-family: "Noto Serif", serif;
    }

    .lokasi .google-map {
        margin: 0.5rem auto;
        height: 400px;
        width: 100%;
        border-radius: var(--lengkung);
        -webkit-border-radius: var(--lengkung);
        -moz-border-radius: var(--lengkung);
        -ms-border-radius: var(--lengkung);
        -o-border-radius: var(--lengkung);
    }

    .lokasi .akad-nikah,
    .lokasi .resepsi1,
    .lokasi .resepsi2 {
        text-align: center;
    }

    .lokasi .resepsi1 {
        margin: 3rem auto;
    }

    .lokasi .akad-nikah .jdt,
    .lokasi .resepsi1 .jdt,
    .lokasi .resepsi2 .jdt {
        margin: 1rem auto 2rem auto;
        font-weight: bold;
        color: var(--warna1);
    }

    .gallery .bunga-atas {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }

    .gallery .bunga-atas img.bunga-kiri {
        max-width: calc(25% - 1rem);
    }

    .gallery .bunga-atas img.bunga-kanan {
        max-width: calc(25% - 1rem);
        transform: rotateY(180deg);
        -webkit-transform: rotateY(180deg);
        -moz-transform: rotateY(180deg);
        -ms-transform: rotateY(180deg);
        -o-transform: rotateY(180deg);
    }

    .gallery h2.tl {
        margin-top: -9rem;
        color: var(--warna1);
        text-align: center;
        font-family: "Birthstone Bounce", cursive;
        font-weight: bold;
    }

    .gallery hr {
        margin: 1rem auto 2rem auto;
        width: 50%;
        height: 3px;
        background-color: var(--warna1);
    }

    .gallery .card {
        margin: 0.5rem;
        z-index: 2;
        background-color: transparent;
        border: 0;
    }

    .gallery .card img {
        max-width: 100%;
        height: 100%;
        overflow: hidden;
        object-fit: cover;
        -o-object-fit: cover;
        object-position: center;
        -o-object-position: center;
    }

    .gallery .isi-gallery {
        margin-bottom: 5rem;
        padding: 1rem;
        display: grid;
        grid-template-areas:
            "g1 g2 g3"
            "g1 g4 g5";
    }

    .gallery .isi-gallery .gallery1 {
        grid-area: g1;
    }

    .gallery .isi-gallery .gallery2 {
        grid-area: g2;
    }

    .gallery .isi-gallery .gallery3 {
        grid-area: g3;
    }

    .gallery .isi-gallery .gallery4 {
        grid-area: g4;
    }

    .gallery .isi-gallery .gallery5 {
        grid-area: g5;
    }

    @media (min-width: 768px) and (max-width: 991.98px) {
        .gallery h2.tl {
            margin-top: -7rem;
        }
    }

    @media (max-width: 575.98px) {
        .gallery .isi-gallery {
            grid-template-areas:
                "g1 g2"
                "g1 g3"
                "g4 g4"
                "g5 g5";
        }

        .gallery .bunga-atas img.bunga-kiri,
        .gallery .bunga-atas img.bunga-kanan {
            max-width: calc(35% - 1rem);
        }

        .gallery h2.tl {
            margin-top: -3rem;
        }

        .gallery hr {
            margin: 1rem auto;
            width: 80%;
        }
    }

    .ayat {
        margin-top: 7rem;
        padding: 6rem 0;
        background-image: url("../images/wi2.jpg");
        background-size: cover;
        background-position: 0 -1em;
        background-attachment: fixed;
        position: relative;
    }

    .ayat .bg {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: #000;
        opacity: 30%;
    }

    .ayat .arab {
        position: relative;
        font-size: 36px;
        font-weight: bold;
        text-align: center;
        color: var(--warna2);
    }

    .ayat .arti,
    .ayat p {
        position: relative;
        font-family: "Noto Serif", serif;
        font-size: 18px;
        text-align: center;
        color: var(--warna2);
        margin-top: 2em;
    }

    .ayat p {
        font-weight: bold;
    }

    @media (min-width: 768px) and (max-width: 991.98px) {
        .ayat .arab {
            font-size: 20px;
        }

        .ayat .arti,
        .ayat p {
            font-size: 12px;
        }
    }

    @media (max-width: 575.98px) {
        .ayat {
            margin-top: 3rem;
        }

        .ayat .arab {
            font-size: 15px;
        }

        .ayat .arti,
        .ayat p {
            font-size: 10px;
        }
    }
</style>

<body>

    <?php
    setlocale(LC_ALL, 'id_ID.UTF8', 'id_ID.UTF-8', 'id_ID.8859-1', 'id_ID', 'IND.UTF8', 'IND.UTF-8', 'IND.8859-1', 'IND', 'Indonesian.UTF8', 'Indonesian.UTF-8', 'Indonesian.8859-1', 'Indonesian', 'Indonesia', 'id', 'ID', 'en_US.UTF8', 'en_US.UTF-8', 'en_US.8859-1', 'en_US', 'American', 'ENG', 'English');
    date_default_timezone_set('Asia/Jakarta');

    $server = "localhost"; //nama host
    $user = "root"; //nama user
    $password = ""; //password
    $database = "db_wedding_skripsi"; //nama database

    $koneksi = mysqli_connect($server, $user, $password, $database);

    // Koneksi gagal
    if (!$koneksi) {
        die("Gagal terhubung dengan database: " . mysqli_connect_error());
    }
    $sql = mysqli_query($koneksi, "SELECT * FROM  biodata_pelanggan master LEFT JOIN biodata_home_page homeP ON master.id_biodata_home_page = homeP.id_biodata_home_page LEFT JOIN biodata_kutipan_ayat ayat ON master.id_kutipan_ayat = ayat.id_kutipan_ayat LEFT JOIN biodata_pasangan_pria pria ON master.id_pasangan_pria = pria.id_pasangan_pria LEFT JOIN biodata_pasangan_wanita wanita ON master.id_pasangan_wanita = wanita.id_pasangan_wanita LEFT JOIN biodata_galeri_foto galeri ON master.id_galeri_foto = galeri.id_galeri_foto LEFT JOIN biodata_jadwal_akad akad ON master.id_jadwal_akad = akad.id_jadwal_akad LEFT JOIN biodata_jadwal_resepsi resepsi ON master.id_jadwal_resepsi = resepsi.id_jadwal_resepsi LEFT JOIN biodata_jadwal_resepsi_2 resepsi2 ON master.id_jadwal_resepsi_2 = resepsi2.id_jadwal_resepsi_2 LEFT JOIN biodata_musik musik ON master.id_musik = musik.id_musik ORDER BY master.id_biodata_pelanggan");
    $data = mysqli_fetch_assoc($sql);

    $akad = $data['tanggal_akad'] . " " . $data['jam_mulai_akad'];
    $tgl = strtotime($data['tanggal_akad']);

    $id_biodata_pelanggan = $data['id_biodata_pelanggan'];
    $pemesanan_invitation = mysqli_query($koneksi, "SELECT * FROM  pemesanan_invitation LEFT JOIN detail_pemesanan_invitation ON pemesanan_invitation.id_pemesanan = detail_pemesanan_invitation.id_pemesanan WHERE pemesanan_invitation.id_biodata_pelanggan = $id_biodata_pelanggan ");
    ?>

    <!-- untuk menampilkan session pada template invitation -->
    <?php
    error_reporting(0);
    while ($pemesanan = mysqli_fetch_array($pemesanan_invitation)) {

        include '../file_template/' . $pemesanan['file_template'];
    }
    ?>

    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script type="text/javascript">
        // Gallery glightbox
        const lightbox = GLightbox({
            closeOnOutsideClick: false,
            loop: true,
        });

        // Musik
        const track = document.getElementById("track");
        const button = document.getElementById("play-pause");

        function playPause() {
            if (track.paused) {
                track.play();
                button.className = "bi-pause-fill";
            } else {
                track.pause();
                button.className = "bi-play-fill";
            }
        }
        // Button Music
        button.addEventListener("click", playPause);
        track.addEventListener("ended", function() {
            button.className = "bi-play-fill";
        });

        // Countdown
        // Atur waktu akhir
        let countDownDate = new Date("<?php echo $akad ?>").getTime();

        // Update waktu setiap 1 detik
        let x = setInterval(function() {
            // dapatkan tanggal dan waktu sekarang
            let now = new Date().getTime();

            // Cari jarak waktu sekarang dengan waktu akhir
            let distance = countDownDate - now;

            // Kalkukalasikan waktu
            let days = Math.floor(distance / (1000 * 60 * 60 * 24));
            let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            let seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("hari").innerHTML = days + " Hari";
            document.getElementById("jam").innerHTML = hours + " Jam";
            document.getElementById("menit").innerHTML = minutes + " Menit";
            document.getElementById("detik").innerHTML = seconds + " Detik";
        }, 1000);
    </script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>