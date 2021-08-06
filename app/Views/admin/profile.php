<?= $this->extend('admin/template/index') ?>

<?= $this->section('content'); ?>
<div id="main" class='layout-navbar'>

    <?= $this->include('admin/template/header') ?>

    <div id="main-content">
        <div class="page-heading">
            <?= $this->include('admin/template/page-heading') ?>
        </div>

        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?= base_url(); ?>/assets/images/faces/<?= user()->user_image; ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= user()->fullname; ?></h5>
                        <h6><?= user()->username; ?></h6>
                        <p class="card-text"><?= user()->email; ?></p>
                        <p class="card-text"><small class="text-muted"> Daftar pada <?= date("d F Y", strtotime(user()->created_at)); ?></p>
                        <a href="<?= base_url('admin/editProfile') ?>/<?= user()->id; ?>" class="btn btn-light-primary btn-sm">Edit</a>
                    </div>
                </div>
            </div>
        </div>

        <?= $this->include('admin/template/footer') ?>
    </div>
</div>
<?= $this->endSection(); ?>