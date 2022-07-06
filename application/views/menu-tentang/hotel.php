<section class="section">
    <div class="container">
        <style>
            .xzx {
                color: black;
                font-size: 14px;
            }
        </style>
        <br>
        <h2 class="font-weight-bold mb-2" style="text-align: left;">Hotel</h2>
        <?php $no=0; foreach ($hotel as $row) : $no++; ?>
            <p class="xzx"><?= $no.". ".$row ?></p>
        <?php endforeach; ?>
    </div>
</section>