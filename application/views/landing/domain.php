<section class="section" id="domain">
    <h2 class="font-weight-bold mb-4" style="text-align: center;">Domain dan Sub Domain<br>Pemerintahan Kota Sungai Penuh</h2>
    <style>
        .asd {
            padding-top: 10px;
            padding-left: 10%;
            padding-right: 10%;
        }
        table, tr, td {
            padding: 10px;
        }
    </style>
    <div class="table-responsive title1 asd">
        <table id="datatable" class="table-bordered cxz" width="100%">
            <thead>
                <tr>
                    <th style="text-align: center;">No</th>
                    <th style="text-align: center;">SOPD Pengelola</th>
                    <th style="text-align: center;">Domain / Sub Domain</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 0;
                    foreach ($sopd as $row) : $no++;
                ?>
                <tr>
                    <td style="text-align: center;"><?= $no; ?></td>
                    <td style="text-align: left;"><?= $row['nama']; ?></td>
                    <td style="text-align: left;"><a target="_blank" href="<?= $row['domain']; ?>"><?= $row['domain']; ?></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>