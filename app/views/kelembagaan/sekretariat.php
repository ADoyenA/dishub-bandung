<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
        <h2>Sekretariat</h2>
        <ol>
            <li><a href="<?= BASEURL; ?>/home">Home</a></li>
            <li>Sekretariat</li>
        </ol>
        </div>

    </div>
    </section><!-- End Breadcrumbs -->
    <section id="blog" class="blog">
        <div class="container">
            <h5 class="card-title"><?= $data['data']['subJudulA']; ?></h5>
            <img src="" alt="Gambar disini">
            <p><?= $data['data']['p1']; ?></p>
            <p><?= $data['data']['p2']; ?></p>
            <div></div>
            <ol>
                <li><?= $data['data']['no1']; ?></li>
                <li><?= $data['data']['no2']; ?></li>
                <li><?= $data['data']['no3']; ?></li>
            </ol>
        </div>
    </section>
</main>
