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
                                    <th>Fullname</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Tanggal Diagnosa</th>
                                    <th>Hasil Diagnosa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $d) : ?>
                                    <tr>
                                        <td>#</td>
                                        <td class="text-bold-500"><?= $d['fullname']; ?></td>
                                        <td><?= $d['username']; ?></td>
                                        <td class="text-bold-500"><?= $d['email']; ?></td>
                                        <td class="text-bold-500"><?= $d['tglDiagnosa']; ?></td>
                                        <td>
                                            <?php
                                            if ($d['next'] == 'P11') {
                                                echo 'Penyakit Tidak ditemukan';
                                            } elseif ($d['next'] == 'P01') {
                                                echo 'Feline Infectious Peritonitis';
                                            } elseif ($d['next'] == 'P02') {
                                                echo 'Feline Calicivirus';
                                            } elseif ($d['next'] == 'P03') {
                                                echo 'Abses';
                                            } elseif ($d['next'] == 'P04') {
                                                echo 'Ringworm';
                                            } elseif ($d['next'] == 'P05') {
                                                echo 'Toxocara';
                                            } elseif ($d['next'] == 'P06') {
                                                echo 'Feline Panleucopenia';
                                            } elseif ($d['next'] == 'P07') {
                                                echo 'Chlamydia';
                                            } elseif ($d['next'] == 'P08') {
                                                echo 'Feline Rhinotracheitis';
                                            } elseif ($d['next'] == 'P09') {
                                                echo 'Pyometra';
                                            } elseif ($d['next'] == 'P10') {
                                                echo 'Tungau';
                                            }
                                            ?>
                                        </td>
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