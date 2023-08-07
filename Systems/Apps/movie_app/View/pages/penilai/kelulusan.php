<div class="row">
	<div class="col-md-12">
		
		<div class="card">
			<div class="card-header">
				<span class="fa fa-list"></span> Kelulusan Penilaian
				
				<a href="<?= PORTAL ?>penilai/syarikat" class="btn btn-sm btn-primary">
					<span class="fa fa-arrow-left"></span> Kembali
				</a>
			</div>
			
			<div class="card-body">
				<table class="table table-hover table-fluid table-bordered">
					<thead>
						<tr>
							<th class="text-center" width="15%">Syarikat</th>
							<th class="text-center" width="2%">Tarikh</th>
							<th class="text-center" width="2%">Status</th>
							<th class="text-center" width="2%">Catatan</th>
						</tr>
					</thead>
					
					<tbody>
					<h1>Kelulusan</h1>
					Pastikan semua dokumen telah di semak dan memenuhi syarat.
					<br /><br />
					<?php
						$ds_id = url::get(2);
						$ds = dokumen_submit::getBy(["ds_id"=>$ds_id]);
						if(count($ds)>0){
							$ds = $ds[0];
							$syarikat = syarikat::getBy(["s_id" => $ds->ds_syarikat]);
					?>
						<tr>
							<td ><?= $syarikat[0]->s_nama ?></td>
							<td class="text-center" width="2%"><?= $ds->ds_tarikh_submit ?></td>
							<td class="text-center" width="2%"><?=  ?></td>
							<td class="text-center" width="2%">tidak lengkap</td>							
						</tr>
					<?php
						}
					?>
					</tbody>
				</table>	
			</div>
			<div width="10%" class="text-center ">
				<form action="" method="post">
					<?php
						Controller::form("penilai", [
							"action"	=> "lulus"
						]);
					?>
					<button class="btn btn-sm btn-primary mb-2" >
						LULUS
					</button>
				</form>
				<form action="" method="post">
					<?php
						Controller::form("penilai", [
							"action"	=> "taklulus"
						]);
					?>
					<button class="btn btn-sm btn-danger mb-2" >
						TAK LULUS
					</button>
				</form>
			</div>
		</div> <br><br><br>
	</div>
</div>  