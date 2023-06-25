<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!--  Header End -->
<div class="container-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4">Data Pelanggaran</h5>
                        <right><a class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" href="<?= base_url(); ?>/">
                                Cetak</a></right>
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
                                <!-- <tbody>
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

                                            </td>
                                        </tr>
                                    <?php endforeach ?>

                                </tbody> -->
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>