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
                        <!-- <h4 class="card-title">Example Content</h4> -->
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('pesan'); ?>
                            </div>
                        <?php endif; ?>
                        <a href="<?= base_url('admin/createSolusi'); ?>" class="btn btn-outline-secondary btn-sm">Tambah data</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Kode Solusi</th>
                                    <th scope="col">Nama Solusi</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                ?>
                                <?php
                                foreach ($data as $d) :
                                ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?> </th>
                                        <td><?= $d['kodeSolusi']; ?></td>
                                        <td><?= $d['namaSolusi']; ?></td>
                                        <td><a href="<?= base_url('admin/editSolusi'); ?>/<?= $d['idsolusi']; ?>" class="btn btn-outline-warning btn-sm">Edit</a>
                                            <a href="<?= base_url('admin/deleteSolusi'); ?>/<?= $d['idsolusi']; ?>" class="btn btn-outline-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>
                                <?php
                                endforeach;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>

        <?= $this->include('admin/template/footer') ?>

    </div>
</div>
<?= $this->endSection(); ?>