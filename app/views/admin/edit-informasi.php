<div class="main">
    <div class="container">
        <center>
            <h2><?= $data['judul']; ?></h2>
            <br>    
            <ul>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <form action="<?= BASEURL; ?>/admin/editDataInformasi" method="post" enctype="multipart/form-data">
        <label for="fjudul">Judul Informasi:</label>
        <input type="hidden" name="ID_informasi" value="<?= $data['informasi']['ID_informasi'] ?>">
        <input type="text" name="judul_informasi" id="judul" value="<?= $data['informasi']['judul_informasi'] ?>" required><br>
        <label for="fimg">Gambar:</label>
        <img src="<?= BASEURL; ?>/public/img/<?= $data['informasi']['img'] ?>" style="width: 120px;float: center;margin-bottom: 5px;">
        <input type="file" name="img" id="img" required/><br>
        <label for="fkategori">Kategori:</label>
        <input type="text" name="kategori" id="kategori" value="<?= $data['informasi']['kategori'] ?>" required><br>
        <label for="ftext">Text:</label>
        <input type="text" name="text_informasi" id="text" value="<?= $data['informasi']['text_informasi'] ?>" required><br>
        <label for="fIdAdmin">ID admin:</label>
        <input type="text" name="ID_admin" id="IdAdmin"  value="<?= $_SESSION['ID_admin'];?>" readonly><br><br>
        <input type="text" name="waktu_upload" id="IdAdmin"  value="<?=  date("Y-m-d"); ?>" readonly><br><br>
        
        <button type="submit" value="Upload">Ubah</button>
        <button type="reset" name="reset" value="Cancel">Reset</button>
    </form>
</body>
            </ul>
        </center>
    </div>
</div>