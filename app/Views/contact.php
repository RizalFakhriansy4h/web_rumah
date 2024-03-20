<?= $this->extend('layout/template'); ?>      

<?= $this->section('content'); ?>

    <div class="container py-5">
        <h1 class="mb-5">Contact Us</h1>
        <?= session()->getFlashdata('alert') ?>
        <div class="row">
        <div class="col-md-5">
            <form method="post" autocomplete="off" action="/kirimEmail">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name" value="<?= (session()->has('logged')) ? $nama : '' ?>" name="nama">
                </div>
                
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="name@example.com" value="<?= (session()->has('logged')) ? $email : '' ?>" name="email">
                </div>

                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subject" placeholder="Enter subject" name="subject">
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="5" placeholder="Type your message here..." name="message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-5">
            <h3>Contact Information</h3>
            <p>If you have any questions, feel free to contact us.</p>
            <ul class="list-unstyled">
            <li><strong>Address:</strong> PT Beringin Inti Teknologi (BIT) Intiland Tower Lt 12A Jalan Jendral Sudirman No. 32 Jakarta Pusat 10220 Indonesia.</li>
            <li><strong>Phone:</strong> +62 813-8900-1162</li>
            <li><strong>Email:</strong> support@homespot.id</li>
            </ul>
        </div>
        </div>
    </div>

    <br><br>

<?= $this->endSection(); ?>