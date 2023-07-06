<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        <?= lang('Auth.forgotPassword') ?>
    </title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>/img/logosekolah.png" />
    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

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
                                <h1 class="h4 text-gray-900 mb-4"><?= lang('Auth.forgotPassword') ?></h1>
                            </div>
                            <?= view('Myth\Auth\Views\_message_block') ?>

                            <p class="mb-4"><?= lang('Auth.enterEmailForInstructions') ?></p>

                            <form action="<?= route_to('forgot') ?>" class="user" method="post">
                                <?= csrf_field() ?>

                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>">
                                    <div class="invalid-feedback">
                                        <?= session('errors.email') ?>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block"><?= lang('Auth.sendInstructions') ?></button>

                            </form>
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