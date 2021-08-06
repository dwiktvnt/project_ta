<?= $this->extend('admin/template/index') ?>

<?= $this->section('content'); ?>

<div id="main" class='layout-navbar'>

    <?= $this->include('admin/template/header') ?>

    <div id="main-content">
        <div class="page-heading">
            <?= $this->include('admin/template/page-heading') ?>
        </div>

        <?php if (!user()->fullname) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Perhatian!</strong> sebelum melakukan diagnosa, dianjurkan untuk mengisi data diri secara lengkap di menu profile.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>


        <div class="row">
            <div class="col">
                <div class="card">

                </div>
            </div>
        </div>

        <!-- <div class="row" id="diagnosa">
            <div class="col">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <h2 class="text-center">Apakah kucing anda mengalami <?= $data['namaGejala']; ?> </h2>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <span>Pilih jawaban anda</span>
                        <div class="jwb">
                            <form action="<?= base_url('admin/savejwb'); ?>" method="post">
                                <input type="hidden" name="email" value="<?= user()->email; ?>">
                                <input type="hidden" name="pertanyaan" value="<?= $data['kodeGejala']; ?>">
                                <button type="submit" class="btn btn-light-primary" name="jawaban" value="Ya|<?= $data['ifyes']; ?>">Ya</button>
                                <button type="submit" class="btn btn-light-primary" name="jawaban" value="Tidak|<?= $data['ifno']; ?>">Tidak</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <?= $this->include('admin/template/footer') ?>
    </div>
</div>
<?= $this->endSection(); ?>