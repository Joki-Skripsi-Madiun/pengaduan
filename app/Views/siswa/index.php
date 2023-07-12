<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!--  Header End -->

<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Siswa</h5> <a href="<?= base_url() ?>siswa/template/download"> Download Template</a>
                    <?php if (session('success')) : ?>
                        <div><?= session('success') ?></div>
                    <?php endif; ?>

                    <?php if (session('error')) : ?>
                        <div><?= session('error') ?></div>
                    <?php endif; ?>

                    <form method="post" enctype="multipart/form-data" action="<?= site_url('import-data/import') ?>">
                        <div class="row">
                            <div class="col-8">
                                <input class="form-control form-sm" type="file" name="excel_file" required>
                            </div>
                            <div class="col-4">
                                <button class="btn bg-warning rounded-2 fw-semibold" type="submit">Import</button>
                            </div>
                        </div>

                    </form>
                    <hr>
                    <form class="row g-3" action="/siswa/save" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
                            <input type="text" class="form-control" name="nama_siswa" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kelas</label>
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="id_kelas">
                                <option selected>Open this select menu</option>
                                <?php foreach ($kelas as $k) : ?>
                                    <option value="<?= $k['nama_kelas'] ?>"><?= $k['nama_kelas'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">No Induk Siswa</label>
                            <input type="text" class="form-control" name="no_induk" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputtext1" class="form-label">Jenis Kelamin</label>
                            <select class="form-select px-3" id="floatingSelect" aria-label="Floating label select example" name="jenis_kelamin">
                                <option selected>Open this select menu</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>

                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tgl_lahir" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4">Data Siswa <a href="/siswa/kelas" class="btn btn-sm bg-warning text-white float-end">Update Kelas Siswa All</a> </h5>
                    <div class="table-responsive">
                        <table id="data1" class="table table-avatar bg-grey text-black" style="width:100%">
                            <thead>

                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Siswa</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">No.Induk</th>

                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $no = 1;
                                foreach ($joinsiswa as $u) : ?>
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0"><?= $no++; ?></h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1"><?= $u['nama_siswa'] ?></h6>

                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1"><?= $u['nama_kelas'] ?></h6>

                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1"><?= $u['no_induk'] ?></h6>

                                        </td>

                                        <td class="border-bottom-0">
                                            <div class="d-flex align-items-center gap-2">
                                                <a class="badge bg-warning rounded-2 fw-semibold" href="<?= base_url(); ?>/siswa/edit/<?= $u['id_siswa'] ?>">
                                                    Edit</a>
                                                <a class="badge bg-success rounded-2 fw-semibold" href="<?= base_url(); ?>/siswa/detail/<?= $u['id_siswa'] ?>">
                                                    Detail</a>
                                                <form action="<?= base_url(); ?>/siswa/<?= $u['id_siswa']; ?>" method="post" class="d-inline">

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



    <?= $this->endSection(); ?>