<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Surat Keluar</h1>
        </div>
        <?php if (session()->get('role') == 1) { ?>
            <a class="btn btn-primary" href="<?= base_url(); ?>/surat-keluar/create">Tambah Surat</a>
        <?php } ?>
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success float-end col-5" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
        <br><br>
        <div class="col-xl-12 col-lg-12">
            <table id="data1" class="table" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Surat</th>
                        <th>Asal Surat</th>
                        <th>Jenis</th>
                        <th>File Surat</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($surat->getResult() as $a) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $a->nama_surat; ?></td>
                            <td><?= $a->asal_surat; ?></td>
                            <td><?= $a->nama_jenis; ?></td>
                            <td><a href="/surat-keluar/show/<?= $a->id_surat; ?>" class="btn btn-badge"><i class="bi bi-file-earmark-pdf-fill text-danger"></i></a></td>
                            <td><?= date("d-m-Y", strtotime($a->created_at)); ?></td>
                            <td>
                                <?php if (in_groups(user_id()) == 1) { ?>
                                    <a href="/surat-keluar/edit/<?= $a->id_surat; ?>" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Ubah</a>
                                    <!-- <a href="/data-akun/detail/<?= $a->id_surat; ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-eye fa-sm text-white-50"></i> Detail</a> -->
                                    <form action="/surat-keluar/delete/<?= $a->id_surat; ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" onclick="return confirm('Apakah Anda Yakin ?');"><i class="fas fa-trash fa-sm text-white-50"></i> Hapus</a> </button>
                                    </form>
                                <?php } else { ?>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Ubah</a>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Hapus</a>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
</div>
</div>




</main>
</div>
</div>
<?= $this->endSection(); ?>