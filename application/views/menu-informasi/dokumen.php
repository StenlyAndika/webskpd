<style>
    .aac {
        border-radius: 10px;
        background: #fff;
        position: relative;
    }
    .cw {
        background-color: #3A5BA0;
    }
</style>
<section class="col-md-9 section">
    <div class="container aac">
        <br>
        <h2 class="font-weight-bold mb-2" style="text-align: center;">Publikasi Dokumen</h2>
        <style>
            .asd {
                padding-top: 10px;
                padding-left: 10%;
                padding-right: 10%;
            }
        </style>
        <div class="table-responsive asd">
            <div class="row">
                <div class="col-lg-8">
                    <h4 class="font-weight-bold mb-4 mt-2 aaz">Klik untuk mengunduh dokumen</h4>
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control" placeholder="Cari">
                </div>
            </div>
            <?php
                $this->db->from('dokumen');
                $this->db->order_by("tahun", "desc");
                $query = $this->db->get();
                $data['dokumen'] = $query->result_array();
                
                $tmptahun = [];
                $a = 0;
                foreach ($data['dokumen'] as $row) {
                    if($a!=$row['tahun']) {
                        array_push($tmptahun,$row['tahun']);
                        $a=$row['tahun'];
                    }
                }
                $tmpkategori = [];
                $n = "";
                foreach ($data['dokumen'] as $rowc) {
                    if($n!=$rowc['kategori']) {
                        array_push($tmpkategori,$rowc['kategori']);
                        $n=$rowc['kategori'];
                    }
                }
            ?>
            <table id="datatable" class="table-bordered" width="100%">
            <?php foreach ($tmptahun as $rowx) : ?>
                <td colspan="2" class="cw text-white text-center font-weight-bold">Tahun <?= $rowx; ?></td>
                <tbody>
                    <?php foreach ($tmpkategori as $rowz) : ?>
                        <tr>
                        <td colspan="2" class="text-danger text-center font-weight-bold"><?= $rowz; ?></td>
                        <?php
                        $this->db->where('tahun', $rowx);
                        $this->db->where('kategori', $rowz);
                        $query = $this->db->get('dokumen');
                        $data['dokumen'] = $query->result_array();
                        foreach ($data['dokumen'] as $row) : ?>
                            <tr>
                                <td class="text-center">-</td>
                                <td><a class="font-weight-bold" target="_blank" href="<?= base_url('upload/dokumen/') .$row['namafile'] ?>"><?= $row['keterangan'] ?></a></td>
                            </tr>
                        <?php endforeach; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            <?php endforeach; ?>
            </table>
        </div>
        <br>
        <br>
    </div>
</section>