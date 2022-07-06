<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- PLUGINS CSS STYLE -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables/datatables.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datepicker/css/bootstrap-datepicker.css">
    
    <!-- Custom Style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/template-style.css">
</head>
<body>
    <div class="nav-bar">
        <h1 class="Logo">
            <a class="navbar-brand" href="<?= base_url() ?>"><img style=" width: 220px;" src="<?= base_url() ?>img/logo-header.png"></a>
        </h1>
        <ul class="nav">
            <li class="list active">
                <a href="#">
                    <span class="icon"><i class="fa-solid fa-house"></i></span>
                    <span class="title">Home</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                    <span class="icon"><i class="fa-solid fa-hospital"></i></span>
                    <span class="title">Data Puskesmas</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                    <span class="icon"><i class="fa-solid fa-people-roof"></i></span>
                    <span class="title">Data Ruangan</span>
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