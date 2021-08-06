<?= $this->extend('layout/index'); ?>
<?= $this->section('content'); ?>
<section style="height:100%; width: 100%; box-sizing: border-box; background-color: #FFFFFF" id="tentangkami">

    <div class="main-content-3-2" style="font-family: 'Poppins', sans-serif;">
        <div class="container">
            <div class="d-flex flex-lg-row flex-column align-items-center">
                <!-- Left Column -->
                <div class="img-hero-content-3-2 text-center justify-content-center d-flex">
                    <img id="hero-content-3-2" class="img-fluid" src="https://blush.design/api/download?shareUri=kci_GbWhB6F5vXVp&w=800&h=800&fm=png" alt="">
                </div>

                <!-- Right Column -->
                <div class="right-column-content-3-2 d-flex flex-column align-items-lg-start align-items-center text-lg-start text-center">
                    <h2 class="title-text-content-3-2">Tentang Kami</h2>
                    <p style="text-align: justify;">SPPK Adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor cum, quidem mollitia facere fugit placeat voluptatem consectetur vero! Quae ipsam, saepe, temporibus similique aut laboriosam sit in exercitationem modi atque culpa eligendi tempore porro labore quod, consequatur rem dolorem? Laborum adipisci amet minima illum, soluta consequuntur laudantium ipsum. Maxime, nobis?</p>
                    <a href="<?= base_url('admin'); ?>" class="btn btn-content-3-2">Mulai Diagnosa</a>
                </div>
            </div>

        </div>
    </div>


</section>

<section style="height:100%; width: 100%; box-sizing: border-box; background-color: #FFFFFF" id="informasi">

    <div class="main-content-3-2" style="font-family: 'Poppins', sans-serif;">
        <div class="text-center">
            <h1 class="title-text-content"><b>Informasi</b> </h1>
            <p>Daftar Data Gejala & Penyakit Kucing</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4 class="mt-1 mb-4">Data Gejala</h4>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Kode Gejala</th>
                                <th scope="col">Nama Gejala</th>
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
                                    <td><?= $d['kodeGejala']; ?></td>
                                    <td><?= $d['namaGejala']; ?></td>
                                </tr>
                            <?php
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="col">
                    <h4 class="mt-1 mb-4">Data Penyakit</h4>
                    <table class="table table-hover">
                        <thead>

                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Kode Penyakit</th>
                                <th scope="col">Nama Penyakit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            ?>
                            <?php
                            foreach ($dataPenyakit as $d) :
                            ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?> </th>
                                    <td><?= $d['kodePenyakit']; ?></td>
                                    <td><?= $d['namaPenyakit']; ?></td>
                                </tr>
                            <?php
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>

</section>


<?= $this->endSection(); ?>