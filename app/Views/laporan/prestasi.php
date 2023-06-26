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
                                <form action="#" method="post">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="id_kelas">
                                        <option selected>Pilih Tingkatan</option>
                                        <option value="Lokal">Lokal</option>
                                        <option value="Nasional">Nasional</option>
                                        <option value="Internasional">Internasional</option>

                                    </select>
                            </div>
                            <div class="col-3"><button type="submit" class="btn btn-primary">Pilih</button>
                                </form>
                                <a class="d-none d-sm-inline-block btn btn-success shadow-sm ms-5" href="<?= base_url(); ?>/laporan/prestasi/print">
                                    Cetak Semua</a>
                            </div>

                            <div class="col-3"></div>
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
                                    <?php foreach ($joinprestasi as $u) : ?>
                                        <tr>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">1</h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-1"><?= $u['nama_siswa'] ?></h6>

                                            </td>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-1"><?= $u['nama_prestasi'] ?></h6>

                                            </td>
                                            <td class="border-bottom-0">
                                                <div class="d-flex align-items-center gap-2">
                                                    <a class="badge bg-warning rounded-2 fw-semibold" href="<?= base_url(); ?>/prestasi/edit/<?= $u['id_prestasi'] ?>">
                                                        Edit</a>
                                                    <a class="badge bg-success rounded-2 fw-semibold" href="<?= base_url(); ?>/prestasi/view/<?= $u['id_prestasi'] ?>">
                                                        Detail</a>
                                                    <form action="<?= base_url(); ?>/prestasi/<?= $u['id_prestasi']; ?>" method="post" class="d-inline">

                                                        <?= csrf_field(); ?>

                                                        <input type="hidden" name="_method" value="DELETE">

                                                        <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" onclick="return confirm('Apakah Anda Yakin ?');"><i class="fas fa-edit fa-sm text-white-50"></i> Hapus</a> </button>

                                                    </form>
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