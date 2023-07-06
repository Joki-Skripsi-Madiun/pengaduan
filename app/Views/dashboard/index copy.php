<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>
    <h4> Selamat Datang <?= session()->get('nama_user'); ?></h4>

    <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->




</main>
</div>
</div>
<?= $this->endSection(); ?>