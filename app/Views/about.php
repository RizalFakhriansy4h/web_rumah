<?= $this->extend('layout/template'); ?>      

<?= $this->section('content'); ?>

    <div class="container text-center">
        <h4 class="mt-5">About Us</h4>
        

        <div class="row mt-5">
            <div class="jumbotron jumbotron-fluid">
                <h1 class="display-4">Hackton Tim 10</h1>
                <p class="lead text-dark">Kami adalah tim yang penuh semangat dalam mengejar inovasi dan solusi untuk memecahkan tantangan terkini. Dengan komitmen yang kuat, kami bertekad untuk menciptakan perubahan positif dalam industri kami. Kami percaya bahwa kolaborasi, kreativitas, dan dedikasi adalah kunci kesuksesan. Dengan fokus pada integritas dan kualitas, kami berusaha untuk memberikan yang terbaik kepada pelanggan kami. Bergabunglah dengan kami dalam perjalanan kami untuk mencapai prestasi yang luar biasa.</p>
            </div>
        </div>

    
        <h4 class="mt-5">Our Team</h4>
        <h4 class="mt-5">Marketing</h4>
        <div class="menu-container">
            <?php foreach($marketing as $mark): ?>
                <div class="card team-card">
                    <img src="/assets/img/ourteam/<?= $mark["gambar"] ?>" class="card-img-top" alt="Team Member 6">
                    <div class="card-body">
                    <h5 class="card-text"><?= $mark["nama"] ?></h5>
                    <p class="card-text"><?= $mark["jobdesk"] ?></p>
                    <a href="<?= $mark["link"] ?>" class="btn btn-primary"><i class="fab fa-instagram"></i> Instagram</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <br><br>
        <h4 class="mt-5">Web Development Team</h4>
        <div class="menu-container">
            <?php foreach($webdev as $wd): ?>
                <div class="card team-card">
                    <img src="/assets/img/ourteam/<?= $wd["gambar"] ?>" class="card-img-top" alt="Team Member 6">
                    <div class="card-body">
                    <h5 class="card-text"><?= $wd["nama"] ?></h5>
                    <p class="card-text"><?= $wd["jobdesk"] ?></p>
                    <a href="<?= $wd["link"] ?>" class="btn btn-primary"><i class="fab fa-instagram"></i> Instagram</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div> 
    </div>
<?= $this->endSection(); ?>