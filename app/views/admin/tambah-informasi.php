<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2><?= $data['judul']; ?></h2>
                <ol>
                    <li><a href="<?= BASEURL; ?>/admin/informasi">Informasi</a></li>
                    <li><?= $data['judul']; ?></li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="row">
                <div class="col">
                    <div class="panel-body">
                        <form role="form">
                            <div class="form-group">
                                <label for="fjudul">Judul Informasi</label>
                                <input type="text" class="form-control" placeholder="Masukkan Judul Informasi" name="judul_informasi" id="judul" required>
                            </div>
                            <div class="form-group">
                                <label for="fimg">Gambar</label>
                                <input type="file" name="img" id="img" required>
                                <p class="help-block">Silahkan memasukkan Gambar.</p>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="fkategori">Kategori</label>
                                <select class="form-control m-bot15">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="ftext">Text</label>
                                <textarea class="form-control" placeholder="Input Text" name="text_informasi" id="text" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">ID Admin</label>
                                <input type="text" class="form-control" name="ID_admin" id="IdAdmin" value="<?= $_SESSION['ID_admin']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tanggal</label>
                                <input type="text" class="form-control" name="waktu_upload" id="IdAdmin" value="<?= date("Y-m-d"); ?>" readonly>
                            </div>
                            <input class="btn btn-primary" type="submit" value="Submit">
                            <input class="btn btn-primary" type="reset" value="Reset">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <form action="<?= BASEURL; ?>/admin/CreateInformasi" method="post">
        <label for="fjudul">Judul Informasi:</label>
        <input type="text" name="judul_informasi" id="judul" required><br>
        <label for="fimg">Gambar:</label>
        <input type="file" name="img" id="img" required /><br>
        <label for="fkategori">Kategori:</label>
        <input type="text" name="kategori" id="kategori" required><br>
        <label for="ftext">Text:</label>
        <input type="text" name="text_informasi" id="text" required><br>
        <label for="fIdAdmin">ID admin:</label>
        <input type="text" name="ID_admin" id="IdAdmin" value="<?= $_SESSION['ID_admin']; ?>" readonly><br><br>
        <input type="text" name="waktu_upload" id="IdAdmin" value="<?= date("Y-m-d"); ?>" readonly><br><br>

        <button type="submit">Submit</button>
    </form>