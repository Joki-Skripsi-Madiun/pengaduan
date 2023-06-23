<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!--  Header End -->
<div class="container-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mb-4">Edit Kategori</h5>
                        <hr>
                        <div class="row my-3">
                            <div class="col-4">Nama</div>
                            <div class="col">: <?= $dataakun['fullname'];  ?></div>
                        </div>
                        <div class="row my-3">
                            <div class="col-4">Jenis Kelamin</div>
                            <div class="col">: <?= $dataakun['jenis_kelamin'] == 1 ? 'Laki-Laki' : 'Perempuan'  ?></div>
                        </div>
                        <div class="row my-3">
                            <div class="col-4">Username</div>
                            <div class="col">: <?= $dataakun['username'];  ?></div>
                        </div>
                        <div class="row my-3">
                            <div class="col-4">Email</div>
                            <div class="col">: <?= $dataakun['email'];  ?></div>
                        </div>
                        <div class="row my-3">
                            <div class="col-4">Alamat</div>
                            <div class="col">: <?= $dataakun['alamat'];  ?></div>
                        </div>
                        <div class="row my-3">
                            <div class="col-4">Foto</div>
                            <div class="col"><img class="px-3 px-sm-4 mt-3 mb-4 img-thumbnail" src="/img/<?= $dataakun['foto'];  ?>" width="200px" height="200px" alt="<?= $dataakun['foto'];  ?>">
                            </div>
                        </div>
                        <div class="col-12 mt-5">
                            <a href="/data-akun" class="btn btn-warning  float-right">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>