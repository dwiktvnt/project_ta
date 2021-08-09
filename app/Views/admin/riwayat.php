<?= $this->extend('admin/template/index') ?>

<?= $this->section('content'); ?>



<div id="main" class='layout-navbar'>

    <?= $this->include('admin/template/header') ?>

    <div id="main-content">
        <div class="page-heading">
            <?= $this->include('admin/template/page-heading') ?>
        </div>


        <div class="card">
            <!-- <div class="card-header">
                <h4 class="card-title">Table with outer spacing</h4>
            </div> -->
            <div class="card-content">
                <div class="card-body">

                    <!-- Table with outer spacing -->
                    <div class="table-responsive">
                        <table class="table table-lg">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Fullname</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Riwayat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $u) : ?>
                                    <tr>
                                        <td>#</td>
                                        <td><img src="<?= base_url('assets/images/faces'); ?>/<?= $u['user_image']; ?>" class="img-thumbnail" style="border-radius: 30px; width:50px;"></td>
                                        <td class="text-bold-500"><?= $u['fullname']; ?></td>
                                        <td><?= $u['username']; ?></td>
                                        <td class="text-bold-500"><?= $u['email']; ?></td>
                                        <td class="text-bold-500"><a href="<?= base_url('admin/detailRiwayat') ?>/<?= $u['email']; ?>" class="btn btn-outline-secondary btn-sm">Detail</a></td>
                                        <!-- <td>
                                            <?php
                                            // if ($data['next'] == 'P11') {
                                            //     echo 'Penyakit Tidak ditemukan';
                                            // } elseif ($data['next'] == 'P01') {
                                            //     echo 'Feline Infectious Peritonitis';
                                            // } elseif ($data['next'] == 'P02') {
                                            //     echo 'Feline Calicivirus';
                                            // } elseif ($data['next'] == 'P03') {
                                            //     echo 'Abses';
                                            // } elseif ($data['next'] == 'P04') {
                                            //     echo 'Ringworm';
                                            // } elseif ($data['next'] == 'P05') {
                                            //     echo 'Toxocara';
                                            // } elseif ($data['next'] == 'P06') {
                                            //     echo 'Feline Panleucopenia';
                                            // } elseif ($data['next'] == 'P07') {
                                            //     echo 'Chlamydia';
                                            // } elseif ($data['next'] == 'P08') {
                                            //     echo 'Feline Rhinotracheitis';
                                            // } elseif ($data['next'] == 'P09') {
                                            //     echo 'Pyometra';
                                            // } elseif ($data['next'] == 'P10') {
                                            //     echo 'Tungau';
                                            // }
                                            ?>
                                        </td> -->
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <?= $this->include('admin/template/footer') ?>
    </div>
</div>
<?= $this->endSection(); ?>