<?php
new Controller(["login"]);
?>

<div class="card bg-white p-4" style="max-width: 400px; margin: 0 auto; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
    <img src="<?= PORTAL ?>assets/img/logo.png" width="300" alt="Perbadanan Labuan">
    <h3><br><strong>Sistem ePerolehan PL<strong></h3>
    <?php
    Controller::alert();
    ?>

    <form class="form-signin" action="" method="POST">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" value="<?= Input::post("email") ?>" required autofocus />

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required />

        <div class="row">
            <div class="col-md-6 col-sm-6 col-6 offset-md-6 offset-sm-6 offset-6">
                <div class="checkbox mb-3 text-right">
                    <small><a href="recover-password.html" style="position: relative; top: -10px;">Reset kata laluan</a></small>
                </div>
            </div>
        </div>

        <?php
        Controller::form("login", [
            "action"    => "login"
        ]);
        ?>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Log Masuk</button>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <div class="checkbox mb-3">
                    <small>Daftar / Log masuk pertama kali? <a href="signup.html">Daftar!</a></small>
                </div>
            </div>
        </div>
    </form>
</div>