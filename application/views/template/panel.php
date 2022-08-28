<section class="col-md-3 section page-title right-panel">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">KEPALA INSTANSI</h6>
        </div>
        <div class="card-body">
            <?php if(count($instansi)<=0) : ?>
                <a href="#"><img src="<?= base_url('./assets/img/tablogo.png') ?>" width="250px"></a>
            <?php else: ?>
                <a href="#"><img src="<?= base_url('./upload/fotokepala/').$instansi[0]['fotokepala'] ?>" alt="footer-logo" width="250px"></a>
                <h5 style="font-size: 14px;" class="ccz font-weight-bold mb-4 mt-2"><?= strtoupper($instansi[0]['kepala']) ?></h5>
            <?php endif; ?>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">PENGUMUMAN</h6>
        </div>
        <div class="card-body">
            <?php
                foreach($pengumuman as $row) :
            ?>
            <a href=""><?= $row['judul'] ?></a>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">PERSENTASE KEPUASAN PELAYANAN</h6>
        </div>
        <div class="card-body">
            <h4 class="small font-weight-bold">Sangat Memuaskan<span class="float-right"><?= $kepuasan[0]['sp'] ?> %</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar bg-success" role="progressbar" style="width: <?= $kepuasan[0]['sp'] ?>%" aria-valuenow="<?= $kepuasan[0]['sp'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Memuaskan<span class="float-right"><?= $kepuasan[0]['p'] ?> %</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar bg-info" role="progressbar" style="width: <?= $kepuasan[0]['p'] ?>%" aria-valuenow="<?= $kepuasan[0]['p'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Cukup Memuaskan<span class="float-right"><?= $kepuasan[0]['cp'] ?> %</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar" role="progressbar" style="width: <?= $kepuasan[0]['cp'] ?>%" aria-valuenow="<?= $kepuasan[0]['cp'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Kurang Memuaskan<span class="float-right"><?= $kepuasan[0]['kp'] ?> %</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar bg-warning" role="progressbar" style="width: <?= $kepuasan[0]['kp'] ?>%" aria-valuenow="<?= $kepuasan[0]['kp'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Tidak Memuaskan<span class="float-right"><?= $kepuasan[0]['tp'] ?> %</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar bg-danger" role="progressbar" style="width: <?= $kepuasan[0]['tp'] ?>%" aria-valuenow="<?= $kepuasan[0]['tp'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>
</section>