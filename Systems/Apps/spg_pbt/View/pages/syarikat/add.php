<?php
Controller::alert();
?>

<div class="card">
	<div class="card-header">
		<span class="fa fa-plus"></span> Tambah dokumen

		<a href= "<?= PORTAL ?>syarikat/list" class="btn btn-sm btn-primary">
			<span class="fa fa-arrow-left"></span> Kembali
		</a>
	</div>

	<div class="card-body">
		<form action="" method="POST" enctype="multipart/form-data">
			<div class="row">
			<div class="col-md-4">
					No SSM:
					<input type="text" class="form-control" placeholder="No Pendaftaran" name="s_regno">
					<br>
				</div>

				
				<div class="col-md-6">
					Nama:
					<input type="text" class="form-control" placeholder="Nama" name="s_nama">
					<br>
				</div>
				
				<div class="col-md-12">
					Alamat:
            		<textarea class="form-control" placeholder="Alamat pemilik" name="s_alamat"></textarea>
            		<br />
				</div>
				
				<div class="col-md-6">
					No Telefon:
					<input type="text" class="form-control" placeholder="+60xx-xxx xxxx" name="s_fon"><br>
				</div>

				<div class="col-md-6">
					Email :
					<input type="text" placeholder="admin@domain.com" name="s_email" class="form-control" /><br>
				</div>
							
				<div class="col-md-6">
					Tarikh Daftar:
					<input type="date" class="form-control" name="s_tarikh_daftar" /><br />
				</div>
				
				<div class="col-md-6">
					Tarikh Tamat:
					<input type="date" class="form-control" name="s_tarikh_tamat" /><br />
				</div>
										
				<!-- <div class="col-md-6">
					Upload File:
					<div class="form-control">
						<input type="file"  name="s_pic" /><br>
					</div>
				</div>
				<br> -->

				<!-- <div class="col-md-6">
					<div class="col">
						Sijil:
						<div class="form-check-inline">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" name="s_fail[]" value="SSM">SSM
							</label>
						</div>

						<div class="form-check-inline">
							<label class="=form-check-label">
								<input type="checkbox" class="form-check-input" name="s_fail[]" value="CIDB">CIDB
							</label>
						</div>

						<div class="form-check-inline">
							<label class="=form-check-label">
								<input type="checkbox" class="form-check-input" name="s_fail[]" value="SPKK">SPKK
							</label>
						</div>

						<div class="form-check-inline">
							<label class="=form-check-label">
								<input type="checkbox" class="form-check-input" name="s_fail[]" value="MOF">MOF
							</label>
						</div>
					</div>
				</div> -->
				
				<div class="col-md-12 text-center">
					<?php
						Controller::Form("syarikat", [
							"action" => "add"
						]);
					?>
					<br>
					<button class="btn btn-sm btn-primary" onclick="showSuccessMessage();">
						<span class="fa fa-save"></span> Simpan
					</button>
				</div>
			</form>
		</div>
	</div>