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


  <!-- ======= Frequently Asked Questions Section ======= -->
  <section id="faq" class="faq">
    <div class="container">
      <div class="section-title">
        <p><?= $data['data']['title']; ?></p>
      </div>
      <p>
        <?= $data['data']['p1']; ?>
      </p>
      <br>
      <p>
        <?= $data['data']['p2']; ?>
      </p>
      <p>
        <?= $data['data']['p3']; ?>
      </p>
      <p>
        <?= $data['data']['p4']; ?>
      </p>
      <p>
        <?= $data['data']['p5']; ?>
      </p>
      <p>
        <?= $data['data']['p6']; ?>
      </p>
      <br>
      <p align="justify">
        <?= $data['data']['p7']; ?>
      </p>

</main><!-- End #main -->