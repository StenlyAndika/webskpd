<section class="section">
    <div class="container">
        <br>
        <h2 class="font-weight-bold mb-2" style="text-align: left;">RPJMD</h2>
        <?php foreach ($rpjmd as $row) : ?>
            <a class="font-weight-bold" href="<?= base_url('upload/rpjmd/') .$row['namafile'] ?>"><?= $row['judul'] ?></a>
        <?php endforeach; ?>
    </div>
</section>