<style>
    .aac {
        border-radius: 10px;
        position: relative;
    }
</style>
<section class="col-md-9 section">
    <div class="container aac">
        <br>
        <h2 class="font-weight-bold mb-2" style="text-align: center;">Galeri Foto 
        <?php if(count($instansi)<=0) : ?>
            Instansi
        <?php else: ?>
            <?= $instansi[0]['nama'] ?>
        <?php endif; ?>
        </h2>
    <?php
        $tmpkegiatan = [];
        $tmptgl = [];
        $a = "";
        foreach ($foto as $row) {
            if($a!=$row['kegiatan']) {
                array_push($tmpkegiatan,$row['kegiatan']);
                $a=$row['kegiatan'];
            }
        }
        foreach ($tmpkegiatan as $rowx) : ?>
            <div class="col-lg-12">
                <h4 class="font-weight-bold mt-5" style="text-align: left;"><?= $rowx ?></h4>
            </div>
            <div class="row">
            <?php $data['foto2'] = $this->db->get_where('foto', ['kegiatan' => $rowx])->result_array();
                foreach ($data['foto2'] as $rowz) : ?>
                <div class="col-lg-4">
                    <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal1" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail w-100" src="<?= base_url('./upload/foto/') .$rowz['tgl']."/".$rowz['namafile'] ?>"/>
                    </a>
                </div>
            <?php endforeach; ?>
            </div>
    <?php endforeach; ?>        
    </div>
</section>