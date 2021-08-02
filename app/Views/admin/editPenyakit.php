<?= $this->extend('admin/template/index') ?>

<?= $this->section('content'); ?>
<div id="main" class='layout-navbar'>

    <?= $this->include('admin/template/header') ?>

    <div id="main-content">
        <div class="page-heading">
            <?= $this->include('admin/template/page-heading') ?>


            <section class="section">
                <div class="card">
                    <div class="card-header">


                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('admin/updatePenyakit'); ?>/<?= $data['idpenyakit']; ?>" method="post">
                            <div class="row">
                                <input type="hidden" name="kodeYes" class="form-control" placeholder="Jika Ya" value="<?= $data['ifyes']; ?>">
                                <input type="hidden" name="kodeNo" class="form-control" placeholder="Jika Tidak" value="<?= $data['ifno']; ?>">
                                <div class="col">
                                    <input type="text" name="kodePenyakit" class="form-control" placeholder="Kode Penyakit" value="<?= $data['kodePenyakit']; ?>">
                                </div>
                                <div class="col">
                                    <input type="text" name="namaPenyakit" class="form-control" placeholder="Nama Penyakit" value="<?= $data['namaPenyakit']; ?>">
                                </div>
                                <button type="submit" class="btn btn-primary">Input</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>

        <?= $this->include('admin/template/footer') ?>

    </div>
</div>
<?= $this->endSection(); ?>