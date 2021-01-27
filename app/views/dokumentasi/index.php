<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2><?= $data['judul']; ?></h2>
      <ol>
        <li><a href="<?= BASEURL; ?>/home">Home</a></li>
        <li><?= $data['judul']; ?></li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Dokumentasi Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container">

    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
        </ul>
      </div>
    </div>
    
    <div class="row portfolio-container">
      <?php foreach ($data['dokumentasi']['body'] as $dokumentasi) : ?>
      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="<?= BASEURL; ?>/public/img/<?= $dokumentasi['img_cover'] ?>" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><?= $dokumentasi['judul_dokumentasi']?></h4>
            <p><?= $dokumentasi['waktu_upload']?></p>
            <div class="portfolio-links">
              <a href="<?= BASEURL; ?>/public/img/tilang.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="<?= BASEURL; ?>/dokumentasi/dokumentasiDetails/<?= $dokumentasi['ID_dokumentasi']?>" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
  </div>    
  </div>
</section><!-- End Portfolio Section -->

</main><!-- End #main -->