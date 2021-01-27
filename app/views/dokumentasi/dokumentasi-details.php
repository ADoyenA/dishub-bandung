<main id="main">

    <!-- ======= Dokumentasi Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row">

          <div class="col-lg-8">
            <h2 class="dokumentasi-title"><?= $data['dokumentasi']['judul_dokumentasi'] ?></h2>
            <?php foreach ($data['fotoKegiatan']['body'] as $fotoKegiatan) : ?>
            <div class="owl-carousel portfolio-details-carousel">
              <img src="<?= BASEURL; ?>/public/img/<?= $fotoKegiatan['foto'] ?>" class="img-fluid" alt="">
              <img src="<?= BASEURL; ?>/public/img/<?= $fotoKegiatan['foto'] ?>" class="img-fluid" alt="">
              <img src="<?= BASEURL; ?>/public/img/<?= $fotoKegiatan['foto'] ?>" class="img-fluid" alt="">
            </div>
          </div>
          <?php endforeach; ?>

          <div class="col-lg-4 portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>: Web design</li>
              <li><strong>Client</strong>: ASU Company</li>
              <li><strong>Project date</strong>: <?= $data['dokumentasi']['waktu_upload'] ?></li>
              <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
            </ul>

            <p>
            <?= $data['dokumentasi']['text_dokumentasi'] ?>
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  