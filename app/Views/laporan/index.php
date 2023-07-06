<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!--  Header End -->

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4">Data Pelanggaran</h5>
                    <right>
                        <div class="row">
                            <div class="col-2">
                                <a class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" href="<?= base_url(); ?>/laporan/pelanggaran/print">
                                    Cetak Semua</a>
                            </div>
                            <div class="col-2">
                                <form action="/laporan/pelanggaran/kelas/print" method="post">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="kelas">
                                        <option selected>Pilih Kelas</option>
                                        <?php foreach ($kelas as $k) : ?>
                                            <option value="<?= $k['nama_kelas']; ?>"><?= $k['nama_kelas']; ?></option>
                                        <?php endforeach ?>
                                    </select>
                            </div>
                            <div class="col-2">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="tahun">
                                    <option selected>Pilih Tahun</option>
                                    <?php for ($tahun = 2000; $tahun <= 2040; $tahun++) { ?>
                                        <option value="<?= $tahun; ?>"><?= $tahun; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-1"><button type="submit" class="btn btn-primary">Pilih</button>
                                </form>

                            </div>

                        </div>


                    </right>
                    <br>
                    <br>
                    <br>
                    <div class="table-responsive">

                        <table id="data1" class="table table-avatar bg-grey text-black">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">No</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Nama Siswa</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Kelas</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Status</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Poin</h6>
                                    </th>
                                    <th class="border-bottom-0" style="text-align: center;">
                                        <h6 class="fw-semibold mb-0">Aksi</h6>
                                    </th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($siswa as $rw) {
                                    $row = "row" . $rw['id_siswa'];
                                    echo $$row;
                                }
                                ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?= $this->endSection(); ?>