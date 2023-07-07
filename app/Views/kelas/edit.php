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
                    <form class="row g-3" action="/kelas/update/<?= $kelas['id_kelas'] ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Kelas</label>
                            <input type="text" class="form-control" value="<?= $kelas['nama_kelas'] ?>" name="nama_kelas" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Wali Kelas</label>
                            <input type="text" class="form-control" value="<?= $kelas['wali_kelas'] ?>" name="wali_kelas" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>


                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">NIP Wali Kelas</label>
                            <input type="text" value="<?= $kelas['nip'] ?>" class="form-control" name="nip" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>


    <?= $this->endSection(); ?>