<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pelanggaran & Prestasi</title>
    <link rel="shortcut icon" href="<?= base_url(); ?>/img/logosekolah.png" />
    <link rel="stylesheet" href="<?= base_url(); ?>/web/css/styles.min.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">

                                <a href="" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="<?= base_url(); ?>/img/logosekolah.png" width="80" alt="">
                                </a>
                                <h5 class="text-center">Halaman Register</h5>
                                <?php if (isset($validation)) : ?>
                                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                                <?php endif; ?>
                                <form class="user" action="/register/save" method="post">
                                    <input type="hidden" name="role" class="form-control form-control-user" id="floatingInput" value="3" placeholder="No Induk">
                                    <div class="mb-3">
                                        <label for="exampleInputtext1" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="floatingInput" value="<?= set_value('nama_user') ?>" name="nama_user" placeholder="Nama">

                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputtext1" class="form-label">Level</label>
                                        <select class="form-select px-3" id="floatingSelect" aria-label="Floating label select example" name="level">
                                            <option selected>Open this select menu</option>
                                            <option value="1">Admin</option>
                                            <option value="2">Guru BK</option>
                                            <option value="3">Kesiswaan</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputtext1" class="form-label">Username</label>
                                        <input type="text" name="username" class="form-control form-control-user" id="floatingInput" value="<?= set_value('username') ?>" placeholder="Username">

                                    </div>
                                    <div class="row my-3">
                                        <div class="col-md">
                                            <label for="exampleInputtext1" class="form-label">Password</label>
                                            <div class="form-floating mb-3">
                                                <input type="password" name="password" class="form-control form-control-user" id="floatingInput" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <label for="exampleInputtext1" class="form-label">Confirm Password</label>
                                            <div class="form-floating">
                                                <input type="password" name="confpassword" class="form-control form-control-user" id="floatingInput" placeholder="Confirm Password">
                                            </div>
                                        </div>
                                    </div>


                                    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Register</button>
                                </form>
                                <!-- <div class="text-center">
                                        <a class="small" href="/register">Create an Account!</a>
                                    </div> -->
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="fs-4 mb-0 fw-bold">Sudah Punya Akun?</p>
                                    <a class="text-primary fw-bold ms-2" href="/">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>



    <script src="<?= base_url(); ?>/web/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/web/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>