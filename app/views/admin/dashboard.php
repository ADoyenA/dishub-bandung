<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2><?= $data['judul']; ?></h2>
                <ol>
                    <li><a href="<?= BASEURL; ?>/admin/dashboard">Dashboard</a></li>
                    <li><?= $data['judul']; ?></li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-title">
                        <p>Informasi</p>
                        <h2>Postingan Terbaru</h2>
                    </div>
                </div>
                <div class="col">
                    <div class="section-title">
                        <p>Dokumentasi</p>
                        <h2>Postingan Terbaru</h2>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card">
                        <img src="<?= BASEURL; ?>/public/img/about.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="<?= BASEURL; ?>/public/img/about.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
    </section>
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title">
                <p>log</p>
                <h2>Kegiatan Terbaru</h2>
            </div>
            <ol align="justify">
                <?php foreach ($data['log']['body'] as $log) : ?>
                    <li><?= $log['action'] ?> Data <?= $log['data'] ?> Pada Tanggal <?= $log['tanggal'] ?></li>
                <?php endforeach; ?>
            </ol>
        </div>

    </section>>