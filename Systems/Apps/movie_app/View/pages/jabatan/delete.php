<div class="card">
    <div class="card-header">
		<span class="fa fa-trash"></span> Padam Jabatan

        <a href="<?= PORTAL ?>settings/jabatan/" class="btn btn-sm btn-primary">
            Kembali
        </a>
	</div>
	<div class="card-body">
		<?php
			$dep = departments::getBy(["d_id" => url::get(3)]);
		
		?>
		<form action="" method="POST">
			<div class="row">
				<div class="col-md-6">
					Adakah anda pasti ingin membuang Jabatan bernama <b><?= $dep[0]->d_name ?></b>?
				</div>
				<div class="col-md-12 text-center">
					<?php
						Controller::form("jabatan", [
							"action"	=> "delete"
						]);
					?>
					<button class="btn btn-sm btn-danger">
						Pasti
					</button>
					<a href="<?= PORTAL ?>settings/jabatan/" class="btn btn-sm btn-primary">
						Kembali
					</a>
				</div>
			</div>
		</form>
	</div>
</div>