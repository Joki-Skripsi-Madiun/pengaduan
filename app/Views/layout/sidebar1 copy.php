<header class="navbar navbar-light sticky-top bg-light flex-md-nowrap p-0 shadow">

    <a class="navbar-brand bg-light col-md-3 col-lg-2 me-0 px-3" href=""><img src="<?= base_url(); ?>/img/logo.png" height="30px">
        <big> E-arsip Admin</big></a>
    <left>
        <big>Halaman Admin</big>
    </left>


    <a class="nav-link px-3" href="<?= base_url(); ?>/logout">Sign out</a>
    </div>

</header>
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= base_url(); ?>/dashboard">
                            <span data-feather="home"></span>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>/setting/<?= session()->get('id_user'); ?>">
                            <span data-feather="user"></span>
                            Profil
                        </a>
                    </li>
                    <li  class="nav-item">
                    <h6>Master</h6>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>/surat-masuk">
                            <span data-feather="download"></span>
                            Surat Masuk
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>/surat-keluar">
                            <span data-feather="share"></span>
                            Surat Keluar
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>/jenis">
                            <span data-feather="plus-circle"></span>
                            Jenis
                        </a>
                        </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>/pengajuan">
                            <span data-feather="bar-chart-2"></span>
                            Pengajuan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>/user">
                            <span data-feather="users"></span>
                            Data Pengguna
                        </a>
                    </li>

                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <!-- <span>Saved reports</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Current month
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Last quarter
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Social engagement
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Year-end sale
                            </a>
                        </li> -->
                    </ul>
            </div>
        </nav>