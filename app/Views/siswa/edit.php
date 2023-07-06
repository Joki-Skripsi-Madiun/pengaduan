<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!--  Header End -->

<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Siswa</h5>
                    <hr>
                    <form class="row g-3" action="/siswa/update/<?= $joinsiswa[0]['id_siswa'] ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
                            <input type="text" value="<?= $joinsiswa[0]['nama_siswa'] ?>" class="form-control" name="nama_siswa" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kelas</label>
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="id_kelas">
                                <option value="<?= $joinsiswa[0]['id_kelas'] ?>" selected><?= $joinsiswa[0]['nama_kelas'] ?></option>
                                <?php foreach ($kelas as $k) : ?>
                                    <option value="<?= $k['nama_kelas'] ?>"><?= $k['nama_kelas'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">No Induk Siswa</label>
                            <input type="text" value="<?= $joinsiswa[0]['no_induk'] ?>" class="form-control" name="no_induk" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputtext1" class="form-label">Jenis Kelamin</label>
                            <select class="form-select px-3" id="floatingSelect" aria-label="Floating label select example" name="jenis_kelamin">
                                <option selected value="<?= $joinsiswa[0]['jenis_kelamin'] ?>"><?= $joinsiswa[0]['jenis_kelamin'] ?></option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>

                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" value="<?= $joinsiswa[0]['tgl_lahir'] ?>" name="tgl_lahir" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="exampleInputEmail1" value="<?= $joinsiswa[0]['alamat'] ?>" aria-describedby="emailHelp">

                        </div>


                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </form>

                </div>
            </div>
        </div>
    </div>


    <?= $this->endSection(); ?>