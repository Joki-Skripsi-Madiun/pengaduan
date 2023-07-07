<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!--  Header End -->
<?php if (user()->status == 1) { ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 col-xl-3">
        <div class="card overflow-hidden rounded-2">
          <div class="position-relative">
            <div style="max-height: 150px; overflow:hidden" class="card-img-top rounded-0">

              <img height="200px" src="<?= base_url(); ?>/img/siswa.jpeg">
            </div>
            <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-user"></i></a>
          </div>
          <div class="card-body pt-3 p-4  bg-secondary">
            <h6 class="fw-semibold fs-4">Siswa</h6>
            <div class="d-flex align-items-center justify-content-between">
              <h6 class="fw-semibold fs-4 mb-0"><?= $siswa; ?> <span class="ms-2 fw-normal fs-3">siswa</span></h6>

            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="card overflow-hidden rounded-2">
          <div class="position-relative">
            <div style="max-height: 150px; overflow:hidden" class="card-img-top rounded-0">

              <img height="200px" src="<?= base_url(); ?>/img/kelas.jpeg">
            </div>

            <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"> <i class="ti ti-book-2"></i></a>
          </div>
          <div class="card-body pt-3 p-4 bg-warning">
            <h6 class="fw-semibold fs-4">Kelas</h6>
            <div class="d-flex align-items-center justify-content-between">
              <h6 class="fw-semibold fs-4 mb-0"><?= $kelas; ?> <span class="ms-2 fw-normal fs-3">kelas</span></h6>

            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="card overflow-hidden rounded-2">
          <div class="position-relative">
            <div style="max-height: 150px; overflow:hidden" class="card-img-top rounded-0">

              <img height="200px" src="<?= base_url(); ?>/img/pelanggaran.jpeg">
            </div>

            <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-user-plus"></i></a>
          </div>
          <div class="card-body pt-3 p-4 bg-danger">
            <h6 class="fw-semibold fs-4">Pelanggaran</h6>
            <div class="d-flex align-items-center justify-content-between">
              <h6 class="fw-semibold fs-4 mb-0"><?= $pelanggaran; ?> <span class="ms-2 fw-normal fs-3">pelanggaran</span></h6>

            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="card overflow-hidden rounded-2">
          <div class="position-relative">
            <div style="max-height: 150px; overflow:hidden" class="card-img-top rounded-0">

              <img height="200px" src="<?= base_url(); ?>/img/prestasi.jpeg">
            </div>

            <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-device-analytics"></i></a>
          </div>
          <div class="card-body pt-3 p-4 bg-success">
            <h6 class="fw-semibold fs-4">Prestasi</h6>
            <div class="d-flex align-items-center justify-content-between">
              <h6 class="fw-semibold fs-4 mb-0"><?= $prestasi; ?> <span class="ms-2 fw-normal fs-3">prestasi</span></h6>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!--  Row 1 -->

    <div class="row">

      <div class="col-lg-6 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">Prestasi Terbaru</h5>
            <div class="table-responsive">
              <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">No</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Nama</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Nama Prestasi</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Tingkat</h6>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($prestasiAll as $p) : ?>
                    <tr>
                      <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-0"><?= $no++; ?></h6>
                      </td>
                      <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-1"><?= $p['nama_siswa']; ?></h6>
                        <span class="fw-normal"><?= $p['nama_kelas']; ?></span>
                      </td>
                      <td class="border-bottom-0">
                        <p class="mb-0 fw-normal"><?= $p['nama_prestasi']; ?></p>
                      </td>
                      <td class="border-bottom-0">
                        <div class="d-flex align-items-center gap-2">
                          <span class="badge bg-primary rounded-3 fw-semibold"><?= $p['tingkat_prestasi']; ?></span>
                        </div>
                      </td>

                    </tr>
                  <?php endforeach ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">Pelanggaran Terbaru</h5>
            <div class="table-responsive">
              <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">No</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Nama</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Jenis Pelanggaran</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Kategori Pelanggaran</h6>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($pelanggaranAll as $pe) : ?>
                    <tr>
                      <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-0"><?= $no++; ?></h6>
                      </td>
                      <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-1"><?= $pe['nama_siswa']; ?></h6>
                        <span class="fw-normal"><?= $pe['nama_kelas']; ?></span>
                      </td>
                      <td class="border-bottom-0">
                        <p class="mb-0 fw-normal"><?= $pe['nama_jenis']; ?></p>
                      </td>
                      <td class="border-bottom-0">
                        <div class="d-flex align-items-center gap-2">
                          <span class="badge bg-danger rounded-3 fw-semibold"><?= $pe['nama_kategori']; ?></span>
                        </div>
                      </td>

                    </tr>
                  <?php endforeach ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php }
if (user()->status == 2) { ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 col-xl-3">
          <div class="card overflow-hidden rounded-2">
            <div class="position-relative">
              <div style="max-height: 150px; overflow:hidden" class="card-img-top rounded-0">

                <img height="200px" src="<?= base_url(); ?>/img/siswa.jpeg">
              </div>
              <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-user"></i></a>
            </div>
            <div class="card-body pt-3 p-4  bg-secondary">
              <h6 class="fw-semibold fs-4">Siswa</h6>
              <div class="d-flex align-items-center justify-content-between">
                <h6 class="fw-semibold fs-4 mb-0"><?= $siswa; ?> <span class="ms-2 fw-normal fs-3">siswa</span></h6>

              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3">
          <div class="card overflow-hidden rounded-2">
            <div class="position-relative">
              <div style="max-height: 150px; overflow:hidden" class="card-img-top rounded-0">

                <img height="200px" src="<?= base_url(); ?>/img/pelanggaran.jpeg">
              </div>

              <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-user-plus"></i></a>
            </div>
            <div class="card-body pt-3 p-4 bg-danger">
              <h6 class="fw-semibold fs-4">Pelanggaran</h6>
              <div class="d-flex align-items-center justify-content-between">
                <h6 class="fw-semibold fs-4 mb-0"><?= $pelanggaran; ?> <span class="ms-2 fw-normal fs-3">pelanggaran</span></h6>

              </div>
            </div>
          </div>
        </div>

      </div>
      <!--  Row 1 -->

      <div class="row">


        <div class="col-lg-6 d-flex align-items-stretch">
          <div class="card w-100">
            <div class="card-body p-4">
              <h5 class="card-title fw-semibold mb-4">Pelanggaran Terbaru</h5>
              <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle">
                  <thead class="text-dark fs-4">
                    <tr>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">No</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Nama</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Jenis Pelanggaran</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Kategori Pelanggaran</h6>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1;
                    foreach ($pelanggaranAll as $pe) : ?>
                      <tr>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0"><?= $no++; ?></h6>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-1"><?= $pe['nama_siswa']; ?></h6>
                          <span class="fw-normal"><?= $pe['nama_kelas']; ?></span>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?= $pe['nama_jenis']; ?></p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-danger rounded-3 fw-semibold"><?= $pe['nama_kategori']; ?></span>
                          </div>
                        </td>

                      </tr>
                    <?php endforeach ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php }
  if (user()->status == 3) { ?>
      <div class="col-sm-6 col-xl-3">
        <div class="card overflow-hidden rounded-2">
          <div class="position-relative">
            <div style="max-height: 150px; overflow:hidden" class="card-img-top rounded-0">

              <img height="200px" src="<?= base_url(); ?>/img/siswa.jpeg">
            </div>
            <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-user"></i></a>
          </div>
          <div class="card-body pt-3 p-4  bg-secondary">
            <h6 class="fw-semibold fs-4">Siswa</h6>
            <div class="d-flex align-items-center justify-content-between">
              <h6 class="fw-semibold fs-4 mb-0"><?= $siswa; ?> <span class="ms-2 fw-normal fs-3">siswa</span></h6>

            </div>
          </div>
        </div>
      </div>


      <div class="col-sm-6 col-xl-3">
        <div class="card overflow-hidden rounded-2">
          <div class="position-relative">
            <div style="max-height: 150px; overflow:hidden" class="card-img-top rounded-0">

              <img height="200px" src="<?= base_url(); ?>/img/prestasi.jpeg">
            </div>

            <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-device-analytics"></i></a>
          </div>
          <div class="card-body pt-3 p-4">
            <h6 class="fw-semibold fs-4">Prestasi</h6>
            <div class="d-flex align-items-center justify-content-between">
              <h6 class="fw-semibold fs-4 mb-0"><?= $prestasi; ?> <span class="ms-2 fw-normal fs-3">prestasi</span></h6>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!--  Row 1 -->

    <div class="row">

      <div class="col-lg-6 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">Prestasi Terbaru</h5>
            <div class="table-responsive">
              <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">No</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Nama</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Nama Prestasi</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Tingkat</h6>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($prestasiAll as $p) : ?>
                    <tr>
                      <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-0"><?= $no++; ?></h6>
                      </td>
                      <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-1"><?= $p['nama_siswa']; ?></h6>
                        <span class="fw-normal"><?= $p['nama_kelas']; ?></span>
                      </td>
                      <td class="border-bottom-0">
                        <p class="mb-0 fw-normal"><?= $p['nama_prestasi']; ?></p>
                      </td>
                      <td class="border-bottom-0">
                        <div class="d-flex align-items-center gap-2">
                          <span class="badge bg-primary rounded-3 fw-semibold"><?= $p['tingkat_prestasi']; ?></span>
                        </div>
                      </td>

                    </tr>
                  <?php endforeach ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  <?php } ?>

  <?= $this->endSection(); ?>