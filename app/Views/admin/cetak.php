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
            <th scope="col">Penjelasan</th>
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
                <td><?= $d['penjelasan']; ?></td>
                <td><?= $d['solusi']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>