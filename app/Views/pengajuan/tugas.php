<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Pengajuan Tugas</h1>
        </div>
        <?php if (user()->status == 1) { ?>

            <a class="btn btn-primary" href="<?= base_url(); ?>/pengajuan/tambahTugas">Tambah Tugas</a>

        <?php } ?>

        <br>

        <br>
        <div class="table-responsive">
            <table id="data2" class="table table-avatar bg-grey text-black" style="width:100%">
                <thead>

                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tempat</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1;
                    foreach ($tugas as $a) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $a['nama_tugas']; ?></td>
                            <td><?= $a['tempat_tugas']; ?></td>
                            <td><?= $a['status_tugas'] == 1 ? 'Disetujui' : 'Diproses' ?></td>
                            <td>
                                <?php if (user()->status == 3) { ?>
                                    <a href="/cekTugas/<?= $a['id_tugas']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Cek</a>
                                <?php } else { ?>
                                    <?php if ($a['status_tugas'] == 1) { ?>
                                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Ubah</a>
                                    <?php } else { ?>
                                        <a href="/editTugas/<?= $a['id_tugas']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Ubah</a>

                                    <?php } ?>
                                    <a href="/detailTugas/<?= $a['id_tugas']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Detail</a>
                                    <a href="/cetakTugas/<?= $a['id_tugas']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Cetak</a>
                                    <?php if ($a['status_tugas'] == 1) { ?>
                                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Hapus</a>
                                    <?php } else { ?>
                                        <form action="/tugas/<?= $a['id_tugas']; ?>" method="post" class="d-inline">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" onclick="return confirm('Apakah Anda Yakin ?');"><i class="fas fa-trash fa-sm text-white-50"></i> Hapus</a> </button>
                                        </form>
                                <?php }
                                } ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <br>


    </main>
</div>
</div>
<?= $this->endSection(); ?>