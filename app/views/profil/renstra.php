<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2><?= $data['judul']; ?></h2>
      <ol>
        <li><a href="<?= BASEURL; ?>/home">Home</a></li>
        <li><?= $data['judul1']; ?></li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">
  <div class="container">

    <div class="row">

      <div class="col-lg-3 col-md-6">
        <div class="box featured">
          <h3><?= $data['rs']; ?></h3>
          <ul>
            <li><?= $data['rs1']; ?> </li>
            <li><?= $data['rs2']; ?> </li>
            <li><?= $data['rs3']; ?></li>
          </ul>
          <div class="btn-wrap">
            <a href="#" class="btn-buy">Download</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
        <div class="box featured">
          <h3><?= $data['rk']; ?></h3>
          <ul>
            <li><?= $data['rk1']; ?></li>
            <li><?= $data['rk2']; ?> </li>
            <li><?= $data['rk3']; ?></li>
          </ul>
          <div class="btn-wrap">
            <a href="#" class="btn-buy">Download</a>
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Pricing Section -->