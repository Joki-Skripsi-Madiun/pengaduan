<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!--  Header End -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Update Semua Kelas Siswa</h1>
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
                    <h6 class="m-0 font-weight-bold text-primary">Update Semua Kelas Siswa</h6>


                </div>
                <!-- Card Body -->
                <div class="card-body text-center">

                    <p>Silahkan pilih kelas</p>
                    <br>
                    <div class="d-flex justify-content-center mb-5">
                        <form action="<?= base_url() ?>siswa/kelas/update" method="post">
                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label for="inputPassword6" class="col-form-label">Pilih Kelas Lama</label>
                                </div>
                                <div class="col-auto">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="kelas_lama">
                                        <option selected>Open this select menu</option>
                                        <?php foreach ($kelas as $k) : ?>
                                            <option value="<?= $k['nama_kelas'] ?>"><?= $k['nama_kelas'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="col-auto">
                                    <label for="inputPassword6" class="col-form-label">Pilih Kelas Baru</label>
                                </div>
                                <div class="col-auto">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="kelas_baru">
                                        <option selected>Open this select menu</option>
                                        <?php foreach ($kelas as $k) : ?>
                                            <option value="<?= $k['nama_kelas'] ?>"><?= $k['nama_kelas'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>

                                <div class="col-auto">
                                    <button type="submit" class="btn btn-success">Update</button>
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