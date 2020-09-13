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

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Tentang Kami</h2>
        <p>DINAS PERHUBUNGAN PEMERINTAH KOTA BANDUNG</p>
      </div>
      <p>
        <?= $data['data']['p1']; ?>
      </p>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Sejarah</h3>
          <div class="resume-item pb-0">
            <h4>Sekilas Tentang Dinas Perhubungan Kota Bandung</h4>
            <h5>1997 - Sekarang</h5>
            <p align="justify">
              <?= $data['data']['p2']; ?>
            </p>
            <p>
              <?= $data['data']['p3']; ?>
            </p>
            <ol align="justify">
              <li><?= $data['data']['s1']; ?></li>
              <br>
              <li><?= $data['data']['s2']; ?></li>
              <br>
              <li><?= $data['data']['s3']; ?></li>
            </ol>
            </p>
          </div>

          <h3 class="resume-title">Visi dan Misi</h3>
          <div class="resume-item">
            <h4>Visi</h4>
            <p align="justify">
              <?= $data['data']['v1']; ?>
            </p>
          </div>
          <div class="resume-item">
            <h4>Misi</h4>
            <ul align="justify">
              <li><?= $data['data']['m1']; ?></li>
              <li><?= $data['data']['m2']; ?></li>
              <li><?= $data['data']['m3']; ?></li>
              <li><?= $data['data']['m4']; ?></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">Dasar Hukum</h3>
          <div class="resume-item">
            <h4>Dasar Hukum Dinas Perhubungan Kota Bandung</h4>
            <ol align="justify">
              <li><?= $data['data']['d1']; ?></li>
              <br>
              <li><?= $data['data']['d2']; ?></li>
              <br>
              <li><?= $data['data']['d3']; ?></li>
              <br>
              <li><?= $data['data']['d4']; ?></li>
              <br>
              <li><?= $data['data']['d5']; ?></li>
              <br>
              <li><?= $data['data']['d6']; ?></li>
              <br>
              <li><?= $data['data']['d7']; ?></li>
              <br>
              <li><?= $data['data']['d8']; ?></li>
              <br>
              <li><?= $data['data']['d9']; ?></li>
              <br>
              <li><?= $data['data']['d10']; ?></li>
            </ol>
            </p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->

</main><!-- End #main -->