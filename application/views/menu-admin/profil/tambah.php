<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong>INPUT DATA INSTANSI</strong>
					</div>
					<div class="card-body card-block">
						<?= form_open_multipart('profil/tambah'); ?>
							<div class="form-group">
								<label>Nama Instansi</label>
								<input type="text" class="form-control" name="nama" value="<?= set_value('nama'); ?>">
								<small class="form-text text-danger"><?= form_error('nama'); ?></small>
							</div>
							<div class="form-group">
								<button type="submit" name="simpan" class="btn btn-sm btn-primary">Simpan</button>
								<a class="btn btn-sm btn-success" href="<?= base_url() ?>profil">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>