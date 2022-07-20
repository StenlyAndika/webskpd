<section class="section testimonial" id="testimonial">
	<h2 class="font-weight-bold mb-4" style="text-align: center;">Berita dan Informasi Terkini</h2>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12">
				<style>
					.kntlz {
						width: 100%;
						height: 300px;
						object-fit: cover;
					}
					.zzzx {
						font-size: 18px;
						color: black;
					}
				</style>
				<div class="testimonial-slider">
					<?php foreach ($berita as $row) : ?>
                    <div class="item">
                        <div class="block shadow">
							<img src="<?= base_url('./upload/berita/').$row['gambar1'] ?>" class="kntlz">
							<h3 class="font-weight-bold">
                                <?= $row['judul'] ?>
							</h3>
							<p class="zzzx">
								<?= substr_replace($row['isi'], "...", 150); ?>
							</p>
							<br>
							<a href="" class="btn btn-sm btn-primary">Baca Selengkapnya</a>
						</div>
                    </div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>