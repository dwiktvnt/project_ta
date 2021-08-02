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
                        <form action="<?= base_url('admin/updateSolusi'); ?>/<?= $data['idsolusi']; ?>" method="post">
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="kodeSolusi" class="form-control" placeholder="Kode Solusi" value="<?= $data['kodeSolusi']; ?>">
                                </div>
                                <div class="col">
                                    <input type="text" name="namaSolusi" class="form-control" placeholder="Nama Solusi" value="<?= $data['namaSolusi']; ?>">
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