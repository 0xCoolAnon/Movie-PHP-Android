<script>
  	$(document).ready(function(){
  		$("#myInput").on("keyup", function() {
  			var value = $(this).val().toLowerCase();
  			$("#myTable tr").filter(function() {
  				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
  			});
  		});
  	});
  </script>
  
  <div class="card">
	<div class="card-header">
		<span class="fa fa-plus"></span> Tambah dokumen

		<a href= "<?= PORTAL ?>penilai/list" class="btn btn-sm btn-primary">
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
					Nama Petender:
					<input type="text" class="form-control" placeholder="Tajuk Dokumen" name="d_tajuk" value="<?=$d->d_tajuk ?>"><br>
				</div>

				<div class="col-md-6">
					No. Dokumen :
					<input type="text" placeholder="Nombor dokumen" name="d_no_dokumen" class="form-control" value="<?=$d->d_no_dokumen ?>" /> <br>
				</div>

				<div class="col-md-6">
					No. Bil Petender :
					<input type="text" placeholder="No. Bil Petender" name="d_no_fail" class="form-control" value="<?=$d->d_no_fail?>" /> <br>
				</div>

				<div class="col-md-6">
					Harga Tawaran (RM) :
					<input type="text" placeholder="Harga Tawaran" name="d_harga_dokumen" class="form-control" value="<?=$d->d_harga_dokumen?>" /> <br>
				</div>
				
				 <div class="col-md-6">
                     Alamat :
                     <textarea type="text" placeholder="Alamat" name="u_alamat" class="form-control" value="" disabled><?= $u->u_alamat ?> </textarea>
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
					
					<div class="form-check-inline">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input" name="d_keperluan_dokumen[]" value="PENYATA BANK">PENYATA BANK
						</label> 
					</div>
				</div>

					</button>
				</div>
			</form>
			<?php
				}
			?>
		</div>
	</div>
	


  
  
  
  
