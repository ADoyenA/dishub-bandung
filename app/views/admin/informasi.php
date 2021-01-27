<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2><?= $data['judul']; ?></h2>
            <ol>
                <li><a href="<?= BASEURL; ?>/admin/dashboard">Dashboard</a></li>
                <li><?= $data['judul']; ?></li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->
<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container" data-aos="fade-up">


        <div class="section-title">
            <h2>Informasi</h2>
            <p>Postingan Informasi Terbaru</p>
        </div>
        <!-- <nav aria-label="Page navigation example">
                <ul id="manyRows" class="pagination">
                    <li class="page-item"><a class="page-link" href="#"> < </a></li>
                    <li class="page-item disabled"><a class="page-link" href="#" aria-disabled="true">1</a></li>
                    <li class="page-item"><a class="page-link" href="#"> > </a></li>
                </ul>
            </nav> -->
        <select name="state" id="manyRows" class="form-control" style="width:150px">
            <option value="5">Show All</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <table id="newInformasi" class="table table-bordered">

            <thead>
                <tr>
                    <th width="5%" scope="col">No</th>
                    <th width="75%" scope="col">Judul Informasi</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $row = 0 ?>
                <?php foreach ($data['informasiTerbaru']['body'] as $informasiTerbaru) : ?>
                    <?php $addRow = $row + 1 ?>
                    <?php $row = $addRow ?>
                    <tr>
                    
                        <th scope="row"><?= $addRow ?></th>
                        <td><?= $informasiTerbaru['judul_informasi'] ?></td>
                        <td>
                            <span class="badge rounded-pill bg-primary text-white">Website</span>
                            <span class="badge rounded-pill bg-warning text-white"><a href="<?= BASEURL; ?>/admin/editInformasi/<?= $informasiTerbaru['ID_informasi'] ?>">Detail</a></span>
                            <span class="badge rounded-pill bg-danger text-white"><a href="<?= BASEURL; ?>/admin/deleteInformasi/<?= $informasiTerbaru['ID_informasi']?>/<?= $informasiTerbaru['img'] ?>">Hapus</a></span>
                        </td>
                    </tr>
            </tbody>
        <?php endforeach; ?>
        </table>







            <div class="col">
                <p> Mulai menambahkan postingan informasi terbaru dengan klik <a href="<?= BASEURL; ?>/admin/tambahInformasi">Tambah Informasi</a> ini ! </p>
            </div>

    </div>
    </div>
</section><!-- End Services Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Informasi</h2>
            <p>Tabel Informasi</p>
        </div>

        <select name="state" id="maxRows" class="form-control" style="width:150px">
            <option value="5000">Show All</option>
            <option value="2">2</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>

        <nav class="navbar navbar-light bg-light">
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>

        <table id="semuaInformasi" class="table table-bordered">
            <thead>
                <tr>
                    <th width="5%" scope="col">No</th>
                    <th width="75%" scope="col">Judul Informasi</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $row = 0 ?>
                <?php foreach ($data['informasi']['body'] as $informasi) : ?>
                    <?php $addRow = $row + 1 ?>
                    <?php $row = $addRow ?>
                    <tr>
                        <th scope="row"><?= $addRow ?></th>
                        <td><?= $informasi['judul_informasi'] ?></td>
                        <td>
                            <span class="badge rounded-pill bg-primary text-white">Website</span>
                            <span class="badge rounded-pill bg-warning text-white"><a href="<?= BASEURL; ?>/admin/editInformasi/<?= $informasiTerbaru['ID_informasi'] ?>">Detail</a></span>
                            <span class="badge rounded-pill bg-danger text-white"><a href="<?= BASEURL; ?>/admin/deleteInformasi/<?= $informasiTerbaru['ID_informasi']?>/<?= $informasiTerbaru['img'] ?>">Hapus</a></span>

                        </td>
                    </tr>

            </tbody>
        <?php endforeach; ?>
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
                <!-- <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li> -->
            </ul>
        </nav>
    </div>
    </div>
</section><!-- End Services Section -->
</main>