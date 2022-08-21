<style>
    .aac {
        border-radius: 10px;
        background: #fff;
        position: relative;
    }
</style>
<section class="section gradient-banner">
    <div class="shapes-container">
        <div class="shape" data-aos="fade-down-left" data-aos-duration="1500" data-aos-delay="100"></div>
        <div class="shape" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100"></div>
        <div class="shape" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="200"></div>
        <div class="shape" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"></div>
        <div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
        <div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
        <div class="shape" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300"></div>
        <div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="200"></div>
        <div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="100"></div>
        <div class="shape" data-aos="zoom-out" data-aos-duration="2000" data-aos-delay="500"></div>
        <div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="200"></div>
        <div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="100"></div>
        <div class="shape" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0"></div>
        <div class="shape" data-aos="fade-down" data-aos-duration="500" data-aos-delay="0"></div>
        <div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="100"></div>
        <div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="0"></div>
    </div>
    <div class="container aac">
        <br>
        <h2 class="font-weight-bold mb-2" style="text-align: center;">Dokumen Publik</h2>
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
        <br>
        <br>
    </div>
</section>