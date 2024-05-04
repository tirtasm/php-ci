<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<h4 class="text-center my-3">Detail Film</h4>
<div class="container my-4 d-flex justify-content-center">
    <div class="card w-25 ">
        <img src="/image/<?= $film['sampul']; ?>" alt="Cover" class="img-fluid">
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
        <a href="/movies" class="btn btn-warning">sasKembali</a>
        <a href="/movies" class="btn btn-danger">sasKembali</a>
    </div>
</div>
<?= $this->endSection(); ?>