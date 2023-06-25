<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pengajuan</h1>
    </div>
        <div class="dropdown">
            <!-- <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                 Tambah
            </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="<?= base_url(); ?>/pengajuan/tambahPengantar">Pengantar</a></li>
            <li><a class="dropdown-item" href="<?= base_url(); ?>/pengajuan/tambahTugas">Tugas</a></li>
            <li><a class="dropdown-item" href="<?= base_url(); ?>/pengajuan/tambahDisposisi">Disposisi</a></li>
         </ul> -->
</div>

<br>
<h4>Pengantar</h4>
<br>
<div class="table-responsive">
        <table id="data1" class="table table-avatar bg-grey text-black" style="width:100%">
            <thead>
               
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pengantar</th>
                    <th scope="col">Tujuan Pengantar</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>

            <tbody>
        <?php $no = 1;
        foreach ($pengantar as $a) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $a['nama_pengantar']; ?></td>
                        <td><?= $a['tujuan_pengantar']; ?></td>
                        <td> <a href="/detailPengantar/<?= $a['id_pengantar']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Setujui</a></td>
                        <td>
                           
                             <a href="/detailPengantar/<?= $a['id_pengantar']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Detail</a>
                        
                                        </td>
                    </tr>
         <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <br>
<h4>Tugas</h4>
<br>
<div class="table-responsive">
        <table id="data1" class="table table-avatar bg-grey text-black" style="width:100%">
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
                        <td><a href="/editTugas/<?= $a['id_tugas']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Setujui</a></td>
                        <td>
                           
                            <a href="/detailTugas/<?= $a['id_tugas']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Detail</a>
                            
                        </td>
                    </tr>
         <?php endforeach ?>
            </tbody>
        </table>
    </div>
<br>
<h4>Disposisi</h4>
<br>
<div class="table-responsive">
        <table id="data1" class="table table-avatar bg-grey text-black" style="width:100%">
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
                        <td> <a href="/editDisposisi/<?= $b['id_disposisi']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Setujui</a></td>
                        <td> 
                            <a href="/detailDisposisi/<?= $b['id_disposisi']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Detail</a>
                           
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