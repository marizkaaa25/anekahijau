<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Nunito&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-grid.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <title>AnekaHijau</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-white shadow sticky-top">
        <div class="container">
            <p class="navbar-brand brand text-bold py-0 my-0 logo-brand" href="#">Aneka<span class="text-success">Hijau</span></p>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 poppins">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#catalog">Katalog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About US</a>
                    </li>
                </ul>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button onclick="location.href='<?= base_url('auth/regist') ?>'" class="btn btn-daftar poppins me-md-2" type="button">Daftar</button>
                    <button onclick="location.href='<?= base_url('auth') ?>'" class="btn btn-login poppins bg-hijau" type="button">Login</button>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->
    <section>
        <div class="container mx-auto py-5">
            <h1>Hero, Konten Menyusul...</h1>
        </div>
    </section>

    <!-- footer -->
    <footer class="bg-dark bg-opacity-75 text-white pt-5 pb-2" id="about">
        <div class="container">
            <h2 class="logo-brand">AnekaHijau</h2>
            <h5>AnekaHijau merupakan toko yang menjual beraneka ragam tanaman, mulai dari tanaman hias hingga tanaman obat keluarga. Tanaman hias yang dijual beberapa diantaranya yaitu tanaman hias gantung (bunga menanti kasih, sirih marble, dsb.), tanaman hias indoor (peace lily, lidah mertua, dsb.) dan tanaman hias outdoor (aglaonema, kamboja, dsb.). </h5>
            <h3 class="poppins">Contact US</h3>
            <div class="row row-cols-3">
                <div class="col-3 align-items-center">
                    <div class="row row-cols-2">
                        <div class="col-3 m-auto icon-contact py-2"><img src="<?php echo base_url(); ?>assets/icons/fb.svg" alt=""></div>
                        <div class="col-9 m-auto contact">Marizka Maulidina</div>
                        <div class="col-3 m-auto icon-contact py-2"><img src="<?php echo base_url(); ?>assets/icons/ig.svg" alt=""></div>
                        <div class="col-9 m-auto contact">@marizkaaa25</div>
                    </div>
                </div>
                <div class="col-3 align-items-center">
                    <div class="row row-cols-2">
                        <div class="col-3 m-auto icon-contact py-2"><img src="<?php echo base_url(); ?>assets/icons/wa.svg" alt=""></div>
                        <div class="col-9 m-auto contact">+62822 2933 7599</div>
                        <div class="col-3 m-auto icon-contact py-2"><img src="<?php echo base_url(); ?>assets/icons/tw.svg" alt=""></div>
                        <div class="col-9 m-auto contact">@marizkaaa25</div>
                    </div>
                </div>
                <div class="col-6 align-items-center">
                    <div class="row row-cols-2">
                        <div class="col-2 m-auto icon-contact py-2"><img src="<?php echo base_url(); ?>assets/icons/mail.svg" alt=""></div>
                        <div class="col-10 m-auto contact">202410103009@mail.unej.ac.id</div>
                        <div class="col-2 m-auto icon-contact py-2"><img src="<?php echo base_url(); ?>assets/icons/home.svg" alt=""></div>
                        <div class="col-10 m-auto contact">Desa Balung, Kec. Kendit, Kab. Situbondo, Jawa Timur</div>
                    </div>
                </div>
            </div>
            <hr>
            <p class="poppins text-center"> &copy 2022 Marizka Maulidina | FWD 1</p>
        </div>
    </footer>
    <!-- end footer -->

    <!-- script -->
    <script src="<?= base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.js"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.bundle.js"></script>
</body>

</html>