<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!--  Header End -->

<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Kelas</h5>
                    <hr>
                    <form class="row g-3" action="/kelas/save" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Kelas</label>
                            <input type="text" class="form-control" name="nama_kelas" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Wali Kelas</label>
                            <input type="text" class="form-control" name="wali_kelas" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputtext1" class="form-label">Jenis Kelamin</label>
                            <select class="form-select px-3" id="floatingSelect" aria-label="Floating label select example" name="jk_wali">
                                <option selected>Open this select menu</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>

                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">NIP Wali Kelas</label>
                            <input type="text" class="form-control" name="nip" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4">Data Kelas</h5>
                    <div class="table-responsive">
                        <table id="data1" class="table text-nowrap mb-0 align-middle">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Id</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Kelas</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Wali Kelas</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">NIP Kelas</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Jumlah Siswa</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Aksi</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($kelas as $rw) {
                                    $row = "row" . $rw['id_kelas'];
                                    echo $$row;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>