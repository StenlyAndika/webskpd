<section class="col-md-3 section page-title right-panel">
    <div class="card shadow mb-4" style="overflow: hidden;">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">KEPALA INSTANSI</h6>
        </div>
        <div class="card-body">
            <?php if(count($instansi)<=0) : ?>
                <div  class="img-fluid img-responsive center-block"><img style="object-fit: cover; width: 100%; height: 350px;" src="<?= base_url('./assets/img/avatar.png') ?>"></div>
                <h5 style="font-size: 14px;" class="ccz font-weight-bold mt-4">NAMA</h5>
            <?php else: ?>
                <?php if($instansi[0]['fotokepala'] == null) : ?>
                    <div  class="img-fluid img-responsive center-block"><img style="object-fit: cover; width: 100%; height: 350px;" src="<?= base_url('./assets/img/avatar.png') ?>"></div>
                <?php else : ?>
                    <div  class="img-fluid img-responsive center-block"><img style="object-fit: cover; width: 100%; height: 350px;" src="<?= base_url('./upload/fotokepala/').$instansi[0]['fotokepala'] ?>"></div>
                <?php endif; ?>
                <?php if($instansi[0]['kepala'] == null) : ?>
                    <h5 style="font-size: 14px;" class="ccz font-weight-bold mt-4">NAMA</h5>
                <?php else : ?>
                    <h5 style="font-size: 14px;" class="ccz font-weight-bold mt-4"><?= strtoupper($instansi[0]['kepala']) ?></h5>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold">Agenda Kegiatan</h6>
        </div>
        <div class="card-body">
            <ul class="timeline">
                <?php
                    foreach ($agenda as $row) : ?>
                    <li>
                        <div class="timeline-time">
                            <?php if (strtotime(date('d F Y')) < strtotime(date('d F Y', strtotime($row['tgl'])))) : ?>
                                <span class="date label-primary"><?= $this->automata->tgl_indo($row['tgl']); ?> ( Akan Datang )</span>
                                <span class="time"><?= $row['jam']; ?></span>
                            <?php elseif (strtotime(date('d F Y')) == strtotime(date('d F Y', strtotime($row['tgl'])))) : ?>
                                <span class="date" style="color: red;"><?= $this->automata->tgl_indo($row['tgl']); ?> ( Hari ini )</span>
                                <span class="time"><?= $row['jam']; ?></span>
                            <?php else : ?>
                                <span class="date" style="color: #7F8487;"><?= $this->automata->tgl_indo($row['tgl']); ?></span>
                                <span class="time" style="color: #7F8487;"><?= $row['jam']; ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="timeline-icon">
                            <a href="javascript:;">&nbsp;</a>
                        </div>
                        <div class="timeline-body">
                            <div class="table-responsive">
                                <table style="text-align: left; font-size: 12px;" class="font-weight-bold">
                                    <tr>
                                        <?php if (strtotime(date('d F Y')) < strtotime(date('d F Y', strtotime($row['tgl'])))) : ?>
                                            <td style="vertical-align: top;">Kegiatan</td>
                                            <td style="vertical-align: top;">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                            <td style="vertical-align: top;"><?= $row['kegiatan']; ?></td>
                                        <?php elseif (strtotime(date('d F Y')) == strtotime(date('d F Y', strtotime($row['tgl'])))) : ?>
                                            <td style="vertical-align: top;">Kegiatan</td>
                                            <td style="vertical-align: top;">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                            <td style="vertical-align: top;"><?= $row['kegiatan']; ?></td>
                                        <?php else : ?>
                                            <td style="vertical-align: top; color: #7F8487;">Kegiatan</td>
                                            <td style="vertical-align: top; color: #7F8487;">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                            <td style="vertical-align: top; color: #7F8487;"><?= $row['kegiatan']; ?></td>
                                        <?php endif; ?>
                                    </tr>
                                    <tr>
                                        <?php if (strtotime(date('d F Y')) < strtotime(date('d F Y', strtotime($row['tgl'])))) : ?>
                                            <td style="vertical-align: top;">Lokasi</td>
                                            <td style="vertical-align: top;">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                            <td style="vertical-align: top;"><?= $row['lokasi']; ?></td>
                                        <?php elseif (strtotime(date('d F Y')) == strtotime(date('d F Y', strtotime($row['tgl'])))) : ?>
                                            <td style="vertical-align: top;">Lokasi</td>
                                            <td style="vertical-align: top;">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                            <td style="vertical-align: top;"><?= $row['lokasi']; ?></td>
                                        <?php else : ?>
                                            <td style="vertical-align: top; color: #7F8487;">Lokasi</td>
                                            <td style="vertical-align: top; color: #7F8487;">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                            <td style="vertical-align: top; color: #7F8487;"><?= $row['lokasi']; ?></td>
                                        <?php endif; ?>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">INDEX KEPUASAN MASYARAKAT (IKM)</h6>
        </div>
        <div class="card-body">
            <?php if(count($kepuasan)<=0) : ?>
                <h4 class="small font-weight-bold">Tahun<span class="float-right"></span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            <?php else : ?>
                <?php foreach($kepuasan as $row) : ?>
                    <h4 class="small font-weight-bold">&nbsp; <span class="float-left">Tahun <?= $row['tahun'] ?> - Nilai : <?= $row['nilai'] ?></span><span class="float-right"><?= $row['predikat'] ?></span></h4>
                    <div class="progress mb-4">
                        <span class="float-left"></span>
                        <div class="progress-bar <?php if (round($row['nilai']) >= 90) { ?>bg-success<?php } elseif (round($row['nilai']) >= 80) { ?>bg-primary<?php } elseif (round($row['nilai']) >= 70) { ?>bg-warning<?php } else { ?>bg-danger<?php } ?>" role="progressbar" style="width: <?= (round($row['nilai']))?>%" aria-valuenow="<?= $row['nilai'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>