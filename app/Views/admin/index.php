<?= $this->extend('admin/template/index') ?>

<?= $this->section('content'); ?>

<div id="main" class='layout-navbar'>

    <?= $this->include('admin/template/header') ?>

    <div id="main-content">
        <div class="page-heading">
            <?= $this->include('admin/template/page-heading') ?>
        </div>

        <?php if (in_groups('user')) : ?>
            <?php if (!user()->fullname) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Perhatian!</strong> sebelum melakukan diagnosa, dianjurkan untuk mengisi data diri secara lengkap di menu profile.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <section>
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 class="card-title">Selamat datang <?= user()->username; ?>!</h4>
                                    <p class="card-text">
                                        Sistem Pendiagnosa Penyakit Kucing atau SPPK adalah project skripsi dari Dwi Oktavianto.
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <span>Klik "Mulai diagnosa" untuk memulai proses diagnosa</span>
                                <a href="<?= base_url('admin/mulaiDiagnosa'); ?>/G01" class="btn btn-light-primary">Mulai Diagnosa</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?= $this->include('admin/template/footer') ?>
    </div>
</div>
<?= $this->endSection(); ?>