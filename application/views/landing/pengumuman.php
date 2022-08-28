<section class="col-md-9 section">
    <div class="container">
        <br>
        <h2 class="font-weight-bold mb-2" style="text-align: left;">Pengumuman</h2>
        <div class="table-responsive">
            <?php foreach ($pengumuman as $row) : ?>
                <p class="font-weight-bold mb-2" style="text-align: left; color: black;"><?= $row['judul'] ?></p>
                <embed type="application/pdf" src="<?= base_url('upload/pengumuman/') .$row['namafile'] ?>" width="940" height="780"></embed>
            <?php endforeach; ?>
        </div>
    </div>
</section>