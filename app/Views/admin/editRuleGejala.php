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
                        <form action="<?= base_url('admin/updateRuleGejala') ?>/<?= $data['idgejala']; ?>" method="post">
                            <div class="row">
                                <input type="hidden" name="namaGejala" class="form-control" placeholder="Kode Gejala" value="<?= $data['namaGejala']; ?>">
                                <input type="hidden" name="kodeGejala" class="form-control" placeholder="Kode Gejala" value="<?= $data['kodeGejala']; ?>">
                                <div class="col">
                                    <input type="text" name="" class="form-control" placeholder="Kode Gejala" value="<?= $data['kodeGejala']; ?>" disabled>
                                </div>
                                <div class="col">
                                    <input type="text" name="kodeYes" class="form-control" placeholder="Jika Ya" value="<?= $data['ifyes']; ?>">
                                </div>
                                <div class="col">
                                    <input type="text" name="kodeNo" class="form-control" placeholder="Jika Tidak" value="<?= $data['ifno']; ?>">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Input</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>

        <?= $this->include('admin/template/footer') ?>

    </div>
</div>
<?= $this->endSection(); ?>