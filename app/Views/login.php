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
                                <!-- <a href="/index.html" class="text-nowrap logo-img">
                 <img src="<?= base_url(); ?>/img/logosekolah.png" width="80" alt="" />

             </a> -->
                                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="<?= base_url(); ?>/img/logosekolah.png" width="80" alt="">
                                </a>
                                <h5 class="text-center">Halaman Login</h5>
                                <?php if (session()->getFlashdata('msg')) : ?>
                                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                                <?php endif; ?>
                                <form class="user" action="/login/auth" method="post">
                                    <div class="mb-3">
                                        <label for="exampleInputInput" class="form-label">Username</label>
                                        <input type="text" class="form-control" name="username" value="<?= set_value('username') ?>" id="exampleInputInput" aria-describedby="Username">
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" name="password" value="<?= set_value('password') ?>" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <!-- <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                                            <label class="form-check-label text-dark" for="flexCheckChecked">
                                                Remeber this Device
                                            </label>
                                        </div>
                                        <a class="text-primary fw-bold" href="./index.html">Forgot Password ?</a>
                                    </div> -->
                                    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Login</button>
                                </form>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="fs-4 mb-0 fw-bold">Belum Punya Akun?</p>
                                    <a class="text-primary fw-bold ms-2" href="/register">Create an account</a>
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