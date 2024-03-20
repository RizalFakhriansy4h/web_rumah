<?= $this->extend('layout/template'); ?>      
      
      
<?= $this->section('content'); ?>
    <main>
        <section class="slider-area ">
        <div class="slider-active">
            <div class="single-slider slider-bg1 hero-overly slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                    <div class="offset-xl-1 col-xxl-5 col-xl-6 col-lg-6 col-md-8">
                        <div class="hero-caption">
                            <h1 style="font-size: 2.5rem;">Beli Rumah <span style="color: rgb(3, 171, 255);">Impianmu</span></h1>
                            <h1 style="font-size: 2.5rem;">Hanya di <span style="color: rgb(51, 39, 128);">HOME</span><span style="color: rgb(255, 91, 3);">SPOT</span></h1>
                            <p style="font-size: 1.25rem;">Dari rumah minimalis, ruko strategis, sampai</p>
                            <p style="font-size: 1.25rem;">apartemen modern, semua tersedia</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- pilihan menu-->
        <section class="latest-items section-padding mt-3">
        <div class="container">
            <?php if (session()->has('logged')) : ?>
                <h5>Hi <?= $nama; ?> Welcome Back !!</h5> 
            <?php else :?>
                <h5>You're Logout</h5>
            <?php endif; ?>
            <div class="row">
                <div class="col-xxl-6 col-xl-7">
                
                <div class="section-tittle mb-50 text-start">
                    <h2>Fitur Rumah</h2>

                    <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Baru
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Best Seller</a></li>
                        <li><a class="dropdown-item" href="#">Promo</a></li>
                    </ul>
                    </div>
                    
                    <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Over Kredit
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                    </ul>
                    </div>

                </div>
                </div>
            </div>

            <div class="menu-container mt-3">
            <?php foreach($home_card as $hc): ?>
                <div class="card">
                    <img src="/assets/img/gallery/<?= $hc["gambar"] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $hc["title"] ?></h5>
                        <p class="card-text"><?= $hc["daerah"] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </section>
    </main>
    <!--header-->
    <header class="p-3 bg-white mt-3">
        <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="#" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
            <span class="fs-4 fw-bold">Jelajahi Properti dengan Virtual 360</span>
            </a>
            <div class="ms-auto">
                <button type="button" class="btn btn-sm btn-outline-dark">Lihat Semua</button>
            </div>
        </div>
        </div>
    </header>
    <!--menu:)-->
    <div id="carouselExampleDark" class="carousel carousel-dark slide w-75 mx-auto" data-bs-ride="carousel">
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="/assets/img/hero/h1_hero1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="fw-bold text-white">Permata Hijau Mansion</h5>
                    <p class="text-white">Daerah Khusus Ibukota Jakarta4 KT • 4+ KM • LB 50m2 • LT 135m2 • SHGB</p>
                </div>
            </div>

            <?php foreach($data_carrousel as $dc): ?>
                <div class="carousel-item">
                    <img src="/assets/img/hero/<?= $dc['gambar']; ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="fw-bold text-white"><?= $dc['title']; ?></h5>
                        <p class="text-white"><?= $dc['deskripsi']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br>
    <br>
    <br>
    <!--gambar-->
    <div class="container mb-4">
        <div class="row">
        <div class="col">
            <img src="/assets/img/carousel_2.jpg" alt="Deskripsi Gambar" class="img-fluid">
        </div>
        </div>
    </div>
    <!-- testimoni-->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
                <div class="row">
                    
                    <?php foreach($testi as $test): ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="/assets/img/gallery/<?= $test["gambar"]; ?>" class="card-img-top" alt="Gambar">
                            <div class="card-body">
                                <h5 class="card-title"><?= $test["nama"]; ?></h5>
                                <p class="card-text"><?= $test["komentar"]; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        </div>
    </div>
<?= $this->endSection(); ?>