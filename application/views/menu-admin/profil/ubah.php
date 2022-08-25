<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong>UPDATE PROFIL INSTANSI</strong>
					</div>
					<div class="card-body card-block">
						<form action="" method="POST" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="id" value="<?= $profil['id'] ?>">
							<div class="form-group">
								<label>Nama Instansi</label>
								<input type="text" class="form-control" name="nama" value="<?= $profil['nama'] ?>">
								<small class="form-text text-danger"><?= form_error('nama'); ?></small>
							</div>
							<div class="form-group">
								<label>Logo Instansi</label>
								<input type="file" class="form-control" name="logo" class="form-control-file">
								<small class="form-text text-danger"><?= form_error('logo'); ?></small>
							</div>
							<div class="form-group">
								<label>Link Facebook</label>
								<input type="text" class="form-control" name="fb" value="<?= $profil['fb'] ?>">
								<small class="form-text text-danger"><?= form_error('fb'); ?></small>
							</div>
							<div class="form-group">
								<label>Link Twitter</label>
								<input type="text" class="form-control" name="tw" value="<?= $profil['tw'] ?>">
								<small class="form-text text-danger"><?= form_error('tw'); ?></small>
							</div>
							<div class="form-group">
								<label>Link Instagram</label>
								<input type="text" class="form-control" name="ig" value="<?= $profil['ig'] ?>">
								<small class="form-text text-danger"><?= form_error('ig'); ?></small>
							</div>
							<div class="form-group">
								<button type="submit" name="simpan" class="btn btn-sm btn-primary">Simpan</button>
								<a class="btn btn-sm btn-success" href="<?= base_url() ?>pengumuman">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>