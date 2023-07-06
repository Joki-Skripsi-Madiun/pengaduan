<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!--  Header End -->

<div class="container-fluid">
<<<<<<< HEAD
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Data Pelanggaran</h5>
                    <hr>
=======
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mb-4">Data Pelanggaran</h5>
                        <hr>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
                            <h6><?= $joinpelanggaran[0]['nama_siswa'] ?></h6>

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kelas</label>
                            <h6><?= $joinpelanggaran[0]['nama_kelas'] ?></h6>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputtext1" class="form-label">Jenis Pelanggaran</label>
                            <h6><?= $joinpelanggaran[0]['nama_jenis'] ?></h6>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Waktu</label>
                            <h6><?= $joinpelanggaran[0]['waktu'] ?></h6>

                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Pelapor</label>
                            <h6><?= $joinpelanggaran[0]['pelapor'] ?></h6>

                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Catatan</label>
                            <h6><?= $joinpelanggaran[0]['catatan'] ?></h6>

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Wali Kelas</label>
                            <h6><u><?= $joinpelanggaran[0]['wali_kelas'] ?></u></h6>
                            <p><?= $joinpelanggaran[0]['nip'] ?></p>
                        </div>

                        <label for="floatingInput">Foto Pelanggaran</label>


                        <div class="col-12 mb-3">
                            <img src="<?php echo base_url(); ?>/img/<?= (old('foto_pelanggaran') ? old('foto_pelanggaran') : $joinpelanggaran[0]['foto_pelanggaran']); ?>" width="100">
                            <br>
                        </div>
                        <a class="btn btn-sm btn-primary" href="<?= base_url(); ?>/pelanggaran" aria-expanded="false">
                            Kembali
                        </a>
>>>>>>> 2ce0afbbfb1c43858aaad853544a753b858dab9e

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
                        <h6><?= $joinpelanggaran[0]['nama_siswa'] ?></h6>

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kelas</label>
                        <h6><?= $joinpelanggaran[0]['nama_kelas'] ?></h6>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext1" class="form-label">Jenis Pelanggaran</label>
                        <h6><?= $joinpelanggaran[0]['nama_jenis'] ?></h6>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Waktu</label>
                        <h6><?= $joinpelanggaran[0]['waktu'] ?></h6>

                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Pelapor</label>
                        <h6><?= $joinpelanggaran[0]['pelapor'] ?></h6>

                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Catatan</label>
                        <h6><?= $joinpelanggaran[0]['catatan'] ?></h6>

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Wali Kelas</label>
                        <h6><u><?= $joinpelanggaran[0]['wali_kelas'] ?></u></h6>
                        <p><?= $joinpelanggaran[0]['nip'] ?></p>
                    </div>
                    <a href="/pelanggaran" class="btn btn-primary">Kembali</a>


                </div>
            </div>
        </div>
    </div>


    <?= $this->endSection(); ?>