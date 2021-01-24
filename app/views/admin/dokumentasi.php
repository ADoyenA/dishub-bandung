<main>
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Dokumentasi</h2>
                <p>Postingan Dokumentasi Terbaru</p>
            </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="5%" scope="col">No</th>
                        <th width="75%" scope="col">Judul Dokumentasi</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>
                            <span class="badge rounded-pill bg-primary">Website</span>
                            <span class="badge rounded-pill bg-primary">Detail</span>
                            <span class="badge rounded-pill bg-primary">Hapus</span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="col">
                <p>Mulai menambahkan postingan informasi terbaru dengan klik <a href=""> tambah dokumentasi </a> ini ! </p>
            </div>
        </div>
        </div>
    </section><!-- End Services Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Dokumentasi</h2>
                <p>Tabel Dokumentasi</p>
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
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="5%" scope="col">No</th>
                        <th width="75%" scope="col">Judul Dokumentasi</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $row = 0 ?>
                <?php foreach ($data['dokumentasi']['body'] as $dokumentasi) : ?>
                <?php $addRow = $row + 1 ?>
                <?php  $row = $addRow ?>
                    <tr>
                    <th scope="row"><?= $addRow ?></th>
                        <td><?= $dokumentasi['judul_dokumentasi'] ?></td>
                        <td>
                            <span class="badge rounded-pill bg-primary">Website</span>
                            <span class="badge rounded-pill bg-primary">Detail</span>
                            <span class="badge rounded-pill bg-primary">Hapus</span>
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