<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-white shadow sticky-top">
        <div class="container">
            <p class="navbar-brand brand py-0 my-0"> <span>Aneka</span><span class="text-hijau poppins">Hijau</span></p>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-lg-0">
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
                    <button onclick="location.href='<?= base_url('auth') ?>'" class="btn btn-outline-success" type="button">Login <i class="fa-solid fa-right-to-bracket"></i></button>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->
    <!-- hero  -->
    <section>
        <div class="mx-auto">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?= base_url('assets/img/hero3.jpg') ?>" class="d-block w-100" alt="hero 1">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url('assets/img/hero3.jpg') ?>" class="d-block w-100" alt="hero 2">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- end hero  -->
    <section>
        <div class="container py-3">
            <h3 class="pt-5 pb-3">Product kami</h3>
            <div class="row row-cols-1 row-cols-md-4">
                <?php foreach ($product as $prod) : ?>
                    <div class="col">
                        <div class="card h-100">
                            <img src="<?= base_url('assets/img/product/') . $prod->image ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $prod->nama ?></h5>
                                <p class="card-text">Rp. <?= $prod->harga ?></p>
                                <a href="#">Detail</a>
                            </div>
                            <div class="card-footer d-grid">
                                <a href="https://wa.me/?6282229337599?text=Saya%20mengunjungi%20halaman%20web%20AnekaHijau.%20Saya%20ingin%20memesan%20tanaman." class="btn btn-success"><i class="fa-brands fa-whatsapp"></i> Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- end hero  -->