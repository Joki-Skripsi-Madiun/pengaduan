<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Akun</h1>
        </div>
        <div class="row">

            <!-- Area Form -->
            <div class="col-xl3 col-lg-10">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Data</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
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
                        <form class="row g-3" action="/setting/update/<?= $tb_users['id_user']; ?>" method="post" enctype="multipart/form-data">
                            <div class="col-12">
                                <label for="merk" class="form-label">Nama</label>
                                <input type="text" name="nama" value="<?= (old('nama')) ? old('nama') : $tb_users['nama']; ?>" class="form-control" id="inputAddress" placeholder="Nama">
                            </div>
                            <div class="col-12">
                                <label for="merk" class="form-label">Username</label>
                                <input type="text" name="username" value="<?= (old('username')) ? old('username') : $tb_users['username']; ?>" class="form-control" id="inputAddress" placeholder="Username">
                            </div>
                            <div class="col-12">
                                <label for="merk" class="form-label">No Induk</label>
                                <input type="text" name="no_induk" class="form-control form-control-user" id="floatingInput" value="<?= (old('no_induk')) ? old('no_induk') : $tb_users['no_induk']; ?>" placeholder="No Induk">
                            </div>
                            <div class="col-12">
                                <label for="merk" class="form-label">Kelas</label>
                                <input type="text" name="kelas" class="form-control form-control-user" id="floatingInput" value="<?= (old('kelas')) ? old('kelas') : $tb_users['kelas']; ?>" placeholder="Kelas">
                            </div>

                            <div class="col-12">
                                <label for="merk" class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control form-control-user" id="floatingInput" value="<?= (old('alamat')) ? old('alamat') : $tb_users['alamat']; ?>" placeholder="Alamat">

                            </div>
                            <div class="col-12">
                                <label for="merk" class="form-label">No HP</label>
                                <input type="text" name="no_hp" class="form-control form-control-user" id="floatingInput" value="<?= (old('no_hp')) ? old('no_hp') : $tb_users['no_hp']; ?>" placeholder="No HP">

                            </div>
                            <div class="col-12">
                                <label for="merk" class="form-label">Email</label>
                                <input type="text" name="email" class="form-control form-control-user" id="floatingInput" value="<?= (old('email')) ? old('email') : $tb_users['email']; ?>" placeholder="Email">

                            </div>


                            <div class="col-12">
                                <label for="merk" class="form-label">Role</label>
                                <select class="form-select px-3" style="border-radius: 10rem;  font-size: 0.8rem;" id="floatingSelect" aria-label="Floating label select example" name="role">
                                    <option selected value="<?= (old('role')) ? old('role') : $tb_users['role']; ?>"><?= $tb_users['role'] == 1 ? 'Admin' : ($tb_users['role'] == 2 ? 'Kepala Sekolah' : 'Siswa'); ?></option>
                                    <option value="1">Admin</option>
                                    <option value="2">Kepala Sekolah</option>
                                    <option value="3">Siswa</option>
                                </select>

                            </div>
                            <div class="col-12">
                                <label for="merk" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="inputAddress" value="<?= (old('password')) ? old('password') : $tb_users['password']; ?>" placeholder="Password">
                            </div>
                            <div class="col-12">
                                <label for="merk" class="form-label">Konfirmasi Password</label>
                                <input type="password" name="confpassword" class="form-control" value="<?= (old('password')) ? old('password') : $tb_users['password']; ?>" id="inputAddress" placeholder="Konfirmasi Password">
                            </div>

                            <div class="col-12 mt-5">
                                <button type="submit" class="btn btn-success"><i class="fas fa-plus"></i> Edit</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</div>
<?= $this->endSection(); ?>