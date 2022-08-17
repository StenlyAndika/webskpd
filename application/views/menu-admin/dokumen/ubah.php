<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong>UPDATE DATA ANGGARAN</strong>
					</div>
					<div class="card-body card-block">
						<form action="" method="POST" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="id" value="<?= $sopd['id'] ?>">
							<div class="form-group">
								<label>Tahun</label>
								<input type="text" class="form-control" name="tahun" value="<?= $sopd['tahun'] ?>">
								<small class="form-text text-danger"><?= form_error('tahun'); ?></small>
							</div>
							<div class="form-group">
								<label>Keterangan</label>
								<input type="text" class="form-control" name="keterangan" value="<?= $sopd['keterangan'] ?>">
								<small class="form-text text-danger"><?= form_error('keterangan'); ?></small>
							</div>
                            <div class="form-group">
								<label>File</label>
								<input type="file" name="namafile" class="form-control-file">
								<small class="form-text text-danger"><?= form_error('namafile'); ?></small>
							</div>
							<div class="form-group">
								<button type="submit" name="simpan" class="btn btn-sm btn-primary">Submit</button>
								<a class="btn btn-sm btn-success" href="<?= base_url() ?>anggaran">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>