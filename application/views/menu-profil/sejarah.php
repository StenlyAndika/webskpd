<style>
    .aac {
        margin-left: 25px;
        margin-right: 25px;
        border-radius: 10px;
        background: #fff;
        position: relative;
    }
</style>
<section class="col-md-9 section bg-white" id="lambang">
    <div class="aac">
        <br>
        <h2 class="font-weight-bold mb-4" style="text-align: center;">Sejarah<br>
        <?php if(count($instansi)<=0) : ?>
            Instansi
        <?php else: ?>
            <?= $instansi[0]['nama'] ?>
        <?php endif; ?>
        </h2>
        <style>
            .asd {
                padding-top: 10px;
                padding-left: 10%;
                padding-right: 10%;
            }
            .kntl {
                padding: 10px;
                font-size: 14px;
            }
            .ccx {
                color: black !important;
            }
        </style>
        <div class="table-responsive asd">
            <?php foreach ($sejarah as $row) : ?>
                <p class="ccx"><?= $row['sejarah'] ?></p>
            <?php endforeach; ?>
        </div>
        <br class="mb-4">
    </div>
</section>