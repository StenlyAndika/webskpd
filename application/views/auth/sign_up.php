<style>
    .aac {
        border-radius: 10px;
        position: relative;
    }
</style>
<section class="user-login section">
    
	<div class="container aac">
		<div class="row">
			<div class="col-12">
				<div class="block">
					<div class="image align-self-center"><img class="img-fluid" src="<?= base_url() ?>assets/img/tablogo.png"></div>
					<div class="content text-center">
						<div class="title-text">
							<h3>Buat akun baru</h3>
						</div>
						<?= form_open_multipart('auth/daftar'); ?>
							<input class="form-control main" type="nama" name="nama" placeholder="Nama" required>
							<input class="form-control main" type="username" name="username" placeholder="Username" required>
							<input class="form-control main" type="password" name="password" placeholder="Password" required>
							<button type="submit" class="btn btn-main-md">Daftar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>