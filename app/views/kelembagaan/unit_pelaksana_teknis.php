<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
        <h2>Unit Pelaksanan Teknis</h2>
        <ol>
            <li><a href="<?= BASEURL; ?>/home">Home</a></li>
            <li>Unit Pelaksanan Teknis</li>
        </ol>
        </div>

    </div>
    </section><!-- End Breadcrumbs -->
    <section id="unit_pelaksanan_teknis" class="unit_pelaksanan_teknis">
        <div class="container">
            <!-- A -->
            <h5><?= $data['data']['subJudulA']; ?></h5>
            <p><?= $data['data']['sjA-p1']; ?></p>
            <img src="" alt="Gambar disini">
            <p><?= $data['data']['sjA-p2']; ?></p>

            <!-- B -->
            <h5><?= $data['data']['subJudulB']; ?></h5>
            <p><?= $data['data']['sjB-p1']; ?></p>
            <img src="" alt="Gambar disini">
            <p><?= $data['data']['sjB-p2']; ?></p>

            <!-- C -->
            <h5><?= $data['data']['subJudulC']; ?></h5>
            <p><?= $data['data']['sjC-p1']; ?></p>
            <img src="" alt="Gambar disini">
            <p><?= $data['data']['sjC-p2']; ?></p>
        </div>
    </section>
</main>