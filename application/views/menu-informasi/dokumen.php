<section class="section">
    <div class="container">
        <br>
        <h2 class="font-weight-bold mb-2" style="text-align: left;">Dokumen Publik</h2>
        <?php
            $tmptahun = [];
            $a = 0;
            foreach ($dokumen as $row) {
                if($a==0||$a!=$row['tahun']) {
                    array_push($tmptahun,$row['tahun']);
                    $a=$row['tahun'];
                }
            }
        ?>
        <style>
            .asd {
                padding-top: 10px;
                padding-left: 10%;
                padding-right: 10%;
            }
        </style>
        <div class="table-responsive asd">
            <table id="datatable" class="table-bordered" width="100%">
            <?php foreach ($tmptahun as $rowx) : ?>
                <td colspan="2" class="bg-blue text-white">Tahun <?= $rowx; ?></td>
                <tbody>
                <?php
                    $data['dokumen'] = $this->db->get_where('dokumen', ['tahun' => $rowx])->result_array();
                    foreach ($data['dokumen'] as $row) : ?>
                        <tr>
                            <td class="text-center">-</td>
                            <td><a class="font-weight-bold" target="_blank" href="<?= base_url('upload/dokumen/') .$row['namafile'] ?>"><?= $row['keterangan'] ?></a></td>
                        </tr>
                <?php endforeach; ?>
                </tbody>
            <?php endforeach; ?>
            </table>
        </div>
    </div>
</section>