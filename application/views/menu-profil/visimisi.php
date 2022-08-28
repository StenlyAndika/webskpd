<style>
    .aac {
        margin-left: 25px;
        margin-right: 25px;
        border-radius: 10px;
        background: #fff;
        position: relative;
    }
</style>
<section class="col-md-9 section bg-white" id="visi-misi">
    <div class="aac">
        <h2 class="font-weight-bold mb-4" style="text-align: center;">Visi dan Misi<br>
        <?php if(count($instansi)<=0) : ?>
            Instansi
        <?php else: ?>
            <?= $instansi[0]['nama'] ?>
        <?php endif; ?>
        </h2>
        <p class="mb-2" style="text-align: center; font-size: 36px; font-weight: bold; color: black;">VISI</p>
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
        </style>
        <?php foreach ($visimisi as $row) : ?>
            <div class="table-responsive asd">
                <?= $row['visi']; ?>
            </div>
            <br>
            <p class="mb-2" style="text-align: center; font-size: 36px; font-weight: bold; color: black;">MISI</p>
            <div class="table-responsive asd">
                <?= $row['misi']; ?>
            </div>
        <?php endforeach; ?>
        <br class="mb-4">
    </div>
</section>