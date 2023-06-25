<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mb-4">Tambah</h5>
                        <hr>
                        <form class="row g-3" action="/edit/update/<?= $users['id_user'] ?>" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Akun</label>
                                <input type="text" value="<?= $users['nama_user'] ?>" class="form-control" name="nama_user" id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <input type="text" value="<?= $users['username'] ?>" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Password</label>
                                <input type="password" value="<?= $users['password'] ?>" class="form-control" name="password" id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputtext1" class="form-label">Level</label>
                                <select class="form-select px-3" id="floatingSelect" aria-label="Floating label select example" name="level">
                                    <option selected value="<?= $users['level'] ?>"><?= $users['level'] ?></option>
                                    <option value="1">Admin</option>
                                    <option value="2">Guru BK</option>
                                    <option value="3">Kesiswaan</option>
                                </select>
                            </div>



                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>