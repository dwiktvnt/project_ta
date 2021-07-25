<?= $this->extend('layout/index'); ?>
<?= $this->section('content'); ?>

<section id="datadiri">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mb-4">Form Data Diri</h2>
                <form>
                    <div class="row mb-3">
                        <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputnama">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Umur</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="inputPassword3">
                        </div>
                    </div>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Laki-laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea name="alamat" id="alamat" class="form-control" id="alamat" rows="3"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-warning">Mulai</button>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>

<?= $this->endSection(); ?>