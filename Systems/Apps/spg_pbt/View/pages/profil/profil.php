<?php
    $defaultImagePath = PORTAL . "assets/images/profile/default_prof_pic.png"; 

    new Controller(["profil"]);
    $u = Session::get("user")->u_id;
    $gud = users::getBy(["u_id" => $u]);

    if (count($gud) > 0) {
        $gud = $gud[0];
    } else {
        echo "No data found!";
    }

    switch (url::get(1)) {
        case "":
?>

<div class="card">
    <div class="card-header">
        <a class="btn btn-sm btn-primary" href="<?php echo PORTAL ?>profil/edit/<?php echo $u ?>">
            <span class="fa fa-edit"></span> Edit Pengguna
        </a>
    </div>

    <div class="card-body">
        <form action="" method="get">
            <div class="row">
                <div class="col-md-4">
                    <img src="<?= empty($gud->u_picture) ? $defaultImagePath : PORTAL . "assets/images/profile/" . $gud->u_picture ?>" class="img-fluid rounded-circle" alt="Profile Picture">
                </div>

                <div class="col-md-8">
                    <div class="form-group">
                        <label for="u_name">Nama Pengguna:</label>
                        <input type="text" class="form-control" id="u_name" placeholder="Name" value="<?= $gud->u_name ?>" disabled>
                    </div>

                    <div class="form-group">
                        <label for="u_ic">Nombor IC:</label>
                        <input type="text" class="form-control" id="u_ic" placeholder="IC" value="<?= $gud->u_ic ?>" disabled>
                    </div>

                    <div class="form-group">
                        <label for="u_alamat">Alamat:</label>
                        <input type="text" class="form-control" id="u_alamat" placeholder="Alamat" value="<?= $gud->u_alamat ?>" disabled>
                    </div>

                    <div class="form-group">
                        <label for="u_email">Email:</label>
                        <input type="text" class="form-control" id="u_email" placeholder="Email" value="<?= $gud->u_email ?>" disabled>
                    </div>

                    <div class="form-group">
                        <label for="u_password">Kata laluan:</label>
                        <input type="password" class="form-control" id="u_password" placeholder="Kata laluan" disabled>
                    </div>

                    <div class="form-group">
                        <label for="u_phone">Nombor Telefon:</label>
                        <input type="text" class="form-control" id="u_phone" placeholder="Phone" value="<?= $gud->u_phone ?>" disabled>
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>

<?php
    break;
    case "edit":
?>

<div class="card">
    <div class="card-header">
        <a class="btn btn-sm btn-primary" href="<?php echo PORTAL ?>profil">
            <span class="fa fa-arrow-left"></span> Kembali
        </a>
    </div>

    <div class="card-body">
        <form action="" method="POST">
            <div class="row">
                <div class="col-md-4">
                    <img src="<?= empty($gud->u_picture) ? $defaultImagePath : PORTAL . "assets/images/profile/" . $gud->u_picture ?>" class="img-fluid rounded-circle" alt="Profile Picture">
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="u_name"> Nama Pengguna: </label>
                        <input type="text" name="u_name" class="form-control" id="u_name" placeholder="Name" value="<?= $gud->u_name ?>">
                    </div>

                    <div class="form-group">
                        <label for="u_ic"> Nombor IC: </label>
                        <input type="text" name="u_ic" class="form-control" id="u_ic" placeholder="IC" value="<?= $gud->u_ic ?>">
                    </div>

                    <div class="form-group">
                        <label for="u_alamat">Alamat:</label>
                        <input type="text" name="u_alamat" class="form-control" id="u_alamat" placeholder="Alamat" value="<?= $gud->u_alamat ?>">
                    </div>

                    <div class="form-group">
                        <label for="u_email">Email:</label>
                        <input type="text" class="form-control" id="u_email" placeholder="Email" value="<?= $gud->u_email ?>">
                    </div>

                    <div class="form-group">
                        <label for="u_password"> Password: </label>
                        <input type="password" name="u_password" class="form-control" id="u_password" placeholder="Password" value="<?= $gud->u_password ?>">
                    </div>

                    <div class="form-group">
                        <label for="u_phone">Nombor Telefon:</label>
                        <input type="text" name="u_phone" class="form-control" id="u_phone" placeholder="Phone" value="<?= $gud->u_phone ?>">
                    </div>
                </div>

                <div class="col-md-12 text-center">
                    <?php
                        Controller::form("profil", [
                            "action"    => "edit"
                        ]);
                    ?>

                    <button class="btn btn-sm btn-success">
                        <span class="fa fa-save"></span> Simpan Maklumat
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
    break;
    }
?>
