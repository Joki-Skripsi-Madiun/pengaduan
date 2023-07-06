<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= lang('Auth.register') ?></title>
    <link rel="shortcut icon" href="<?= base_url(); ?>/img/logosekolah.png" />
    <link rel="stylesheet" href="<?= base_url(); ?>/web/css/styles.min.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper bg-primary" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">

                                <a href="" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="<?= base_url(); ?>/img/logosekolah.png" width="80" alt="">
                                </a>
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4"><?= lang('Auth.register') ?></h1>
                                </div>

                                <?= view('Myth\Auth\Views\_message_block') ?>

                                <form action="<?= route_to('register') ?>" class="user" method="post">
                                    <?= csrf_field() ?>

                                    <div class="row my-3">
                                        <div class="col-md">
                                            <label for="exampleInputtext1" class="form-label">Email</label>

                                            <input type="email" class="form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                                            <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>

                                        </div>
                                    </div>

                                    <div class="row my-3">
                                        <div class="col-md">
                                            <label for="exampleInputtext1" class="form-label">Nama Lengkap</label>
                                            <input type="text" class="form-control form-control-user <?php if (session('errors.fullname')) : ?>is-invalid<?php endif ?>" name="fullname" placeholder="Nama Lengkap" value="<?= old('fullname') ?>">
                                            <input type="hidden" class="form-control form-control-user" name="status" value="2">
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-md">
                                            <label for="exampleInputtext1" class="form-label">Nama Pengguna</label>
                                            <input type="text" class="form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                                            <input type="hidden" class="form-control form-control-user" value="users">
                                        </div>
                                    </div>

                                    <div class="row my-3">
                                        <div class="col-md">
                                            <label for="exampleInputtext1" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                                        </div>

                                        <div class="col-md">
                                            <label for="exampleInputtext1" class="form-label">Ulangi Kata Sandi</label>
                                            <input type="password" name="pass_confirm" class="form-control form-control-user <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                                        </div>
                                    </div>

                                    <br>

                                    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2"><?= lang('Auth.register') ?></button>

                                </form>
                                <hr>
                                <div class="text-center">
                                    <p><?= lang('Auth.alreadyRegistered') ?> <a class="small" href="<?= route_to('login') ?>"><?= lang('Auth.signIn') ?></a></p>
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