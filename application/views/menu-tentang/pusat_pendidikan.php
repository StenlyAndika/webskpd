<section class="section">
    <div class="container">
        <style>
            .xzx {
                color: black;
                font-size: 14px;
            }
        </style>
        <br>
        <h2 class="font-weight-bold mb-2" style="text-align: left;">Pusat Pendidikan</h2>
        <?php $no=0; foreach ($pendidikan as $row) : $no++; ?>
            <p class="xzx"><?= $no.". ".$row ?></p>
        <?php endforeach; ?>
    </div>
</section>