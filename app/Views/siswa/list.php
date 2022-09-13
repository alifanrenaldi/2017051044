<div>
    <h2>Siswa</h2>
</div>
<div class="p-4">
    <a class="btn btn-primary mb-3" href="/create" role="button">tambah</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">no</th>
            <th scope="col">nama</th>
            <th scope="col">nim</th>
            <th scope="col">create_at</th>
            <th scope="col">update_at</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        <tr>
            <?php $no = 1;
            foreach ($siswa as $sis) : ?>
                <th scope="row"><?= $no ?></th>
                <td> <?= $sis['nama'] ?></td>
                <td> <?= $sis['nim'] ?></td>
                <td> <?= $sis['create_at'] ?></td>
                <td> <?= $sis['update_at'] ?></td>
        </tr>
    <?php $no++;
            endforeach; ?>
    </tbody>
</table>