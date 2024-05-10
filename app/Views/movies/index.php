<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <a href="/movies/create/" class="btn btn-primary mt-3">Tambah Data</a>
    <h2 class="my-3">Daftar Film</h2>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <table class="table table-striped align-middle table-hover">
        <thead class="table-light">
            <tr>
                <th scope="col">#</th>
                <th class="cover" scope="col">Cover</th>
                <th scope="col">Nama</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $x = 1; ?>
            <?php foreach ($film as $f): ?>
                <tr>
                    <th scope="row"><?= $x++; ?></th>
                    <td><img src="/image/<?= $f['cover'] ?>" class="cover" width="200" alt=""></td>
                    <td><?= $f['judul'] ?></td>
                    <td><a class="btn btn-success" href="/movies/<?= $f['slug'] ?>">detail</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <style>

    </style>
</div>

<?= $this->endSection(); ?>