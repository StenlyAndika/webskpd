<section class="section">
    <div class="container">
        <style>
            .xzx {
                color: black;
                font-size: 14px;
            }
        </style>
        <br>
        <h2 class="font-weight-bold mb-2" style="text-align: left;">Perbankan Dan Layanan Keuangan</h2>
        <p class="xzx mb-2">Di Kota Sungai Penuh terdapat beberapa bank, diantaranya :</p>
        <?php $no=0; foreach ($keuangan as $row) : $no++; ?>
            <p class="xzx"><?= $no.". ".$row ?></p>
        <?php endforeach; ?>
    </div>
</section>