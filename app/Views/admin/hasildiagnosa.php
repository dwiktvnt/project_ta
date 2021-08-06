<?= $this->extend('admin/template/index') ?>

<?= $this->section('content'); ?>

<div id="main" class='layout-navbar'>

    <?= $this->include('admin/template/header') ?>

    <div id="main-content">
        <div class="page-heading">
            <?= $this->include('admin/template/page-heading') ?>
        </div>


        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Perhatian!</strong> sebelum melakukan diagnosa, dianjurkan untuk mengisi data diri secara lengkap di menu profile.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <div class="row" id="diagnosa">
            <div class="col">
                <div class="card">
                    <h6 class="card-header">Hasil Diagnosa</h6>
                    <?php if (!$data) : ?>
                        <div class="card-body">
                            <h1 class="text-center"><i class="bi bi-file-earmark-excel-fill"></i> Penyakit tidak ditemukan</h1>
                            <h6 class="text-center">Mohon maaf, Penyakit kucing anda belum terindentifikasi di sistem kami, segera kunjungi klinik hewan terdekat</h6>
                        </div>
                    <?php else : ?>
                        <div class="card-body">
                            <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td><?= user()->fullname; ?></td>
                                        <td><?= user()->username; ?></td>
                                        <td><?= user()->email ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Gejala</th>
                                        <th scope="col">Jawaban</th>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($history as $h) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $h['namaGejala']; ?></td>
                                            <td><?= $h['jawaban']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kode Penyakit</th>
                                        <th scope="col">Nama Penyakit</th>
                                        <th scope="col">Solusi Penanganan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($data as $d) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $d['kodePenyakit']; ?></td>
                                            <td><?= $d['namaPenyakit']; ?></td>
                                            <td><?= $d['solusi']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-primary mt-4"><i class="bi bi-printer-fill"></i> Cetak</button>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>



        <?= $this->include('admin/template/footer') ?>
    </div>
</div>
<?= $this->endSection(); ?>