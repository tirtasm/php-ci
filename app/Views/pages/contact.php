<?= $this->extend('layout/template');?>
<?= $this->section('content');?>
<div class="container">
    <div class="col">
        <div class="row">
            <div class="col mt-4">
                <h2>Contact Me</h2>
                <?php foreach ($alamat as $a) : ?>
                <ul>
                    <li><?= $a['tipe']; ?></li>
                    <li><?= $a['alamat']; ?></li>
                    <li><?= $a['kota']; ?></li>
                </ul>
                <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection();?>