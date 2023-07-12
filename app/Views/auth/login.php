<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?= lang('Auth.loginTitle') ?></title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>/img/logosekolah.png" />
    <link rel=" stylesheet" href="<?= base_url(); ?>/web/css/styles.min.css" />
</head>

<!--  Body Wrapper -->
<div class="page-wrapper bg-primary" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
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

                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4"><?= lang('Auth.loginTitle') ?></h1>
                            </div>
                            <?= view('Myth\Auth\Views\_message_block') ?>
                            <form action="<?= route_to('login') ?>" class="user" method="post">
                                <?= csrf_field() ?>

                                <?php if ($config->validFields === ['email']) : ?>
                                    <div class="form-group">

                                        <input type="email" class="form-control form-control-user <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
                                        <div class="invalid-feedback">
                                            <?= session('errors.login') ?>
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <div class="mb-3">
                                        <label for="exampleInputInput" class="form-label">Username</label>
                                        <input type="text" class="form-control form-control-user <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                                        <div class="invalid-feedback">
                                            <?= session('errors.login') ?>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <div class="mb-3">
                                    <label for="exampleInputInput" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
                                    <div class="invalid-feedback">
                                        <?= session('errors.password') ?>
                                    </div>
                                </div>

                                <?php if ($config->allowRemembering) : ?>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                            <label class="custom-control-label" for="customCheck"><?= lang('Auth.rememberMe') ?></label>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2"><?= lang('Auth.loginAction') ?></button>

                            </form>
                            <hr>


                            <?php if ($config->activeResetter) : ?>
                                <div class="text-center">
                                    <p><a class="small" href="<?= route_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a></p>
                                </div>
                            <?php endif; ?>
                            <div class="text-center">
                                <a href="/" class="btn btn-primary text-white">Kembali Halaman Utama</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url(); ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url(); ?>/assets/js/sb-admin-2.min.js"></script>

</body>

</html>