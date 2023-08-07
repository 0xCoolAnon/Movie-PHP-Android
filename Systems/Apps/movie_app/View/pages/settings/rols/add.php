<div class="card">
	<div class="card-header">
		Tambah Rol Baru
		
		<a href="<?= PORTAL ?>settings/rols/list" class="btn btn-sm btn-primary"> 
			<span class="fa fa-arrow-left"></span> Kembali
		</a>
	</div>	
	
	<div class="card-body">
		<form action="" method="POST">
			<div class="row">
				<div class="col-md-6">
					Nama:
					<input type="text" class="form-control" placeholder="Name" name="name" />
					
					<div class="row">
						
						<div class="col-md-4">
							Status:
							<select class="form-control" name="status">
								<option value="1">Aktif</option>
								<option value="0">Tidak Aktif</option>
							</select><br />
						</div>
					</div>

				</div>
				
				<div class="col-md-12 text-center">
				<?php
					Controller::form("settings/rols", [
						"action"	=> "add"
					]);
				?>
					<button  class="btn btn-sm btn-success">
						<span class="fa fa-save"></span> Simpan
					</button>
				</div>
			</div>
		</form>
	</div>
</div>