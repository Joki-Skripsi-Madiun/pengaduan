<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pelanggaran & Prestasi</title>
  <link rel="shortcut icon" href="<?= base_url(); ?>/img/logosekolah.png" />
  <!-- Data Tables -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.2/b-2.3.4/b-html5-2.3.4/b-print-2.3.4/r-2.4.0/sb-1.4.0/sp-2.1.1/datatables.min.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>/web/css/styles.min.css" />
  <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet" />
  <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <?php if (user()->status == 1) { ?>
      <!-- Sidebar -->
      <?= $this->include('layout/sidebar1'); ?>
      <!-- End of Sidebar -->
    <?php } elseif (user()->status == 2) { ?>

      <!-- Sidebar -->
      <?= $this->include('layout/sidebar2'); ?>
      <!-- End of Sidebar -->
    <?php } elseif (user()->status == 3) { ?>

      <!-- Sidebar -->
      <?= $this->include('layout/sidebar3'); ?>
      <!-- End of Sidebar -->
    <?php } else { ?>

      <!-- Sidebar -->
      <?= $this->include('layout/sidebar'); ?>
      <!-- End of Sidebar -->
    <?php } ?>
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>

          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">

              <span class="me-5"><?= user()->username; ?></span>
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="<?= base_url(); ?>/img/<?= user()->foto; ?>" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="/setting/<?= user()->id; ?>" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="/logout" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>



      <!-- Begin Page Content -->
      <?= $this->rendersection('content'); ?>

      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->



    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    <div class="py-6 px-6 text-center">
      <p class="fs-4">Design and Developed by SMP N 2 NGLAMES </p>
    </div>
  </div>
  <!-- End of Content Wrapper -->


  <!-- Scroll to Top Button-->

  <?= $this->renderSection('div-modal'); ?>


  <script type="text/javascript">
    $(document).ready(function() {
      $('ul li').click(function() {
        $('li').removeClass("active");
        $(this).addClass("active");
      });
    });
  </script>

  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#data1').DataTable();
    });
  </script>

  <script src="<?= base_url(); ?>/web/libs/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url(); ?>/web/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>
  <script src="<?= base_url(); ?>/web/js/sidebarmenu.js"></script>
  <script src="<?= base_url(); ?>/web/js/app.min.js"></script>
  <script src="<?= base_url(); ?>/web/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="<?= base_url(); ?>/web/libs/simplebar/dist/simplebar.js"></script>
  <script src="<?= base_url(); ?>/web/js/dashboard.js"></script>

  <?= $this->renderSection('script-js'); ?>

</body>

</html>