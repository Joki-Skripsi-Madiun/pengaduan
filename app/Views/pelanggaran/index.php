<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!--  Header End -->
<div class="container-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mb-4">Pelanggaran</h5>
                        <hr>
                        <form class="row g-3" action="/pelanggaran/save" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Siswa</label>
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="id_siswa">
                                    <option selected>Open this select menu</option>
                                    <?php foreach ($siswa as $k) : ?>
                                        <option value="<?= $k['id_siswa'] ?>"><?= $k['nama_siswa'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jenis Pelanggaran</label>
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="id_jenis">
                                    <option selected>Open this select menu</option>
                                    <?php foreach ($jenis as $k) : ?>
                                        <option value="<?= $k['id_jenis'] ?>"><?= $k['nama_jenis'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Pelapor</label>
                                <input type="text" class="form-control" name="pelapor" id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Catatan</label>
                                <textarea type="text" class="form-control" name="catatan" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Waktu</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="waktu" value="<?= date('l, d F Y, h:i:s A'); ?>" readonly aria-describedby="emailHelp">

                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Foto</label>
                                <input class="form-control form-control-sm" name="foto_pelanggaran" id="formFileSm" type="file">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4">Data Pelanggaran</h5>
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
                                            <h6 class="fw-semibold mb-0">Jenis Pelanggaran</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Poin</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Aksi</h6>
                                        </th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($joinpelanggaran as $u) : ?>
                                        <tr>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">1</h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-1"><?= $u['nama_siswa'] ?></h6>

                                            </td>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-1"><?= $u['nama_jenis'] ?></h6>

                                            </td>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-1"><?= $u['bobot'] ?></h6>

                                            </td>
                                            <td class="border-bottom-0">
                                                <div class="d-flex align-items-center gap-2">
                                                    <a class="badge bg-warning rounded-2 fw-semibold" href="<?= base_url(); ?>/pelanggaran/edit/<?= $u['id_pelanggaran'] ?>">
                                                        Edit</a>
                                                    <a class="badge bg-success rounded-2 fw-semibold" href="<?= base_url(); ?>/pelanggaran/view/<?= $u['id_pelanggaran'] ?>">
                                                        Detail</a>
                                                    <form action="<?= base_url(); ?>/pelanggaran/<?= $u['id_pelanggaran']; ?>" method="post" class="d-inline">

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