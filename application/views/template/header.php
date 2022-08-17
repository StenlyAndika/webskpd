<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Website Resmi Pemerintah Kota Sungai Penuh</title>
    
    <!-- Favicon -->
    <link rel="icon" href="<?= base_url() ?>assets/img/tablogo.png">

    <!-- PLUGINS CSS STYLE -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/slick/slick.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/slick/slick-theme.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/aos/aos.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables/datatables.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datepicker/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/owl-carousel/assets/owl.carousel.min.css">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/style.css">
</head>
<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">
    <nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0 fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">
                <img src="<?= base_url(); ?>/assets/img/logo.png" alt="logo" width="350px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Profil Lembaga</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= base_url() ?>beranda/sejarah">Sejarah</a></li>
                        <li><a class="dropdown-item" href="<?= base_url() ?>beranda/visimisi">Visi & Misi</a></li>
                        <li><a class="dropdown-item" href="<?= base_url() ?>beranda/struktur">Struktur Organisasi</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Galeri</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= base_url() ?>galeri/video">Video</a></li>
                        <li><a class="dropdown-item" href="<?= base_url() ?>galeri/penghargaan">Penghargaan</a></li>
                        <li><a class="dropdown-item" href="<?= base_url() ?>galeri/foto">Foto</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Informasi Publik</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= base_url() ?>beranda/dokumen">Dokumen Publik</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>beranda/pengumuman">Pengumuman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Masuk</a>
                </li>
            </ul>
        </div>
        <div class="wave" id="wave1" style="--i:1;"></div>
        <div class="wave" id="wave2" style="--i:2;"></div>
        <div class="wave" id="wave3" style="--i:3;"></div>
        <div class="wave" id="wave4" style="--i:4;"></div>
    </nav>