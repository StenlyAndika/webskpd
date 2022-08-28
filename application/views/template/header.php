<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    <?php if(count($instansi)<=0) : ?>
        <link rel="icon" href="<?= base_url('./assets/img/tablogo.png') ?>">
        <title>Website Resmi Instansi Pemerintah</title>
    <?php else: ?>
        <title>Website Resmi <?= $instansi[0]['nama'] ?></title>
        <link rel="icon" href="<?= base_url('./upload/logo/').$instansi[0]['logo'] ?>">
    <?php endif; ?>

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
    <link rel="stylesheet" href="<?= base_url()?>assets/css/news-ticker.css">
</head>
<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">
    <nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0 fixed-top">
        <div class="container">
            <style>
                .acidsa {
                    font-family: "Mistral", sans-serif;
                    font-weight: 500;
                    color: #ff0000;
                    font-size: 32px;
                    position: relative;
                    top: 10px;
                    text-shadow: 0.5px 1px #000;
                    -webkit-text-stroke: 0.3px #fff !important;
                }
                .acidsb {
                    font-family: "Poppins", sans-serif;
                    font-weight: bold;
                    color: #00D4FF;
                    font-size: 20px;
                    position: relative;
                    text-shadow: 0.5px 1px #000;
                    -webkit-text-stroke: 0.08px #fff !important;
                }
            </style>
            <a class="navbar-brand" href="<?= base_url() ?>">
            <table>
                <tr>
                    <td rowspan="2">
                    <?php if(count($instansi)<=0) : ?>
                        <img src="<?= base_url('./assets/img/logo.png') ?>" alt="logo" width="50px">
                    <?php else: ?>
                        <img src="<?= base_url('./upload/logo/').$instansi[0]['logo'] ?>" alt="logo" width="50px">
                    <?php endif; ?>
                    </td>
                    <td>
                        <?php if(count($instansi)<=0) : ?>
                            <h3 class="acidsa" style="text-align: left;">Instansi Pemerintah</h3>
                            <h5 class="acidsb" style="text-align: left;">Pemerintah Kota Sungai Penuh</h5>
                        <?php else: ?>
                            <h3 class="acidsa" style="text-align: left;"><?= $instansi[0]['nama'] ?></h3>
                            <h5 class="acidsb" style="text-align: left;">Pemerintah Kota Sungai Penuh</h5>
                        <?php endif; ?>
                        </td>
                    </td>
                </tr>
            </table>
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
                        <li><a class="dropdown-item" href="<?= base_url() ?>beranda/foto">Foto</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>beranda/dokumen">Publikasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>beranda/pengumuman">Pengumuman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>auth">Masuk</a>
                </li>
            </ul>
        </div>
        <div class="wave" id="wave1" style="--i:1;"></div>
        <div class="wave" id="wave2" style="--i:2;"></div>
        <div class="wave" id="wave3" style="--i:3;"></div>
        <div class="wave" id="wave4" style="--i:4;"></div>
    </nav>
    <style>
    </style>
    <div class="row custom-container">
        <div class="section col-lg-12">
            <div class="ticker">
                <div class="title">
                    <h5>Berita Terkini</h5>
                </div>
                <div class="news">
                    <div class='marquee'>
                        <ul style="list-style-type: none;">
                            <li>
                            <?php foreach ($berita as $row) : ?>
                                <a href="<?= base_url() ?>beranda/detail/<?= $row['id'] ?>"><?= $row['judul'] ?>&emsp;&emsp;&emsp;&emsp;</a>
                            <?php endforeach; ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>