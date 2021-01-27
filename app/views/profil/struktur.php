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
  <section id="resume" class="resume">
    <div class="container" data-aos="fade-up">
      <div class="card bg-dark text-white">
        <img src="<?= BASEURL; ?>/public/img/struktur-organisasi.png" class="card-img" alt="  ">
      </div>
    </div>
  </section>