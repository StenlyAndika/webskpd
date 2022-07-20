	<style>
        .card {
            border: none;
        }
        .row {
            justify-content: center;
        }
    </style>
    <section class="section gradient-banner" id="menu">
        <div class="shapes-container">
            <div class="shape" data-aos="fade-down-left" data-aos-duration="1500" data-aos-delay="100"></div>
            <div class="shape" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100"></div>
            <div class="shape" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="200"></div>
            <div class="shape" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"></div>
            <div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
            <div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
            <div class="shape" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300"></div>
            <div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="200"></div>
            <div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="100"></div>
            <div class="shape" data-aos="zoom-out" data-aos-duration="2000" data-aos-delay="500"></div>
            <div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="200"></div>
            <div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="100"></div>
            <div class="shape" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0"></div>
            <div class="shape" data-aos="fade-down" data-aos-duration="500" data-aos-delay="0"></div>
            <div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="100"></div>
            <div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="0"></div>
        </div>
		<style>
			p {
				color: #fff;
			}
			.klk {
				color: red;
				-webkit-text-stroke: 1px white;
			}
		</style>
		<div class="owl-carousel">
			<?php foreach ($berita as $row) : ?>
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-6 text-center order-2 order-md-1">
							<img class="img-fluid" src="<?= base_url('./upload/berita/').$row['gambar1'] ?>" alt="screenshot">
						</div>
						<div class="col-md-6 order-1 order-md-2 text-center text-md-left">
							<h2 class="font-weight-bold mb-4 klk"><?= $row['judul'] ?></h2>
							<h3 class="text-white font-weight-bold mb-1"><?= substr_replace($row['isi'], "...", 150); ?></h3>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
    </section>