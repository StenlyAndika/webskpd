<section class="section page-title">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 order-1 order-md-1 text-center text-md-left pop-right">
                <style>
                    .aaz {
                        color: #000;
                        font-size: 40px;
                    }
                    .aas {
                        color: #2e7eed;
                        font-size: 40px;
                        /* text-shadow: 0.5px 1px #000; */
                        /* -webkit-text-stroke: 3px #2e7eed; */
                    }
                    .ffd {
                        color: #fff !important;
                    }
                </style>
                <h2 class="font-weight-bold mb-4 aaz">Website Resmi
                    <p class="font-weight-bold aas">
                    <?php if(count($instansi)<=0) : ?>
                        Instansi
                    <?php else: ?>
                        <?= $instansi[0]['nama'] ?>
                    <?php endif; ?>
                    </p>
                </h2>
            </div>
            <div class="col-md-6 text-center order-2 order-md-2 pop-left">
                <ul class="social-icon">
                    <li class="list-inline-item">
                        <?php if($instansi[0]['fb'] == null) : ?>
                            <a href="https://www.facebook.com/" target="_blank" class="home__social-icon"><i class="ti-facebook"></i></a>
                        <?php else: ?>
                            <a href="<?= $instansi[0]['fb'] ?>" target="_blank" class="home__social-icon"><i class="ti-facebook"></i></a>
                        <?php endif; ?>
                    </li>
                    <li class="list-inline-item">
                        <?php if($instansi[0]['tw'] == null) : ?>
                            <a href="https://twitter.com/" target="_blank" class="home__social-icon"><i class="ti-twitter"></i></a>
                        <?php else: ?>
                            <a href="<?= $instansi[0]['tw'] ?>" target="_blank" class="home__social-icon"><i class="ti-twitter"></i></a>
                        <?php endif; ?>
                    </li>
                    <li class="list-inline-item">
                        <?php if($instansi[0]['ig'] == null) : ?>
                            <a href="https://instagram.com/" target="_blank" class="home__social-icon"><i class="ti-instagram"></i></a>
                        <?php else: ?>
                            <a href="<?= $instansi[0]['ig'] ?>" target="_blank" class="home__social-icon"><i class="ti-instagram"></i></a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
	<div class="container">
        <h2 class="font-weight-bold mb-4 aaz">Berita Terbaru</h2>
        <div class="owl-carousel owl-theme">
            <?php foreach ($berita as $row) : ?>
                <article class="post-sm">
                    <div class="post-thumb">
                        <a href="<?= base_url() ?>beranda/detail/<?= $row['id'] ?>"><img class="w-100" src="<?= base_url('./upload/berita/').$row['gambar'] ?>" alt="Post-Image"></a>
                    </div>
                    <div class="post-title">
                        <h3 class=""><a href="<?= base_url() ?>beranda/detail/<?= $row['id'] ?>" class="font-weight-bold"><?= $row['judul'] ?></a></h3>
                    </div>
                    <div class="post-meta">
                        <ul class="list-inline post-tag">
                            <li class="list-inline-item">
                                <img src="<?= base_url(); ?>/assets/img/avatar.png">
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><?= $row['nama'] ?></a>
                            </li>
                            <li class="list-inline-item">
                                <?= date('d F Y', strtotime($row['tgl'])); ?>
                            </li>
                        </ul>
                    </div>
                    <div class="post-details">
                        <p>
                            <?php
                                $string = strip_tags($row['isi']);
                                if (strlen($string) > 150) {
                                
                                    // truncate string
                                    $stringCut = substr($string, 0, 150);
                                    $endPoint = strrpos($stringCut, ' ');
                                
                                    //if the string doesn't contain any space then it will cut without word basis.
                                    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                    $string .= '...';
                                }
                                echo $string;
                            ?>
                            </p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
	</div>
</section>