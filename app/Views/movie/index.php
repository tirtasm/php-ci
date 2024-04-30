
<?= $this->extend('layout/template');?>
<?= $this->section('content');?>
<div class="container">
    <div class="col">
        <div class="row">
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
                    <tr>
                        <th scope="row">1</th>
                        <td><img src="/image/honda accord.jpg" class="sampul" width="200" alt=""></td>
                        <td>SuperCar</td>
                        <td><button type="button" class="btn btn-success">detail</button></td>
                    </tr>
                </tbody>
            </table>
            <style>
                
            </style>
        </div>
    </div>
</div>
<?= $this->endSection();?>