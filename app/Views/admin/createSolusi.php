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
                        <!-- <h4 class="card-title">Example Content</h4> -->
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('admin/saveSolusi'); ?>" method="post">
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="kodeSolusi" class="form-control" placeholder="Kode Solusi">
                                </div>
                                <div class="col">
                                    <input type="text" name="namaSolusi" class="form-control" placeholder="Nama Solusi">
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Input</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>

        <?= $this->include('admin/template/footer') ?>

    </div>
</div>
<?= $this->endSection(); ?>