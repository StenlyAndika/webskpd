<section class="service section bg-gray" id="services">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2>Smart Services</h2>
					<p class="mb-4">Jelajahi aplikasi dan pelayanan di Kota Sungai Penuh</p>
				</div>
			</div>
		</div>
        <style>
            .ccx{
                display: inline-block;
                min-width: 150px;
                background: #efefef;
                color: #084a83;
                padding: 8px 20px;
                text-align: center;
                border-radius: 12px;
            }
            .ccx:hover{
                background: #084a83;
                color: #fff;
            }
        </style>
        <div class="col-lg-12 mr-auto align-self-center">
            <div class="service-box">
                <div class="row align-items-center">
                    <?php
                        foreach ($services as $row) :
                    ?>
                    <div class="col-md-5 col-xs-12">
                        <div class="service-item">
                            <a href="<?= $row["link"] ?>"><h3 class="ccx"><?= $row["nama"] ?></h3></a>
                            <p><?= $row["ket"] ?></p>
                        </div>
                    </div>
                    <?php
                        endforeach;
                    ?>
                </div>
            </div>
        </div>
	</div>
</section>