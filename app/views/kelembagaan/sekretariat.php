<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Sekretariat</h2>
                <ol>
                    <li><a href="<?= BASEURL; ?>/home">Home</a></li>
                    <li>Sekretariat</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row no-gutters">
                <div class="col-lg-6 video-box">
                    <img src="<?= BASEURL; ?>/public/img/about.jpg" class="img-fluid" alt="">
                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                </div>

                <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

                    <div class="section-title" data-aos="fade-up">
                        <h2>Our <strong>institutional</strong></h2>
                    </div>

                    <div class="icon-box" data-aos="fade-up" style="text-align: justify;">
                        <h5 class="card-title"><?= $data['data']['subJudulA']; ?></h5>
                        <p><?= $data['data']['p1']; ?></p>
                        <p><?= $data['data']['p2']; ?></p>
                        <div></div>
                        <ol>
                            <li><?= $data['data']['no1']; ?></li>
                            <li><?= $data['data']['no2']; ?></li>
                            <li><?= $data['data']['no3']; ?></li>
                        </ol>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

</main><!-- End #main -->