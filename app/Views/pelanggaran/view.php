<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!--  Header End -->

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
                    <a href="/pelanggaran" class="btn btn-primary">Kembali</a>


                </div>
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <h5>Foto Pelanggaran</h5>
            </div>
            <img width="400px" src="<?= base_url(); ?>/img/<?= $joinpelanggaran[0]['foto_pelanggaran'] ?>" alt="">
        </div>
    </div>


    <?= $this->endSection(); ?>