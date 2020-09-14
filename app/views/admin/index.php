
<div class="container">
    <?php Pesan::pesanKesalahan();?>
    <?php session_unset(); ?>
    <form action="<?= BASEURL; ?>/admin/masuk" method="post">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username">
    </div>
    <div class="form-group">
        <label for="pwd">Password</label>
        <input type="password" class="form-control" id="pwd" name="pwd">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
    </form>

</div>

