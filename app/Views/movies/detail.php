<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<h4 class="text-center my-3">Detail Film</h4>
<div class="container my-4 d-flex justify-content-center">
    <div class="card w-25 ">
        <img src="/image/<?= $film['cover']; ?>" alt="Cover" class="img-fluid">
        <div class="card-body">
            <div class="col-md-12">
                <div class="card-body">
                    <h5 class="card-title"><?= $film['judul'] ?></h5>
                    <p class="card-text">Direct by <br><small class="text-muted"><?= $film['sutradara'] ?></small></p>
                    <p class="card-text">Produced by <br><small class="text-muted"><?= $film['produser'] ?></small></p>
                </div>
            </div>
            <a href="/movies" class="me-3">Kembali</a>
        </div>
    </div>
    <div class="px-3">
        <a href="/movies/edit/<?=$film['slug']?>" class="btn btn-warning">Edit</a>
        <form action="/movies/<?= $film['id']; ?>" method="post" class="d-inline">
            <?= csrf_field(); ?>
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Delete</button>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>