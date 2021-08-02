<?= $this->extend('admin/template/index') ?>

<?= $this->section('content'); ?>
<div id="main" class='layout-navbar'>

    <?= $this->include('admin/template/header') ?>

    <div id="main-content">
        <div class="page-heading">
            <?= $this->include('admin/template/page-heading') ?>

            <!-- <section class="section">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Example Content</h4>
                    </div>
                    <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quas omnis laudantium tempore
                        exercitationem, expedita aspernatur sed officia asperiores unde tempora maxime odio reprehenderit
                        distinctio incidunt! Vel aspernatur dicta consequatur!
                    </div>
                </div>
            </section> -->
        </div>

        <?= $this->include('admin/template/footer') ?>

    </div>
</div>
<?= $this->endSection(); ?>