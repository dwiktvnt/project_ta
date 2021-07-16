<?= $this->extend('layout/index'); ?>
<?= $this->section('content'); ?>

<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand ms-auto" href="#">
            <i data-feather="help-circle"></i>
        </a>
    </div>
</nav>

<section id="homepage">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Sistem Pakar Mendiagnosa <br> Penyakit Pada Kucing</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="<?= base_url('page/datadiri'); ?>" method="POST">
                    <button class="btn btn-outline-warning btn-lg mt-4" type="submit">Mulai Diagnosa</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>