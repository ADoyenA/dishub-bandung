<main id="main">

    <!-- ======= Dokumentasi Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row">

          <div class="col-lg-8">
            <h2 class="dokumentasi-title"><?= $data['dokumentasi']['judul-dokumentasi'] ?></h2>
            <div class="owl-carousel portfolio-details-carousel">
              <img src="<?= BASEURL; ?>/public/img/tilang.jpg" class="img-fluid" alt="">
              <img src="<?= BASEURL; ?>/public/img/portfolio/portfolio-details-2.jpg" class="img-fluid" alt="">
              <img src="<?= BASEURL; ?>/public/img/portfolio/portfolio-details-3.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>: Web design</li>
              <li><strong>Client</strong>: ASU Company</li>
              <li><strong>Project date</strong>: <?= $data['dokumentasi']['waktu-upload'] ?></li>
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

  