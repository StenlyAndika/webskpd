<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong>GALERI FOTO</strong>
					</div>
					<div class="card-header">
                        <a href="<?= base_url() ?>foto/tambah" class="btn btn-sm btn-success">Data Baru</a>
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
						<form>
							<div class="table-responsive asd">
								<table id="datatable" class="table-bordered cxz" width="99%">
									<thead>
										<tr>
											<th style="text-align: center;">No</th>
											<th style="text-align: center;">Tanggal Upload</th>
											<th style="text-align: center;">Nama Kegiatan</th>
											<th style="text-align: center;">Nama File</th>
											<th style="text-align: center;">Opsi</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 0; foreach ($foto as $row) : $no++; ?>
										<tr>
											<td style="text-align: center;"><?= $no; ?></td>
											<td style="text-align: left;"><?= $row['tgl']; ?></td>
											<td style="text-align: left;"><?= $row['kegiatan']; ?></td>
											<td style="text-align: left;"><?= $row['namafile']; ?></td>
											<td>
												<!-- <a href="<?= base_url() ?>foto/ubah/<?= $row['id'] ?>" class="btn btn-sm btn-primary">Ubah</a> -->
												<a href="<?= base_url() ?>foto/hapus/<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus data ini?');">Hapus</a>
											</td>
										</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
