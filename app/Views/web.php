<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Pelanggaran & Prestasi</title>
    <link rel="shortcut icon" href="<?= base_url(); ?>/img/logosekolah.png" />
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/web/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/web/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/web/css/responsive.css">
    <!-- fevicon -->
    <!-- <link rel="icon" href="<?= base_url(); ?>/assets/web/images/fevicon.png" type="image/gif" /> -->
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/web/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/web/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/web/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>

<body>
    <!-- header top section start -->
    <?php foreach ($landing as $u) : ?>
        <div class="header_top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="call_text"><a href="#"><img src="<?= base_url(); ?>/assets/web/images/map-icon.png"><span class="call_text_left"><?= $u['alamat_sekolah'] ?></span></a></div>
                    </div>
                    <div class="col-sm-4">
                        <div class="call_text"><a href="#"><img src="<?= base_url(); ?>/assets/web/images/call-icon.png"><span class="call_text_left"><?= $u['tlp_sekolah'] ?></span></a></div>
                    </div>
                    <div class="col-sm-4">
                        <div class="call_text"><a href="#"><img src="<?= base_url(); ?>/assets/web/images/mail-icon.png"><span class="call_text_left"><?= $u['website_sekolah'] ?></span></a></div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>
    <!-- header top section end -->
    <!-- header section start -->
    <!-- header section end -->
    <!-- banner section start -->
    <div class="banner_section layout_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-7">
                    <div class="banner_img ms-5"><img width="800px" src="<?= base_url(); ?>/assets/web/images/depan.jpg"></div>
                </div>
                <?php foreach ($landing as $u) : ?>
                    <div class="col-sm-5">
                        <div class="d-flex justify-content-center"><img width="100px" src="<?= base_url(); ?>/img/logosekolah.png"></a></div>
                        <h6 class="clever_text text-center"><?= $u['judul_setting'] ?></h6>
                        <div class="read_bt_2 d-flex justify-content-center"><a href="<?= base_url(); ?>/login">Login</a></div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <!-- banner section end -->
    <!-- contact section start -->
    <div class="contact_section layout_padding">
        <div class="container">
            <h1 class="contact_text">About Us</h1>
            <div class="contact_section_2">
                <div class="row">
                    <div class="col-md-6">

                        <?php foreach ($landing as $u) : ?>
                            <h1 class="data_text"><?= $u['judul_setting'] ?></h1>
                            <p class="lorem_text"><?= $u['keterangan_setting'] ?></p>
                        <?php endforeach ?>

                    </div>
                    <div class="col-md-6">
                        <div class="map">
                            <div class="map-responsive">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.8057370488687!2d111.57160307406436!3d-7.596110175065113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79bf2ed5e312d9%3A0x7bedbab69e35988!2sSMPN%202%20Nglames!5e0!3m2!1sen!2sid!4v1687527747233!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer section start -->
        <!-- footer section end -->
    </div>
    <!-- contact section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright">Design and Developed by SMP N 2 NGLAMES</p>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="<?= base_url(); ?>/assets/web/js/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/assets/web/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>/assets/web/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/assets/web/js/jquery-3.0.0.min.js"></script>
    <script src="<?= base_url(); ?>/assets/web/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="<?= base_url(); ?>/assets/web/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?= base_url(); ?>/assets/web/js/custom.js"></script>
    <!-- javascript -->
    <script src="<?= base_url(); ?>/assets/web/js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>