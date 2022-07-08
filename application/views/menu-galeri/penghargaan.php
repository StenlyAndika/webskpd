<section class="service section">
    <div class="container">
        <br>
        <h2 class="font-weight-bold mb-2" style="text-align: left;">Penghargaan</h2>
        <div class="table-responsive">
            <?php foreach ($penghargaan as $row) : ?>
                <embed type="application/pdf" src="<?= base_url('upload/penghargaan/') .$row['namafile'] ?>" width="940" height="780"></embed>
            <?php endforeach; ?>
        </div>
    </div>
</section>