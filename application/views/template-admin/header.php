<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Website Resmi Pemerintah Kota Sungai Penuh</title>

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url() ?>assets/img/tablogo.png">

    <!-- PLUGINS CSS STYLE -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables/datatables.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datepicker/css/bootstrap-datepicker.css">
    
    <!-- Custom Style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/template-style.css">
</head>
<body>
    <div class="nav-bar">
        <h1 class="">
            <a href="<?= base_url() ?>"><img style=" width: 220px;" src="<?= base_url() ?>assets/img/logo.png"></a>
        </h1>
        <ul class="nav">
            <li class="list active">
                <a href="<?= base_url() ?>berita">
                    <span class="icon"><i class="fa-solid fa-newspaper"></i></span>
                    <span class="title">Berita</span>
                </a>
            </li>
            <li class="list">
                <a href="<?= base_url() ?>pengumuman">
                    <span class="icon"><i class="fa-solid fa-bullhorn"></i></span>
                    <span class="title">Pengumuman</span>
                </a>
            </li>
            <li class="list">
                <a href="<?= base_url() ?>anggaran">
                    <span class="icon"><i class="fa-solid fa-hand-holding-dollar"></i></span>
                    <span class="title">Transparasi Anggaran</span>
                </a>
            </li>
            <li class="list">
                <a href="<?= base_url() ?>rpjmd">
                    <span class="icon"><i class="fa-brands fa-accusoft"></i></span>
                    <span class="title">RPJMD</span>
                </a>
            </li>
            <li class="list">
                <a href="<?= base_url() ?>services">
                    <span class="icon"><i class="fa-solid fa-hands-asl-interpreting"></i></span>
                    <span class="title">Smart Services</span>
                </a>
            </li>
            <li class="list">
                <a href="<?= base_url() ?>domain">
                    <span class="icon"><i class="fa-solid fa-link"></i></span>
                    <span class="title">Domain SKPD</span>
                </a>
            </li>
            <li class="list">
                <a href="<?= base_url() ?>penghargaan">
                    <span class="icon"><i class="fa-solid fa-ribbon"></i></span>
                    <span class="title">Penghargaan</span>
                </a>
            </li>
            <li class="list">
                <a href="<?= base_url() ?>foto">
                    <span class="icon"><i class="fa-solid fa-camera-retro"></i></span>
                    <span class="title">Foto</span>
                </a>
            </li>
            <li class="list">
                <a href="<?= base_url() ?>video">
                    <span class="icon"><i class="fa-solid fa-video"></i></span>
                    <span class="title">Video</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                    <span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span>
                    <span class="title">Keluar</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="menu-bar">
		<div class="topbar">
			<div class="toggle">
				<i class="fa-solid fa-bars"></i>
			</div>
			<div class="menu-title">
                <h4>ADMIN AREA</h4>
			</div>
		</div>
	</div>
    <div class="main-content">