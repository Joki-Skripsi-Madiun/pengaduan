<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!--  Header End -->

<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Edit Jenis</h5>
                    <hr>
                    <form class="row g-3" action="/jenis/update/<?= $joinjenis[0]['id_jenis'] ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jenis</label>
                            <input type="text" class="form-control" value="<?= $joinjenis[0]['nama_jenis'] ?>" name="nama_jenis" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kategori</label>
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="id_kategori">
                                <option value="<?= $joinjenis[0]['id_kategori'] ?>" selected><?= $joinjenis[0]['nama_kategori'] ?></option>
                                <?php foreach ($kategori as $k) : ?>
                                    <option value="<?= $k['id_kategori'] ?>"><?= $k['nama_kategori'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Bobot</label>
                            <input type="text" class="form-control" value="<?= $joinjenis[0]['bobot'] ?>" name="bobot" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-8">

        </div>
    </div>


    <?= $this->endSection(); ?>