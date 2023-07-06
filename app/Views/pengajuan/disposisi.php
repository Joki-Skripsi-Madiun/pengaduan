<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Pengajuan Disposisi</h1>
        </div>
        <?php if (user()->status == 1) { ?>

            <a class="btn btn-primary" href="<?= base_url(); ?>/pengajuan/tambahDisposisi">Tambah Disposisi</a>

        <?php } ?>


        <br>

        <br>
        <div class="table-responsive">
            <table id="data3" class="table table-avatar bg-grey text-black" style="width:100%">
                <thead>

                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Jenis Disposisi</th>
                        <th scope="col">Perihal Disposisi</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1;
                    foreach ($disposisi as $b) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $b['jenis_disposisi']; ?></td>
                            <td><?= $b['perihal_disposisi']; ?></td>
                            <td><?= $b['status_disposisi'] == 1 ? 'Disetujui' : 'Diproses' ?></td>
                            <td>
                                <?php if (user()->status == 3) { ?>
                                    <a href="/cekDisposisi/<?= $b['id_disposisi']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Cek</a>
                                <?php } else { ?>
                                    <?php if ($b['status_disposisi'] == 1) { ?>
                                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Ubah</a>
                                    <?php } else { ?>
                                        <a href="/editDisposisi/<?= $b['id_disposisi']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Ubah</a>
                                    <?php } ?>
                                    <a href="/detailDisposisi/<?= $b['id_disposisi']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Detail</a>
                                    <a href="/cetakDisposisi/<?= $b['id_disposisi']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Cetak</a>
                                    <?php if ($b['status_disposisi'] == 1) { ?>
                                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Hapus</a>
                                    <?php } else { ?>
                                        <form action="/disposisi/<?= $b['id_disposisi']; ?>" method="post" class="d-inline">
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

    </main>
</div>
</div>
<?= $this->endSection(); ?>