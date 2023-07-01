<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!--  Header End -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cetak Surat Panggilan</h1>
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Data -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Cetak Surat Panggilan</h6>


                </div>
                <!-- Card Body -->
                <div class="card-body text-center">

                    <p>Silahkan pilih tanggal panggilan</p>
                    <br>
                    <div class="d-flex justify-content-center mb-5">
                        <form action="<?= base_url() ?>laporan/pelanggaran/sp/print/<?= $joinpelanggaran[0]['siswa_id']; ?>" method="post">
                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label for="inputPassword6" class="col-form-label">Pilih Tanggal</label>
                                </div>
                                <div class="col-auto">
                                    <input type="datetime-local" name="tanggal" class="form-control">
                                </div>
                                <div class="col-auto">
                                    <input type="hidden" name="id_siswa" value="<?= $joinpelanggaran[0]['siswa_id']; ?>" class="form-control">
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-success">Cetak</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection(); ?>