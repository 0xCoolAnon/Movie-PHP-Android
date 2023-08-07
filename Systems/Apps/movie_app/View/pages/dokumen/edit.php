<div class="card">
	<div class="card-header">
		<span class="fa fa-edit"></span> Kemaskini dokumen

		<a href= "<?= PORTAL ?>dokumen/list" class="btn btn-sm btn-primary">
			<span class="fa fa-arrow-left"></span>
			Kembali
		</a>
	</div>

	<div class="card-body">

	<?php
		$uid = url::get(2);
		
		$d = dokumen::getBy(["d_uid" => $uid]);
		
		if(count($d) > 0){
			$d = $d[0];
	?>
		<form action="" method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-12">
					Tajuk Dokumen:
					<input type="text" class="form-control" placeholder="Tajuk Dokumen" name="d_tajuk" value="<?=$d->d_tajuk ?>"><br>
				</div>

				<div class="col-md-6">
					No. Dokumen :
					<input type="text" placeholder="Nombor dokumen" name="d_no_dokumen" class="form-control" value="<?=$d->d_no_dokumen ?>" /> <br>
				</div>

				

				<div class="col-md-6">
					No. Fail Rujukan :
					<input type="text" placeholder="Nombor fail rujukan" name="d_no_fail" class="form-control" value="<?=$d->d_no_fail?>" /> <br>
				</div>

				<div class="col-md-6">
					Harga Dokumen (RM) :
					<input type="text" placeholder="0.00" name="d_harga_dokumen" class="form-control" value="<?=$d->d_harga_dokumen?>" /> <br>
				</div>
				
				<div class="col-md-6">
					Jabatan:
					<select class="form-control" name="d_department">
					<?php
					foreach(departments::list() as $dept){
					?>
						<option value="<?= $dept->d_id ?>" <?=$dept->d_id == $d->d_department ? "selected" : "" ?>>
							<?= $dept->d_name ?>
						</option>
						<?php
					}
					?>
					</select><br>
				</div>

				<div class="col-md-6">
						Tarikh Mula Iklan :
				<input type="date" class="form-control" placeholder="Tarikh Iklan Mula" name="d_iklan_mula" value="<?=$d->d_iklan_mula?>"> 
				</div>

				<div class="col-md-6">
						Tarikh Tamat Iklan :
				<input type="date" class="form-control" placeholder="Tarikh Iklan Tamat" name="d_iklan_tamat" value="<?=$d->d_iklan_tamat?>"> 
				</div>

				

				<div class="col-md-6">
				Status :
				<select class="form-control" name="d_status">
					<?php
						foreach(DokumenStatus::getAll() as $key => $s){
						?>
						<option value="<?= $key ?>" <?=$key == $d->d_status ? "selected" : "" ?>>
							<?= $s ?>
						</option>
						<?php
						}
					?>
					</select><br>
				</div>
									
				

				<div class="col-md-6">
				Fail:
					<div class="form-control">
						<input type="file"  name="u_file" /> <br>
					</div>
				</div><br>
				
				<div class="col-md-6"></br>
				Sijil:
				<div class="form-check-inline">
					<label class="form-check-label">
						<input type="checkbox" class="form-check-input" name="d_keperluan_dokumen[]" value="SSM">SSM
						</label>
				</div>

				<div class="form-check-inline">
					<label class="form-check-label">
						<input type="checkbox" class="form-check-input" name="d_keperluan_dokumen[]" value="CIDB">CIDB
						</label>
					</div>

					<div class="form-check-inline">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input" name="d_keperluan_dokumen[]" value="SPKK">SPKK
						</label>
					</div>

					<div class="form-check-inline">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input" name="d_keperluan_dokumen[]" value="MOF">MOF
						</label> 
					</div>
				</div>

				<div class="col-md-12 text-center">
					<?php
						Controller::Form("dokumen", [
							"action" => "edit"
						]);
					?>
					<br>
					<button class="btn btn-sm btn-primary">
						<span class="fa fa-save"></span> Simpan
					</button>
				</div>
			</form>
			<?php
				}
			?>
		</div>
	</div>
