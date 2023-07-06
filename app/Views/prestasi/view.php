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
                            <h6><?= $joinprestasi[0]['nama_siswa'] ?></h6>

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kelas</label>
                            <h6><?= $joinprestasi[0]['nama_kelas'] ?></h6>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputtext1" class="form-label">Nama Prestasi</label>
                            <h6><?= $joinprestasi[0]['nama_prestasi'] ?></h6>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tanggal Prestasi</label>
                            <h6><?= $joinprestasi[0]['tgl_prestasi'] ?></h6>

                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tingkat Prestasi</label>
                            <h6><?= $joinprestasi[0]['tingkat_prestasi'] ?></h6>

                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                            <h6><?= $joinprestasi[0]['keterangan'] ?></h6>

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Wali Kelas</label>
                            <h6><u><?= $joinprestasi[0]['wali_kelas'] ?></u></h6>
                            <p><?= $joinprestasi[0]['nip'] ?></p>
                        </div>

                        <label for="floatingInput">Foto Pelanggaran</label>


                        <div class="col-12 mb-3">
                            <img src="<?php echo base_url(); ?>/img/<?= (old('foto_prestasi') ? old('foto_prestasi') : $joinprestasi[0]['foto_prestasi']); ?>" width="100">
                            <br>
                        </div>
                        <a class="btn btn-sm btn-primary" href="<?= base_url(); ?>/prestasi" aria-expanded="false">
                            Kembali
                        </a>

>>>>>>> 2ce0afbbfb1c43858aaad853544a753b858dab9e

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
                        <h6><?= $joinprestasi[0]['nama_siswa'] ?></h6>

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kelas</label>
                        <h6><?= $joinprestasi[0]['nama_kelas'] ?></h6>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext1" class="form-label">Nama Prestasi</label>
                        <h6><?= $joinprestasi[0]['nama_prestasi'] ?></h6>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Prestasi</label>
                        <h6><?= $joinprestasi[0]['tgl_prestasi'] ?></h6>

                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tingkat Prestasi</label>
                        <h6><?= $joinprestasi[0]['tingkat_prestasi'] ?></h6>

                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                        <h6><?= $joinprestasi[0]['keterangan'] ?></h6>

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Wali Kelas</label>
                        <h6><u><?= $joinprestasi[0]['wali_kelas'] ?></u></h6>
                        <p><?= $joinprestasi[0]['nip'] ?></p>
                    </div>

                    <a href="/prestasi" class="btn btn-primary">Kembali</a>



                </div>
            </div>
        </div>
    </div>


    <?= $this->endSection(); ?>