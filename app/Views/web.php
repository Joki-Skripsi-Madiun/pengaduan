<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>E-Arsip</title>
    <link rel="shortcut icon" href="<?= base_url(); ?>/img/logo.png" />
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- owl carousel style -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css" />
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/web/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/web/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="<?= base_url(); ?>/web/css/responsive.css">
    <!-- fevicon -->
    <!-- <link rel="icon" href="images/fevicon.png" type="image/gif" /> -->
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/web/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="<?= base_url(); ?>/web/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/web/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <style type="text/css">
        html,
        body {
            height: 100%;
        }

        .bg-utama {
            background-image: url(/web/images/foto.jpg);
            background-size: cover;
            background-position: center;
            text-align: center;
            height: 100%;
            width: 100%;
            display: table;
            vertical-align: middle;

        }

        h1,
        p {
            color: white;
        }

        .konten-ditengah {
            display: table-cell;
            vertical-align: middle;
        }
    </style>
    <style>
        .background {
            background-color: green;
            height: 150px;
            padding: 10px;
        }

        .cards {
            margin-right: auto;
            margin-left: auto;
            width: 800px;
            box-shadow: 0 15px 25px rgba(129, 124, 124, 0.2);
            height: 300px;
            border-radius: 5px;
            backdrop-filter: blur(14px);
            background-color: rgba(255, 255, 255, 0.2);
            padding: 10px;
            text-align: center;
        }

        .cards img {
            height: 60%;
        }
    </style>
</head>

<body>
    <!--header section start -->
    <!-- <div class="header_section">
        <div class="container">
           <nav class="navbar navbar-dark bg-dark">
                <a class="logo" href="index.html"><img src="<?= base_url(); ?>/img/logo.png" height="px"></a>

            </nav> -->
    <!-- </div> -->
    <!--banner section start -->


    <!-- </div>  -->


    <div class="bg-utama  layout_padding">
        <div class="cards">
            <div class="container mt-5">
                <div class="row">
                    <!-- <div class="col-md-6"> -->
                    <!-- <div><img src="<?= base_url(); ?>/web/images/img-2.png" class="image_2"></div> -->
                    <!-- </div> -->
                    <?php foreach ($landing as $b) : ?>
                        <div class="col-md-12">
                            <!-- <a class="logo" href="index.html"><img src="<?= base_url(); ?>/img/logo.png" height="10px"></a> -->
                            <h1 class="about_taital"><?= $b['judul_landing']; ?></h1>
                            <p class="about_text"><?= $b['deskripsi_landing']; ?> </p>
                            <?php if (logged_in()) { ?>
                                <a class="btn btn-primary" href="<?= base_url(); ?>/dashboard">Masuk Admin Panel</a>
                            <?php } else { ?>
                                <a class="btn btn-primary" href="<?= base_url(); ?>/login">Login</a>
                            <?php } ?>
                            <!-- <div class="read_bt_1"><a href="<?= base_url(); ?>/login">Login</a></div> -->
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
    <!--about section end -->

    <!--footer section start -->
    <div class="footer_section layout_padding">
        <?php foreach ($landing as $b) : ?>
            <div class="container">
                <div class="address_main">
                    <div class="address_text"><a href="#"><img src="<?= base_url(); ?>/web/images/map-icon.png"><span class="padding_left_15"><?= $b['lokasi']; ?>
                            </span></a></div>
                    <div class="address_text"><a href="#"><img src="<?= base_url(); ?>/web/images/call-icon.png"><span class="padding_left_15"> <?= $b['tlp_sekolah']; ?>
                            </span></a></div>
                    <div class="address_text"><a href="#"><img src="<?= base_url(); ?>/web/images/mail-icon.png"><span class="padding_left_15"><?= $b['email_sekolah']; ?>
                            </span></a></div>
                </div>
                <div class="text-center">
                    <div class="col-12 mt-5">
                        <h4 class="link_text">social media</h4>
                        <div class="footer-menu">

                            <ul>
                                <li><a href="<?= $b['instagram']; ?>" class="text-white">Instagram</a></li>
                                <li><a href="<?= $b['youtube']; ?>" class="text-white">Youtube</a></li>
                                <!-- <li><a href="#"><img src="<?= base_url(); ?>/web/images/instagram.png"></a></li>
                                    <li><a href="https://youtube.com/@sman1jetisponorogo"><img src="<?= base_url(); ?>/web/images/youtub-icon.png"></a></li> -->
                            </ul>

                        </div>
                    </div>

                    <div class="footer_section_2">
                        <div class="row">
                            <div class="col-12">
                                <h4 class="link_text">Maps</h4>
                                <div class="footer_menu">
                                    <div class="container mb-4 map">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8870.83916229514!2d111.4838763933109!3d-7.946159404462913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e790b26216ff257%3A0xc3a6661b6d321001!2sSMA%20Negeri%201%20Jetis!5e0!3m2!1sen!2sid!4v1686664592443!5m2!1sen!2sid" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="footer_section_2">
                    <div class="row">




                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <!--client section end -->
    <!--copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">Copyright 2023 All Right Reserved By <a href="">E-arsip SMA Negeri 1 Jetis</a></p>
        </div>
    </div>
    <!--copyright section end -->
    <!-- Javascript files-->
    <script src="<?= base_url(); ?>/web/js/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/web/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>/web/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/web/js/jquery-3.0.0.min.js"></script>
    <script src="<?= base_url(); ?>/web/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="<?= base_url(); ?>/web/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?= base_url(); ?>/web/js/custom.js"></script>
    <!-- javascript -->
    <script src="<?= base_url(); ?>/web/js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script type="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2//2.0.0-beta.2.4/owl.carousel.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="<?= base_url(); ?>/web/assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="<?= base_url(); ?>/web/assets/js/vendor/popper.min.js"></script>
    <script src="<?= base_url(); ?>/web/dist/js/bootstrap.min.js"></script>
</body>

</html>