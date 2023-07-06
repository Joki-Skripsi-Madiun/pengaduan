<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


<!--  Header End -->
<div class="container-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mb-4">Tambah Jenis</h5>
                        <hr>
                        <form class="row g-3" action="/jenis/save" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jenis</label>
                                <input type="text" class="form-control" name="nama_jenis" id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Kategori</label>
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="id_kategori">
                                    <option selected>Open this select menu</option>
                                    <?php foreach ($kategori as $k) : ?>
                                        <option value="<?= $k['id_kategori'] ?>"><?= $k['nama_kategori'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Bobot</label>
                                <input type="text" class="form-control" name="bobot" id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4">Jenis Kategori</h5>
                        <div class="table-responsive">
                            <table id="data1" class="table table-avatar bg-grey text-black">
                                <thead class="text-dark fs-4">
                                    <tr>
                                        <th>
                                            <h6 class="fw-semibold mb-0">No</h6>
                                        </th>
                                        <th>
                                            <h6 class="fw-semibold mb-0">Jenis</h6>
                                        </th>
                                        <th>
                                            <h6 class="fw-semibold mb-0">Kategori</h6>
                                        </th>
                                        <th>
                                            <h6 class="fw-semibold mb-0">Bobot</h6>
                                        </th>
                                        <th>
                                            <h6 class="fw-semibold mb-0">Aksi</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($joinjenis as $u) : ?>
                                        <tr>
                                            <td>
                                                <h6 class="fw-semibold mb-0"><?= $no++; ?></h6>
                                            </td>
                                            <td>
                                                <h6 class="fw-semibold mb-1"><?= $u['nama_jenis'] ?></h6>

                                            </td>
                                            <td>
                                                <h6 class="fw-semibold mb-1"><?= $u['nama_kategori'] ?></h6>
                                            </td>
                                            <td>
                                                <h6 class="fw-semibold mb-1"><?= $u['bobot'] ?></h6>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <a class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm" href="<?= base_url(); ?>/jenis/edit/<?= $u['id_jenis'] ?>">
                                                        Edit</a>
                                                    <form action="<?= base_url(); ?>/jenis/<?= $u['id_jenis']; ?>" method="post" class="d-inline">

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