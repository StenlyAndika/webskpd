<section class="col-md-9 section page-title">
    <div class="card shadow mb-4">
        <div class="container">
            <div class="card-body row align-items-center">
                <div class="col-md-10 order-1 order-md-1 text-center text-md-left pop-right">
                    <h2 class="font-weight-bold aaz" style="color: #000;">Website Resmi</h2>
                    <h2 class="font-weight-bold aas label-primary">
                        <?php if(count($instansi)<=0) : ?>
                            Instansi
                        <?php else: ?>
                            <?= $instansi[0]['nama'] ?>
                        <?php endif; ?>
                    </h2>
                </div>
                <div class="col-md-2 text-center order-2 order-md-2 pop-left">
                    <ul class="social-icon">
                        <li class="list-inline-item">
                            <?php if(count($instansi)<=0) : ?>
                                <a href="https://www.facebook.com/" target="_blank" class="home__social-icon"><i class="ti-facebook"></i></a>
                            <?php else: ?>
                                <?php if($instansi[0]['fb'] == null) : ?>
                                    <a href="https://www.facebook.com/" target="_blank" class="home__social-icon"><i class="ti-facebook"></i></a>
                                <?php else: ?>
                                    <a href="<?= $instansi[0]['fb'] ?>" target="_blank" class="home__social-icon"><i class="ti-facebook"></i></a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </li>
                        <li class="list-inline-item">
                            <?php if(count($instansi)<=0) : ?>
                                <a href="https://twitter.com/" target="_blank" class="home__social-icon"><i class="ti-twitter"></i></a>
                            <?php else: ?>
                                <?php if($instansi[0]['tw'] == null) : ?>
                                    <a href="https://twitter.com/" target="_blank" class="home__social-icon"><i class="ti-twitter"></i></a>
                                <?php else: ?>
                                    <a href="<?= $instansi[0]['tw'] ?>" target="_blank" class="home__social-icon"><i class="ti-twitter"></i></a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </li>
                        <li class="list-inline-item">
                            <?php if(count($instansi)<=0) : ?>
                                <a href="https://instagram.com/" target="_blank" class="home__social-icon"><i class="ti-instagram"></i></a>
                            <?php else: ?>
                                <?php if($instansi[0]['ig'] == null) : ?>
                                    <a href="https://instagram.com/" target="_blank" class="home__social-icon"><i class="ti-instagram"></i></a>
                                <?php else: ?>
                                    <a href="<?= $instansi[0]['ig'] ?>" target="_blank" class="home__social-icon"><i class="ti-instagram"></i></a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="owl-carousel owl-theme">
                    <?php foreach ($berita as $row) : ?>
                        <article class="post-sm">
                            <div class="post-thumb">
                                <a href="<?= base_url() ?>beranda/detail/<?= $row['id'] ?>"><img class="image-responsive w-100" src="<?= base_url('./upload/berita/').$row['gambar'] ?>" alt="Post-Image"></a>
                            </div>
                            <div class="post-title">
                                <h4 class=""><a href="<?= base_url() ?>beranda/detail/<?= $row['id'] ?>" class="font-weight-bold"><?= $row['judul'] ?></a></h4>
                            </div>
                            <div class="post-meta">
                                <ul class="list-inline post-tag">
                                    <li class="list-inline-item">
                                        <span class="label-primary" style="font-size: 12px; font-weight: bold;"><i class='bx bxs-user'></i> <?= $row['nama'] ?></span>
                                    </li>
                                    <li class="list-inline-item" style="color: #ff0000;font-size: 12px; font-weight: bold;">
                                        <i class='bx bx-calendar' ></i> 
                                        <?= date('d F Y', strtotime($row['tgl'])); ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="post-details">
                                <p style="font-size: 14px">
                                    <?php
                                        $string = strip_tags($row['isi']);
                                        if (strlen($string) > 150) {
                                            $stringCut = substr($string, 0, 150);
                                            $endPoint = strrpos($stringCut, ' ');
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
                <hr class="mt-0">
            </div>
            <div class="container">
                <?php foreach ($berita as $row) : ?>
                <div class="card mb-4 news-card pop-news">
                    <img style="border-radius: 5px; padding: 3px;" src="<?= base_url('./upload/berita/').$row['gambar'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold" style="text-align: left;"><a class="label-primary" style="font-size: 16px;" href="<?= base_url() ?>beranda/detail/<?= $row['id'] ?>"><?= $row['judul'] ?></a></h5>
                        <p class="mb-2" style="text-align: left; color: #ff0000; font-size: 14px; font-weight: bold;">
                            <i class='bx bx-calendar' ></i> <?= date('d F Y', strtotime($row['tgl'])); ?>&nbsp;
                            <span class="label-primary" style="text-align: left; font-size: 14px; font-weight: bold;">
                                <i class='bx bxs-user'></i> <?= $row['nama'] ?>
                            </span>
                        </p>
                        <p class="card-text berita-mini" style="text-align: left; font-size: 14px;">
                            <?php
                                $string = strip_tags($row['isi']);
                                if (strlen($string) > 150) {
                                    $stringCut = substr($string, 0, 250);
                                    $endPoint = strrpos($stringCut, ' ');
                                    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                    $string .= '...';
                                }
                                echo $string;
                            ?>
                            <br>
                            <a href="<?= base_url() ?>beranda/detail/<?= $row['id'] ?>" class="font-weight-bold">Baca selengkapnya...</a>
                        </p>
                    </div>
                </div>
                <hr class="mt-0">
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>