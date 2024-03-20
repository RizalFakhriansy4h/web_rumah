<?= $this->extend('layout/template'); ?>      
      
      
<?= $this->section('content'); ?>
    <main>
    <div class="bg-img-container">
        <div class="overlay"></div>
        <!-- teks -->
        <div class="text-container">
            <h1 class="display-4">Perlindungan untuk<span class="text-primary"> Semua</span> Aspek Kehidupan Anda</h1>
            <h1 class="display-4">Hanya di <span class="text-primary">HOME</span><span class="text-warning">SPOT</span></h1>
            <p class="lead">Temukan beragam opsi asuransi yang mencakup jiwa, kecelakaan, rumah, dan kendaraan anda untuk menjaga masa depan anda tetap aman</p>
        </div>
    </div>
    <!-- header 1 -->
    <header class="p-3 bg-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="#" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                <span class="fs-4 fw-bold">
                    <h3>Jelajahi Ragam Perlindungan dan Pilih Sesuai Kebutuhan</h3>
                </span>
                </a>
            </div>
        </div>
        </div>
    </header>
    <!--card-->
    <div class="container">
        <div class="row row-cols-1 row-cols-md-5 g-4">
            <div class="col">
                <div class="card" style="width: 12rem;">
                <img src="https://i.pinimg.com/474x/db/c0/e4/dbc0e43ed9d03ba2aa79c5caeda5ff14.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Investment</h5>
                </div>
                </div>
            </div>
            <!-- card 2 -->
            <div class="col">
                <div class="card" style="width: 12rem;">
                <img src="https://i.pinimg.com/474x/09/54/98/0954986a7362b79d76058829e9860eeb.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Life Care</h5>
                </div>
                </div>
            </div>
            <!-- card 3-->
            <div class="col">
                <div class="card" style="width: 12rem;">
                <img src="https://i.pinimg.com/474x/4f/d0/32/4fd0322a5346f8b37b9be0d8dad4061e.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Transportation</h5>
                </div>
                </div>
            </div>
            <!--card 4-->
            <div class="col">
                <div class="card" style="width: 12rem;">
                <img src="https://i.pinimg.com/474x/32/63/ca/3263ca24e9c1b183a713d1112b29bbfa.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Accident</h5>
                </div>
                </div>
            </div>
            <!--card  5-->
            <div class="col">
                <div class="card" style="width: 12rem;">
                <img src="https://i.pinimg.com/474x/ab/0c/48/ab0c487432cb85f1ce7dbadade6e1ca0.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Education</h5>
                </div>
                </div>
            </div>
        </div>
    </div>
    </main>
    <br><br><br><br><br><br>
<?= $this->endSection(); ?>