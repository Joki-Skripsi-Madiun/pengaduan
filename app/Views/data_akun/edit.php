<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!--  Header End -->

<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Edit User</h5>
                    <hr>
                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <h5>Periksa Entrian Form</h5>
                            </hr />
                            <?php echo session()->getFlashdata('error'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <form class="row g-3" action="/data-akun/update/<?= $dataakun['id']; ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id_akun" value="<?= (old('id')) ? old('id') : $dataakun['id']; ?>">
                        <input type="hidden" name="passwordLama" value="<?= (old('password_hash')) ? old('password_hash') : $dataakun['password_hash']; ?>">
                        <input type="hidden" name="fotoLama" value="<?= (old('foto')) ? old('foto') : $dataakun['foto']; ?>">

                        <div class="col-12">
                            <label for="merk" class="form-label">Email</label>
                            <input type="text" name="email" value="<?= (old('email')) ? old('email') : $dataakun['email']; ?>" class="form-control" id="inputAddress" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <label for="merk" class="form-label">Nama</label>
                            <input type="text" name="fullname" value="<?= (old('fullname')) ? old('fullname') : $dataakun['fullname']; ?>" class="form-control" id="inputAddress" placeholder="Nama">
                        </div>
                        <div class="col-12">
                            <label for="merk" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-select" aria-label="Default select example">
                                <option value="<?= (old('jenis_kelamin')) ? old('jenis_kelamin') : $dataakun['jenis_kelamin']; ?>" selected><?= $dataakun['jenis_kelamin'] == 1 ? 'Laki-Laki' : 'Perempuan' ?></option>
                                <option value="1">Laki-Laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"><?= (old('alamat')) ? old('alamat') : $dataakun['alamat']; ?></textarea>
                        </div>
                        <div class="col-12">
                            <label for="merk" class="form-label">Username</label>
                            <input type="text" name="username" value="<?= (old('username')) ? old('username') : $dataakun['username']; ?>" class="form-control" id="inputAddress" placeholder="Username">
                        </div>
                        <div class="col-12">
                            <label for="merk" class="form-label">Password</label>
                            <input type="password" name="password_hash" class="form-control" id="inputAddress" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <label for="merk" class="form-label">Konfirmasi Password</label>
                            <input type="password" name="confpassword" class="form-control" id="inputAddress" placeholder="Konfirmasi Password">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="formFileSm" class="form-label">Foto</label>
                            <input class="form-control form-control-sm" name="foto" id="formFileSm" type="file">
                            <span>*ukuran foto 200px x 200px</span>
                        </div>

                        <div class="col-12 mt-5">
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a href="/data-akun" class="btn btn-warning float-right">Kembali</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-8">

        </div>
    </div>


    <?= $this->endSection(); ?>