<div class="card">
    <div class="card-header">
		Tambah Jabatan

        <a href="<?= PORTAL ?>settings/jabatan/" class="btn btn-sm btn-primary"> Kembali </a>
	</div>

	<div class="card-body">
		<form action="" method="POST">
			<div class="row">
				<div class="col-md-6">
					Nama Jabatan:
					<input type="text" class="form-control" name="d_name" placeholder="Nama Jabatan" value="" /><br />
				</div>
				<div class="col-md-6">
					Status:
					<select class="form-control" name="d_status">
						<option value="1" >Aktif</option>
						<option value="0" >Tidak Aktif</option>
					</select>
				</div>
				<div class="col-md-6">
					Code:
					<input type="text" class="form-control" name="d_code" placeholder="Code Jabatan" value="" /><br />
				</div>
				<div class="col-md-12 text-center">
					<?php
						Controller::form("jabatan", [
							"action"	=> "add"
						]);
					?>
					<button class="btn btn-sm btn-primary">
						<span class="fa fa-save"></span> Simpan Maklumat
					</button>	
				</div>
			</div>
		</form>
	</div>
</div>