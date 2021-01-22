<div class="main">
    <div class="container">
        <center>
            <h2>SELAMAT DATANG DI HALAMAN DASBORD ADMIN</h2>
            <br>    
            <ul>
                <li><a href="<?= BASEURL; ?>/admin/tambahInformasi">Tambah Informasi</a></li>
                <li><a href="<?= BASEURL; ?>/admin/tambahDokumentasi">Tambah Dokumentasi</a></li>
            </ul>

            <br>
            <br>
            <h3>LOG Akvitas</h3>
            <ol>
            <?php foreach ($data['log']['body'] as $log) : ?>
                <li><?= $log['action'] ?> Data <?= $log['data'] ?> Pada Tanggal <?= $log['tanggal'] ?></li>
            <?php endforeach; ?>
            </ol>  

        </center>
    </div>
</div>