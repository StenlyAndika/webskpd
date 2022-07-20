<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong>TAMBAH BERITA</strong>
					</div>
					<div class="card-body card-block">
						<?= form_open_multipart('berita/tambah'); ?>
							<div class="form-group">
								<label>Judul</label>
								<input type="text" class="form-control" name="judul" value="<?= set_value('judul'); ?>">
								<small class="form-text text-danger"><?= form_error('judul'); ?></small>
							</div>
							<div class="form-group">
								<label>Isi</label>
								<textarea class="form-control" name="isi" id="isi" rows="8" cols="80">
									<?= set_value('isi'); ?>
								</textarea>
								<small class="form-text text-danger"><?= form_error('judul'); ?></small>
							</div>
                            <div class="form-group">
								<label>Gambar 1</label>
								<input type="file" class="form-control" name="gambar1" class="form-control-file">
								<small class="form-text text-danger"><?= form_error('gambar1'); ?></small>
							</div>
							<div class="form-group">
								<label>Gambar 2</label>
								<input type="file" class="form-control" name="gambar2" class="form-control-file">
								<small class="form-text text-danger"><?= form_error('gambar2'); ?></small>
							</div>
							<div class="form-group">
								<label>Gambar 3</label>
								<input type="file" class="form-control" name="gambar3" class="form-control-file">
								<small class="form-text text-danger"><?= form_error('gambar3'); ?></small>
							</div>
							<div class="form-group">
								<button type="submit" name="simpan" class="btn btn-sm btn-primary">Submit</button>
								<a class="btn btn-sm btn-success" href="<?= base_url() ?>berita">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>