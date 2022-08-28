<section class="col-md-9 section blog-single">
	<div class="container">
        <article class="single-post">
            <div class="post-title text-center">
                <h1><?= $berita3['judul'] ?></h1>
                <ul class="list-inline post-tag">
                    <li class="list-inline-item">
                        <img src="<?= base_url(); ?>/assets/img/avatar.png" alt="author-thumb">
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><?= $berita3['nama'] ?></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><?= date('d F Y', strtotime($berita3['tgl'])); ?></a>
                    </li>
                </ul>
            </div>
            <div class="post-body">
                <div class="feature-image">
                    <img class="img-fluid" src="<?= base_url('./upload/berita/').$berita3['gambar'] ?>" alt="feature-image">
                </div>
                <p><?= $berita3['isi'] ?></p>
            </div>
        </article>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12 title">
				<h2 class="text-white">Baca juga</h2>
			</div>
		</div>
        <br>
		<div class="row">
            <?php foreach ($berita2 as $row2) : ?>
                <div class="col-lg-4 col-md-6">
                    <article class="post-sm">
                        <div class="post-thumb">
                            <a href="<?= base_url() ?>beranda/detail/<?= $row2['id'] ?>"><img class="w-100" src="<?= base_url('./upload/berita/').$row2['gambar'] ?>" alt="Post-Image"></a>
                        </div>
                        <div class="post-title">
                            <h3 class=""><a href="<?= base_url() ?>beranda/detail/<?= $row2['id'] ?>" class="font-weight-bold"><?= $row2['judul'] ?></a></h3>
                        </div>
                        <div class="post-meta">
                            <ul class="list-inline post-tag">
                                <li class="list-inline-item">
                                    <img src="<?= base_url(); ?>/assets/img/avatar.png">
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><?= $row2['nama'] ?></a>
                                </li>
                                <li class="list-inline-item">
                                    <?= date('d F Y', strtotime($row2['tgl'])); ?>
                                </li>
                            </ul>
                        </div>
                        <div class="post-details">
                            <p>
                                <?php
                                    $string = strip_tags($row2['isi']);
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
			    </div>
            <?php endforeach; ?>
		</div>
	</div>
</section>