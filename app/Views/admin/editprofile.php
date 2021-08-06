<?= $this->extend('admin/template/index') ?>

<?= $this->section('content'); ?>
<div id="main" class='layout-navbar'>

    <?= $this->include('admin/template/header') ?>

    <div id="main-content">
        <div class="page-heading">
            <?= $this->include('admin/template/page-heading') ?>
        </div>


        <!-- // Basic multiple Column Form section start -->
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Multiple Column</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" action="<?= base_url('admin/updateProfile') ?>/<?= $data['id']; ?>">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Fullname</label>
                                                <input type="text" id="first-name-column" class="form-control" placeholder="Fullname" name="fullname" value="<?= $data['fullname']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">Username</label>
                                                <input type="text" id="last-name-column" class="form-control" placeholder="Username" name="username" value="<?= $data['username']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="city-column">Email</label>
                                                <input type="text" id="city-column" class="form-control" placeholder="Email" name="email" value="<?= $data['email']; ?>">
                                            </div>
                                        </div>


                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Edit</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // Basic multiple Column Form section end -->


        <?= $this->include('admin/template/footer') ?>
    </div>
</div>
<?= $this->endSection(); ?>