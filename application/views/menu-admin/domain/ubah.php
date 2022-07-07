<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong>UPDATE DOMAIN DAN SUB DOMAIN SOPD KOTA SUNGAI PENUH</strong>
					</div>
					<div class="card-body card-block">
						<form action="" method="POST" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="id" value="<?= $sopd['id'] ?>">
							<div class="form-group">
								<label>Nama SOPD</label>
								<input type="text" class="form-control" name="nama" value="<?= $sopd['nama'] ?>">
								<small class="form-text text-danger"><?= form_error('nama'); ?></small>
							</div>
                            <div class="form-group">
								<label>Domain</label>
								<input type="text" class="form-control" name="domain" value="<?= $sopd['domain'] ?>">
								<small class="form-text text-danger"><?= form_error('domain'); ?></small>
							</div>
							<div class="form-group">
								<button type="submit" name="simpan" class="btn btn-sm btn-primary">Submit</button>
								<a class="btn btn-sm btn-success" href="<?= base_url() ?>domain">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>