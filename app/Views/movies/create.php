<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="col">
        <h2 class="my-3">Tambah Data Film</h2>

        <form action="/movies/save" method="POST" enctype="multipart/form-data">
            <?= csrf_field(); ?>

            <div class="mb-3">
                <label for="sutradara" class="form-label">Judul</label>
                <input type="text" class="form-control <?= (session('validation')) ? 'is-invalid' : ''; ?>" name="judul"
                    value="<?= old('judul') ?>">
                <div class="invalid-feedback">
                    <?= validation_show_error('judul'); ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="sutradara" class="form-label">Sutradara</label>
                <input type="text" class="form-control <?= (session('validation')) ? 'is-invalid' : ''; ?>"
                    name="sutradara" value="<?= old('sutradara') ?>">
                <div class="invalid-feedback">
                    <?= validation_show_error('sutradara') ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="produser" class="form-label">Produser</label>
                <input type="text" class="form-control <?= (session('validation')) ? 'is-invalid' : ''; ?>"
                    name="produser" id="produser" value="<?= old('produser') ?>">
                <div class="invalid-feedback">
                    <?= validation_show_error('produser') ?>
                </div>
            </div>
            <div class="mb-3">

                <label for="cover" class="labelCover">Cover</label>
                <div class="my-3">
                    <img src="/../image/monkey no bg.png" alt="" class="img-thumbnail img-preview ms-4" width="200">
                </div>
                <input type="file" class="form-control <?= (session('validation')) ? 'is-invalid' : ''; ?>" name="cover" onchange="previewImg()"
                    id="cover" value="<?= old('cover') ?>">
                <div class="invalid-feedback">
                    <?= validation_show_error('cover') ?>
                </div>

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
</div>

<?= $this->endSection(); ?>