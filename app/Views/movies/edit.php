<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">

    <div class="col-8">
        <h2 class="my-3">Edit Data Film</h2>

        <form action="/movies/update" method="POST" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <input type="hidden" name="slug" value="<?= $film['slug'] ?>">
            <input type="hidden" name="coverLama" value="<?= $film['cover'] ?>">
            <div class="mb-3">
                <label for="sutradara" class="form-label">Judul</label>
                <input type="text" class="form-control <?= (session('validation')) ? 'is-invalid' : ''; ?>" name="judul"
                    value="<?= (old('judul')) ? old('judul') : $film['judul'] ?>">
                <div class="invalid-feedback">
                    <?= validation_show_error('judul'); ?>

                </div>
            </div>
            <div class="mb-3">
                <label for="sutradara" class="form-label">Sutradara</label>
                <input type="text" class="form-control <?= (session('validation')) ? 'is-invalid' : ''; ?>"
                    name="sutradara" value="<?= (old('sutradara')) ? old('sutradara') : $film['sutradara'] ?>">
                <div class="invalid-feedback">
                    <?= validation_show_error('sutradara') ?>

                </div>
            </div>
            <div class="mb-3">
                <label for="produser" class="form-label">Produser</label>
                <input type="text" class="form-control <?= (session('validation')) ? 'is-invalid' : ''; ?>"
                    name="produser" id="produser"
                    value="<?= (old('produser')) ? old('produser') : $film['produser'] ?>">
                <div class="invalid-feedback">
                    <?= validation_show_error('produser') ?>
                </div>
            </div>
            <div class="mb-3">

                <label for="cover">Cover</label>
                <div class="my-3">
                    <img src="/../image/luca.jpg" alt="" class="img-thumbnail img-preview ms-4" width="200">
                </div>
                <label for="cover" class="labelCover"><?= $film['cover']?></label>
                <input type="file" class="form-control <?= (session('validation')) ? 'is-invalid' : ''; ?>" name="cover"
                onchange="previewImg()" id="cover" value="<?= old('cover') ?>">
                <div class="invalid-feedback">
                    <?= validation_show_error('cover') ?>
                </div>


            </div>


            <button type="submit" class="btn btn-primary">Ubah Data</button>
        </form>
    </div>

</div>


<?= $this->endSection(); ?>