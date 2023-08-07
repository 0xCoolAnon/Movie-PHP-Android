<div class="card">
    <div class="card-header">
        Senarai Pengguna

        <a href="<?= PORTAL ?>pengguna/add" class="btn btn-primary btn-sm">
			<span class="fa fa-plus"></span> Tambah Pengguna </a>
    </div>

    <div class="card-body">
        <table class="table table-fluid table-hover table-bordered">
            <thead>
                <tr>
                    <th class="text-center" width="2%">Bil. </th>
                    <th class="text-center" width="15%">Nama </th>
                    <th class="text-center" width="15%">Emel</th>
                    <th class="text-center" width="10%">Peranan </th>
                    <th class="text-center" width="10%">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    foreach (users::list() as $user) {
                ?>

                <tr>
                    <td class="text-center"><?= $no++ ?></td>
                    <td class="text-center"><?= $user->u_name ?></td>
                    <td class="text-center"><?= $user->u_email ?></td>
                    <td class="text-center">
                        <?php
                            foreach (roles::getBy(['r_id' => $user->u_role]) as $role) {
                                echo $role->r_name;
                            }
                        ?>
                            
                        </td>
                        <td class="text-center">
                            <a href="<?= PORTAL ?>pengguna/edit/<?= $user->u_id ?>" class="btn btn-sm btn-warning">
                                <span class="fa fa-edit"></span> Kemaskini
                            </a>

                            <a href="<?= PORTAL ?>pengguna/view/<?= $user->u_id ?>" class="btn btn-sm btn-success">
								<span class="fa fa-eye"></span> Lihat
							</a>

                        </td>
                    </tr>
                <?php 
                    } 
                ?>
            </tbody>
        </table>
    </div>
</div>