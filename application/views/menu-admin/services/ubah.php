<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong>UPDATE DATA SMART SERVICES</strong>
					</div>
					<div class="card-body card-block">
						<form action="" method="POST" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="id" value="<?= $services['id'] ?>">
							<div class="form-group">
								<label>Nama Layanan</label>
								<input type="text" class="form-control" name="nama" value="<?= $services['nama'] ?>">
								<small class="form-text text-danger"><?= form_error('nama'); ?></small>
							</div>
							<div class="form-group">
								<label>Keterangan</label>
								<input type="text" class="form-control" name="ket" value="<?= $services['ket'] ?>">
								<small class="form-text text-danger"><?= form_error('ket'); ?></small>
							</div>
                            <div class="form-group">
								<label>Link</label>
								<input type="text" class="form-control" name="link" value="<?= $services['link'] ?>">
								<small class="form-text text-danger"><?= form_error('link'); ?></small>
							</div>
							<div class="form-group">
								<button type="submit" name="simpan" class="btn btn-sm btn-primary">Submit</button>
								<a class="btn btn-sm btn-success" href="<?= base_url() ?>services">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>