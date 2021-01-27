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
    <form action="<?= BASEURL; ?>/admin/CreateDokumentasi" method="post" enctype="multipart/form-data">
        <label for="fjudul">Judul Dokumentasi:</label>
        <input type="text" name="judul_dokumentasi" id="judul" required><br>
        <label for="fimg">Cover Gambar:</label>
        <input type="file" name="img_cover" id="img_cover" required/><br>
        <label for="fimg">Gambar Lainnya:</label>
        <input type="file" name="foto[]" id="foto" multiple="multiple" required /><br>
        <label for="ftext">Text:</label>
        <input type="text" name="text_dokumentasi" id="text" required><br>
        <label for="fIdAdmin">ID admin:</label>
        <input type="text" name="ID_admin" id="IdAdmin"  value="<?= $_SESSION['ID_admin'];?>" readonly><br><br>
        <input type="text" name="waktu_upload" id="IdAdmin"  value="<?=  date("Y-m-d"); ?>" readonly><br><br>
        
        <button type="submit" value="Upload">Submit</button>
    </form>
</body>
            </ul>
        </center>
    </div>
</div>