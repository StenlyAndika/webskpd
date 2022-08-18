<section class="section">
    <div class="container">
        <br>
        <h2 class="font-weight-bold mb-2" style="text-align: left;">Galeri Foto 
        <?php if(count($instansi)<=0) : ?>
            Instansi
        <?php else: ?>
            <?= $instansi[0]['nama'] ?>
        <?php endif; ?>
        </h2>
        <div class="row">
            <?php foreach ($foto as $row) : ?>
                <div class="col-lg-4">
                    <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal1" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail w-100" src="<?= base_url('./upload/foto/') .$row['tgl']."/".$row['namafile'] ?>"/>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>