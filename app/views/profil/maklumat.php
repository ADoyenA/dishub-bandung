<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Layanan</h2>
        <ol>
          <li><a href="<?= BASEURL; ?>/home">Home</a></li>
          <li>Pengujian Kendaraan</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->
  <!-- ======= About Section ======= -->
  <section id="features" class="features">
    <div class="container">

      <div class="section-title">
        <h2>Layanan</h2>
        <p>Pengujian Kendaraan</p>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <ul class="nav nav-tabs flex-column">
            <li class="nav-item">
              <a class="nav-link active show" data-toggle="tab" href="#tab-1">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-2">Persyaratan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-3">Sistem, Mekanisme dan Prosedur</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-4">Waktu Penyelesaian</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-5">Biaya / Tarif</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-6">Jam Operasional Pelayanan</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-9 mt-4 mt-lg-0">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Pengujian Kendaraan</h3>
                  <p align="justify">
                    <?= $data['data']['t1']; ?>
                  </p>
                  <p align="justify">
                    <?= $data['data']['t2']; ?>
                  </p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="<?= BASEURL; ?>/public/img/features-1.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-2">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Persyaratan</h3>
                  <ul align="justify">
                    <li><?= $data['data']['p1']; ?></li>
                    <li><?= $data['data']['p2']; ?></li>
                    <li><?= $data['data']['p3']; ?></li>
                    <li><?= $data['data']['p4']; ?></li>
                    <li><?= $data['data']['p5']; ?></li>
                  </ul>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="<?= BASEURL; ?>/public/img/features-2.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-3">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Sistem, Mekanisme dan Prosedur</h3>
                  <ul align="justify">
                    <li><?= $data['data']['s1']; ?></li>
                    <li><?= $data['data']['s2']; ?></li>
                    <li><?= $data['data']['s3']; ?></li>
                    <li><?= $data['data']['s4']; ?></li>
                    <li><?= $data['data']['s5']; ?></li>
                    <li><?= $data['data']['s6']; ?></li>
                    <li><?= $data['data']['s7']; ?></li>
                  </ul>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="<?= BASEURL; ?>/public/img/features-3.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-4">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Waktu Penyelesaian</h3>
                  <p align="justify">
                    <?= $data['data']['w1']; ?>
                  </p>
                  <p align="justify">
                    <?= $data['data']['w2']; ?>
                  </p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="<?= BASEURL; ?>/public/img/features-4.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-5">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Biaya / Tarif</h3>
                  <ol align="justify">
                    <?= $data['data']['b1']; ?>
                    <?= $data['data']['b2']; ?>
                    <?= $data['data']['b3']; ?>
                    <?= $data['data']['b4']; ?>
                    <?= $data['data']['b5']; ?>
                    <?= $data['data']['b6']; ?>
                    <?= $data['data']['b7']; ?>
                    <?= $data['data']['b8']; ?>
                  </ol>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="<?= BASEURL; ?>/public/img/features-5.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-6">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Jam Operasional Pelayanan</h3>
                  <p align="justify">
                    <?= $data['data']['j1']; ?>
                  </p>
                  <p align="justify">
                    <?= $data['data']['j2']; ?>
                  </p>
                  <p align="justify">
                    <?= $data['data']['j3']; ?>
                  </p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="<?= BASEURL; ?>/public/img/features-2.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Features Section -->