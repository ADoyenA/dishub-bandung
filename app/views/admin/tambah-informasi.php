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
    <form action="<?= BASEURL; ?>/admin/CreateInformasi" method="post">
        <label for="fjudul">Judul Informasi:</label>
        <input type="text" name="judul_informasi" id="judul" required><br>
        <label for="fimg">Gambar:</label>
        <input type="file" name="img" id="img" required/><br>
        <label for="fkategori">Kategori:</label>
        <input type="text" name="kategori" id="kategori" required><br>
        <label for="ftext">Text:</label>
        <input type="text" name="text_informasi" id="text" required><br>
        <label for="fIdAdmin">ID admin:</label>
        <input type="text" name="ID_admin" id="IdAdmin"  value="<?= $_SESSION['ID_admin'];?>" readonly><br><br>
        <input type="text" name="waktu_upload" id="IdAdmin"  value="<?=  date("Y-m-d"); ?>" readonly><br><br>
        
        <button type="submit">Submit</button>
    </form>
</body>
            </ul>
        </center>
    </div>
</div>