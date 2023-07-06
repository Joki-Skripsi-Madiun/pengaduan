<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!--  Header End -->

<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Edit Kategori</h5>
                    <hr>
                    <form class="row g-3" action="/kategori/update/<?= $kategori['id_kategori'] ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kategori</label>
                            <input type="text" class="form-control" value="<?= $kategori['nama_kategori'] ?>" name="nama_kategori" id="exampleInputEmail1" aria-describedby="emailHelp">

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