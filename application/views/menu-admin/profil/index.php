<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong>PROFIL INSTANSI</strong>
					</div>
					<div class="card-header">
						<?php if(count($profil)<=0) : ?>
							<a href="<?= base_url() ?>profil/tambah" class="btn btn-sm btn-success">Data Baru</a>
						<?php endif; ?>
					</div>
					<div class="card-body card-block">
						<?php if ( $this->session->flashdata('flash') ) : ?>
							<div class="row mt-3">
								<div class="col-md-6">
									<div class="alert alert-success alert-dismissible fade show" role="alert">
										Data <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
										<button type="button" class="close" data-dismiss="alert" aria-label="close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
								</div>
							</div>
						<?php endif; ?>
						<?php if(count($profil)!=0) : ?>
						<?php foreach($profil as $row) : ?>
						<form action="" method="POST" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="id" value="<?= $row['id'] ?>">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label>Nama Instansi</label>
										<input type="text" class="form-control" name="nama" value="<?= $row['nama'] ?>">
										<small class="form-text text-danger"><?= form_error('nama'); ?></small>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label>Alamat Email</label>
										<input type="text" class="form-control" name="email" value="<?= $row['email'] ?>">
										<small class="form-text text-danger"><?= form_error('email'); ?></small>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label>Logo Instansi</label>
										<input type="file" class="form-control" name="logo" class="form-control-file">
										<small class="form-text text-danger"><?= form_error('logo'); ?></small>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label>Nomor Whatsapp</label>
										<input type="text" class="form-control" name="wa" value="<?= $row['wa'] ?>">
										<small class="form-text text-danger"><?= form_error('wa'); ?></small>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label>Nama Kepala/Pimpinan</label>
										<input type="text" class="form-control" name="kepala" value="<?= $row['kepala'] ?>">
										<small class="form-text text-danger"><?= form_error('kepala'); ?></small>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label>Link Facebook</label>
										<input type="text" class="form-control" name="fb" value="<?= $row['fb'] ?>">
										<small class="form-text text-danger"><?= form_error('fb'); ?></small>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label>Foto Kepala/Pimpinan</label>
										<input type="file" class="form-control" name="fotokepala" class="form-control-file">
										<small class="form-text text-danger"><?= form_error('fotokepala'); ?></small>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label>Link Twitter</label>
										<input type="text" class="form-control" name="tw" value="<?= $row['tw'] ?>">
										<small class="form-text text-danger"><?= form_error('tw'); ?></small>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
								<div class="form-group">
										<label>Alamat Instansi</label>
										<input type="text" class="form-control" name="alamat" value="<?= $row['alamat'] ?>">
										<small class="form-text text-danger"><?= form_error('alamat'); ?></small>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label>Link Instagram</label>
										<input type="text" class="form-control" name="ig" value="<?= $row['ig'] ?>">
										<small class="form-text text-danger"><?= form_error('ig'); ?></small>
									</div>
								</div>
							</div>
							<div class="form-group">
								<button type="submit" name="simpan" class="btn btn-sm btn-primary">Simpan</button>
								<a class="btn btn-sm btn-success" href="<?= base_url() ?>profil">Kembali</a>
							</div>
						</form>
						<?php endforeach; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
