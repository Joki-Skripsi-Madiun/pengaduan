<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!--  Header End -->
<div class="container-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mb-4">Data Siswa</h5>
                        <hr>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
                            <h6><?= $joinsiswa[0]['nama_siswa'] ?></h6>

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kelas</label>
                            <h6><?= $joinsiswa[0]['nama_kelas'] ?></h6>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">No Induk Siswa</label>
                            <h6><?= $joinsiswa[0]['no_induk'] ?></h6>

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputtext1" class="form-label">Jenis Kelamin</label>
                            <h6><?= $joinsiswa[0]['jenis_kelamin'] ?></h6>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                            <h6><?= $joinsiswa[0]['tgl_lahir'] ?></h6>

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Alamat</label>
                            <h6><?= $joinsiswa[0]['alamat'] ?></h6>

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Wali Kelas</label>
                            <h6><u><?= $joinsiswa[0]['wali_kelas'] ?></u></h6>
                            <p><?= $joinsiswa[0]['nip'] ?></p>
                        </div>


                        <button type="submit" class="btn btn-primary">Kembali</button>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>