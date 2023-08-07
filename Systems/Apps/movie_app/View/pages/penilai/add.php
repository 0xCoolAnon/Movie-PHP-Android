<div class="card">
    <div class="card-header">
        Tambah Baru

        <a href="<?= PORTAL ?>penilai/list" class="btn btn-sm btn-primary ">
            <span class="fa fa-arrow-left"></span> Kembali
        </a>
    </div>

    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    Nama Syarikat:
                                    <input type="text" placeholder="Nama pengguna" name="u_name" class="form-control" /> <br>
                                </div>


                                <div class="col-md-6">
                                   Emel Syarikat:
                                    <input type="email" placeholder="Alamat emel" name="u_email" class="form-control" /> <br>
                                </div>

                                <div class="col-md-6">
                                    No. Telefon:
                                    <input type="text" placeholder="Nombor telefon" name="u_phone" class="form-control" /> <br>
                                </div>

                                <div class="col-md-6">
                                    Peranan:
                                    <select class="form-control" name="u_role">
                                        <?php
                                        foreach (roles::list() as $role) {
                                        ?>
                                            <option value="<?= $role->r_id ?>" <?= isset($u->u_role) && $u->u_role == $role->r_id ? "selected"  : "" ?>>
                                                <?= $role->r_name ?>
                                            </option>
                                        <?php
                                        }
                                        ?>
                                    </select><br>
                                </div>

                                <div class="col-md-6">
                                    Alamat:
                                    <textarea type="text" placeholder="Alamat" name="u_alamat" rows="3" class="form-control" value=""> </textarea>
                                    <br>
                                </div>

                                <div class="col-md-6">
                                    Daerah:
                                    <input type="text" placeholder="Daerah" name="u_area" class="form-control" /> <br>
                                </div>

                                <div class="col-md-6">
                                    Negeri:
                                    <input type="text" placeholder="Negeri" name="u_state" class="form-control" /> <br>
                                </div>

                                <div class="col-md-6">
                                    Poskod:
                                    <input type="text" placeholder="Poskod" name="u_postcode" class="form-control" /> <br>
                                </div>

                                <div class="col-md-6">
                                    Negara:
                                    <input type="text" placeholder="Negara" name="u_country" class="form-control" /> <br>
                                </div>

                                <div class="col-md-6">
                                    Dokumen:
                                    <div class="form-control">
                                        <input type="file" accept="image/*" name="u_picture" />
                                    </div>
                                    <br /><br />
                                </div>

                                <div class="col-md-12 text-center">
                                    <?php
                                    Controller::form(
                                        "penilai",
                                        [
                                            "action" => "add"
                                        ]
                                    );
                                    ?>
                                    <button class="btn btn-sm btn-primary">
                                        <span class="fa fa-save"></span> Simpan
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>