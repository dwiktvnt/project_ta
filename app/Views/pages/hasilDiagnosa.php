<?= $this->extend('layout/index'); ?>
<?= $this->section('content'); ?>

<section id="konsultasi">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <h6 class="card-header">Hasil Diagnosa</h6>
                    <div class="card-body">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Dwi</td>
                                    <td>Laki-laki</td>
                                    <td>30/10/1997</td>
                                    <td>dwi@gmail.com</td>
                                    <td>Balaraja</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kode Gejala</th>
                                    <th scope="col">Gejala</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>G01</td>
                                    <td>Tidak Nafsu Makan</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>G02</td>
                                    <td>Lemas</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>G03</td>
                                    <td>Demam</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>G04</td>
                                    <td>Sesak Nafas</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>G05</td>
                                    <td>Penumpukan cairan di rongga abdomen</td>
                                </tr>
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
                                <tr>
                                    <th scope="row">1</th>
                                    <td>P01</td>
                                    <td>Feline Infectious Peritonitis.</td>
                                    <td>Berikan Antibiotik, Antimuntah , Chloralbucil yang bisa didapat di toko hewan atau bawa ke klinik hewan untuk perawatan lebih lanjut</td>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary mt-4">Cetak</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<?= $this->endSection(); ?>