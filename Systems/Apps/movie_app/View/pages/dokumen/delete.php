<div class="card">

	<div class="card-header">
		<span class="fa fa-trash"></span> Padam Dokumen
				
		<a href="<?= PORTAL ?>dokumen/list" class="btn btn-sm btn-primary">
			<span class="fa fa-arrow-left"></span> Kembali
		</a>
	</div>
	
	
    <div class="card-body">
	<?php
		$uid = url::get(2);
		
		$d = dokumen::getBy(["d_uid" => $uid]);
		
		if(count($d) > 0){
			$d = $d[0];
		
	?>
		<h4>Adakah anda pasti untuk memadam dokumen?</h4>
		
		<p>Maklumat yang dipadam tidak akan dapat dikembalikan.</p>

		<form action="" method="POST" enctype="multipart/form-data">
			<div class="row">
			
			
				<div class="col-md-12">
					Tajuk Dokumen :
					<input type="text" placeholder="Tajuk Dokumen" class="form-control" value="<?= $d->d_tajuk ?>" name="tajuk" disabled /> <br>
				</div>


				<div class="col-md-6">
					No. Dokumen :
					<input type="text" placeholder="Nombor dokumen" name="d_no_dokumen" class="form-control" value="<?= $d->d_no_dokumen ?>"disabled/> <br>
				</div>


				<div class="col-md-6">
					Fail rujukan :
					<input type="text" placeholder="Nombor fail rujukan" name="d_no_fail" class="form-control" value="<?= $d->d_no_fail ?>" disabled/> <br>
				</div>
			</div>
			
			
			<div class="text-center">
				<button class="btn btn-sm btn-danger">
					<span class="fa fa-trash"></span>
					Padam
				</button>
			</div>
			
			
			<?php
				Controller::form("dokumen", [
				"action"	=> "delete"
				]);
			?>
		</form>
		
		
	<?php
		}else{
			new Alert("error", "Tiada data dijumpai.");
		}
	?>
    </div>
</div>
