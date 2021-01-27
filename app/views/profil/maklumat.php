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
                    <li><?= $data['data']['b1']; ?></li>
                    <li><?= $data['data']['b2']; ?></li>
                    <li><?= $data['data']['b3']; ?></li>
                    <li><?= $data['data']['b4']; ?></li>
                    <li><?= $data['data']['b5']; ?></li>
                    <li><?= $data['data']['b6']; ?></li>
                    <li><?= $data['data']['b7']; ?></li>
                    <li><?= $data['data']['b8']; ?></li>
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
  <section id="features" class="features">
    <div class="container">

      <div class="section-title">
        <h2>Layanan</h2>
        <p>Bandung Tour On Bus</p>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <ul class="nav nav-tabs flex-column">
            <li class="nav-item">
              <a class="nav-link active show" data-toggle="tab" href="#tab-7">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-8">Sejarah</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-9">Rute</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-10">Fasilitas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-11">Biaya / Tarif</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-12">Jam Operasional Pelayanan</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-9 mt-4 mt-lg-0">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-7">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Bandros</h3>
                  <p align="justify">
                    <?= $data['data']['bb1']; ?>
                  </p>
                  <p align="justify">
                    <?= $data['data']['bb2']; ?>
                  </p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="<?= BASEURL; ?>/public/img/features-1.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-8">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Sejarah</h3>
                  <p align="justify">
                    <?= $data['data']['bs1']; ?>
                  </p>
                  <p align="justify">
                    <?= $data['data']['bs2']; ?>
                  </p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="<?= BASEURL; ?>/public/img/features-2.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-9">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Rute</h3>
                  <ul align="justify">
                    <li><?= $data['data']['br1']; ?></li>
                    <li><?= $data['data']['br2']; ?></li>
                    <li><?= $data['data']['br3']; ?></li>
                    <li><?= $data['data']['br4']; ?></li>
                    <li><?= $data['data']['br5']; ?></li>
                  </ul>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="<?= BASEURL; ?>/public/img/features-3.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-10">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Fasilitas</h3>
                  <p align="justify">
                    <?= $data['data']['bf1']; ?>
                  </p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="<?= BASEURL; ?>/public/img/features-4.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-11">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Biaya / Tarif</h3>
                  <p align="justify">
                    <?= $data['data']['bt1']; ?>
                  </p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="<?= BASEURL; ?>/public/img/features-5.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-12">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Jam Operasional Pelayanan</h3>
                  <p align="justify">
                    <?= $data['data']['bj1']; ?>
                  </p>
                  <p align="justify">
                    <?= $data['data']['bj2']; ?>
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
  </section>
  <section id="features" class="features">
    <div class="container">

      <div class="section-title">
        <h2>Layanan</h2>
        <p>Bike Share Bandung</p>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <ul class="nav nav-tabs flex-column">
            <li class="nav-item">
              <a class="nav-link active show" data-toggle="tab" href="#tab-13">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-14">Registrasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-15">Pinjam</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-16">Kembalikan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-17">Biaya / Tarif</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-18">Alamat Booth dan Stasiun Boseh</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-19">Jam Operasional</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-9 mt-4 mt-lg-0">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-13">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Boseh</h3>
                  <p align="justify">
                    <?= $data['data']['ss1']; ?>
                  </p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="<?= BASEURL; ?>/public/img/features-1.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-14">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Registrasi</h3>
                  <p align="justify">
                    <?= $data['data']['sr1']; ?>
                  </p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="<?= BASEURL; ?>/public/img/features-2.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-15">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Pinjam</h3>
                  <p align="justify">
                    <?= $data['data']['sp1']; ?>
                  </p>
                  <ol align="justify">
                    <li><?= $data['data']['sp2']; ?></li>
                    <li><?= $data['data']['sp3']; ?></li>
                    <li><?= $data['data']['sp4']; ?></li>
                    <li><?= $data['data']['sp5']; ?></li>
                  </ol>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="<?= BASEURL; ?>/public/img/features-3.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-16">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Kembalikan</h3>
                  <p align="justify">
                    <?= $data['data']['sk1']; ?>
                  </p>
                  <ol align="justify">
                    <li><?= $data['data']['sk2']; ?></li>
                    <li><?= $data['data']['sk3']; ?></li>
                    <li><?= $data['data']['sk4']; ?></li>
                  </ol>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="<?= BASEURL; ?>/public/img/features-3.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>


            <div class="tab-pane" id="tab-17">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Biaya / Tarif</h3>
                  <p align="justify">
                    <?= $data['data']['st1']; ?>
                  </p>
                  <p align="justify">
                    <?= $data['data']['st2']; ?>
                  </p>
                  <p align="justify">
                    <?= $data['data']['st3']; ?>
                  </p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="<?= BASEURL; ?>/public/img/features-5.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-18">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Alamat Booth dan Stasiun Boseh</h3>
                  <p align="justify">
                    <?= $data['data']['sa1']; ?>
                  </p>
                  <ul align="justify">
                    <li><?= $data['data']['sa2']; ?></li>
                    <li><?= $data['data']['sa3']; ?></li>
                    <li><?= $data['data']['sa4']; ?></li>
                  </ul>
                  <p align="justify">
                    <?= $data['data']['sa5']; ?>
                  </p>
                  <ul align="justify">
                    <li><?= $data['data']['sa6']; ?></li>
                    <li><?= $data['data']['sa7']; ?></li>
                    <li><?= $data['data']['sa8']; ?></li>
                    <li><?= $data['data']['sa9']; ?></li>
                    <li><?= $data['data']['sa10']; ?></li>
                    <li><?= $data['data']['sa11']; ?></li>
                    <li><?= $data['data']['sa12']; ?></li>
                    <li><?= $data['data']['sa13']; ?></li>
                    <li><?= $data['data']['sa14']; ?></li>
                    <li><?= $data['data']['sa15']; ?></li>
                    <li><?= $data['data']['sa16']; ?></li>
                    <li><?= $data['data']['sa17']; ?></li>
                    <li><?= $data['data']['sa18']; ?></li>
                    <li><?= $data['data']['sa19']; ?></li>
                    <li><?= $data['data']['sa20']; ?></li>
                  </ul>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="<?= BASEURL; ?>/public/img/features-4.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-19">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Jam Operasional Pelayanan</h3>
                  <p align="justify">
                    <?= $data['data']['sj1']; ?>
                  </p>
                  <ul align="justify">
                    <li><?= $data['data']['sj2']; ?></li>
                  </ul>
                  <p align="justify">
                    <?= $data['data']['sj3']; ?>
                  </p>
                  <ul align="justify">
                    <li><?= $data['data']['sj4']; ?></li>
                  </ul>
                  <p align="justify">
                    <?= $data['data']['sj5']; ?>
                  </p>
                  <ul align="justify">
                    <li><?= $data['data']['sj6']; ?></li>
                  </ul>
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
  </section>
  <section id="features" class="features">
    <div class="container">

      <div class="section-title">
        <h2>Layanan</h2>
        <p>Rekomendasi Penyelenggaraan Parkir </p>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <ul class="nav nav-tabs flex-column">
            <li class="nav-item">
              <a class="nav-link active show" data-toggle="tab" href="#tab-20">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-21">Panduan Parkir</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-22">Posisi Parkir Kendaraan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-23">Biaya / Tarif</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-9 mt-4 mt-lg-0">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-20">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Parkir</h3>
                  <p align="justify">
                    <?= $data['data']['pt1']; ?>
                  </p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="<?= BASEURL; ?>/public/img/features-1.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-21">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Panduan Parkir</h3>
                  <p align="justify">
                    <?= $data['data']['pp1']; ?>
                  </p>
                  <ul align="justify">
                    <li><?= $data['data']['pp2']; ?></li>
                    <li><?= $data['data']['pp3']; ?></li>
                    <li><?= $data['data']['pp5']; ?></li>
                    <li><?= $data['data']['pp6']; ?></li>
                    <li><?= $data['data']['pp7']; ?></li>
                    <li><?= $data['data']['pp8']; ?></li>
                  </ul>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="<?= BASEURL; ?>/public/img/features-2.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-22">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Posisi Parkir Kendaraan</h3>
                  <p align="justify">
                    <?= $data['data']['pk1']; ?>
                  </p>
                  <ul align="justify">
                    <li><?= $data['data']['pk2']; ?></li>
                    <li><?= $data['data']['pk3']; ?></li>
                    <li><?= $data['data']['pk4']; ?></li>
                  </ul>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="<?= BASEURL; ?>/public/img/features-3.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-23">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Biaya / Tarif</h3>
                  <p align="justify">
                    <?= $data['data']['pj1']; ?>
                  </p>
                  <ul align="justify">
                    <li><?= $data['data']['pj2']; ?></li>
                    <li><?= $data['data']['pj3']; ?></li>
                  </ul>
                  <p align="justify">
                    <?= $data['data']['pj4']; ?>
                  </p>
                  <ul align="justify">
                    <li><?= $data['data']['pj5']; ?></li>
                    <li><?= $data['data']['pj6']; ?></li>
                  </ul>
                  <p align="justify">
                    <?= $data['data']['pj7']; ?>
                  </p>
                  <ul align="justify">
                    <li><?= $data['data']['pj8']; ?></li>
                    <li><?= $data['data']['pj9']; ?></li>
                  </ul>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="<?= BASEURL; ?>/public/img/features-5.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </section>