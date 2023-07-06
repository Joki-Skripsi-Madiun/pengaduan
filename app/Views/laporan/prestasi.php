<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!--  Header End -->
<div class="container-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4">Data Prestasi</h5>
                        <div class="row">
                            <div class="col-2">
                                <form action="/laporan/prestasi/tingkat/print" method="post">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="tingkat_prestasi">
                                        <option selected>Pilih Tingkatan</option>
                                        <option value="Kabupaten/Kota">Kabupaten/Kota</option>
                                        <option value="Provinsi">Provinsi</option>
                                        <option value="Nasional">Nasional</option>
                                        <option value="Internasional">Internasional</option>
                                    </select>
                            </div>
                            <div class="col-2"><button type="submit" class="btn btn-primary">Pilih</button>
                                </form>

                            </div>
                            <div class="col-2">
                                <form action="/laporan/prestasi/tingkat/print" method="post">
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

                            <div class="col-3"><a class="d-none d-sm-inline-block btn btn-success shadow-sm ms-5" href="<?= base_url(); ?>/laporan/prestasi/print">
                                    Cetak Semua</a></div>
                        </div>
                        <right></right>
                        <br>
                        <div class="table-responsive">
                            <table id="data1" class="table table-avatar bg-grey text-black">
                                <thead class="text-dark fs-4">
                                    <tr>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Id</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Nama Siswa</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Jenis Prestasi</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Aksi</h6>
                                        </th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($joinprestasi as $u) : ?>
                                        <tr>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0"><?= $no++ ?></h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-1"><?= $u['nama_siswa'] ?></h6>

                                            </td>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-1"><?= $u['nama_prestasi'] ?></h6>

                                            </td>
                                            <td class="border-bottom-0">
                                                <div class="d-flex align-items-center gap-2">
                                                    <a class="badge bg-warning rounded-2 fw-semibold" href="<?= base_url(); ?>/laporan/cetak_prestasi/<?= $u['id_prestasi'] ?>">
                                                        Cetak Prestasi</a>

                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>