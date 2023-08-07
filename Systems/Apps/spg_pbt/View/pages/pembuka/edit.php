<?php
Controller::alert();
?>

<div class="card">
	<div class="card-header">
		<span class="fa fa-plus"></span> Tambah dokumen

		<a href= "<?= PORTAL ?>pembuka/list" class="btn btn-sm btn-primary">
			<span class="fa fa-arrow-left"></span> Kembali
		</a>
	</div>

	<?php
		$uid = url::get(2);
		
		$d = dokumen::getBy(["d_uid" => $uid]);
		
		if(count($d) > 0){
			$d = $d[0];
			$user = users::getBy(["u_id" => $d->d_user]);
			if(count($user) > 0){
				$user = $user[0]->u_name;
			}else{
				$user = "NIL";
			}
	?>

	<div class="card-body">
		<h5 class="text-center">PERBADANAN LABUAN</h5><br>
		<h5 class="text-center">SEBUT HARGA</h5><br><br>
		<h5 class="text-center">No Sebutan : <?= $d->d_no_fail ?></h5><br>
		<h5 class="text-center text-uppercase">Tajuk : <?= $d->d_tajuk ?></h5><br>
		<div class="row justify-content-between">
			<div class="col-4">
				<h5 class="text-center">Tarikh Ditutup : <?= $d->d_iklan_tamat ?></h5>
			</div>
			<div class="col-4">
				<h5 class="text-center">Jenis Sebutharga : xxxx</h5><br>
				<h5 class="text-center">Kepala yang dikepalakan : xxxxx</h5>
			</div>
		</div><br>
		<form action="" method="post" enctype="multipart/form-data">
		<div class="row justify-content-between text-center">
			<div class="col-4">
				Kos anggaran: <br>
				<input type="text" class="form-control" placeholder="Masukkan Nilai" name="kos_anggaran" value="<?= $d->d_anggaran_kos ?>">
			</div>
			<?php
				Controller::Form("pembuka", [
					"action" => "edit"
				]);
			?>
			<br>
			<button class="btn btn-sm btn-primary">
				Simpan
			</button>
			<div class="col-4">
				Tempoh anggaran : <br>
				<input type="text" class="form-control" placeholder="Masukkan Tempoh" name="tempoh_anggaran" value="<?= $d->d_anggaran_masa ?>">
			</div>
		</div>
		</form> <br>
		<table class="table table-hover table-fluid table-bordered">
			<thead>
				<tr>
					<th class="text-center" width="15%"><b>NO BIL PETENDER</b></th>
					<th class="text-center" width="15%"><b>SYARIKAT</b></th>
					<th class="text-center" width="15%"><b>TARIKH</b></th>
					<th class="text-center" width="15%"><b>HARGA ANGGARAN(RM)</b></th>
					<th class="text-center" width="15%"><b>TEMPOH ANGGARAN</b></th>
					<th class="text-center" width="15%"><b>USER</b></th>
				</tr>
			</thead> 

			<tbody> 
				<?php 
					$i = 1; 
					$d_uid=url::get(2);
					$dokumen = dokumen::getBy(["d_uid" => $d_uid]);
                    $d_id = !empty($dokumen) ? $dokumen[0]->d_id : null;

					foreach(dokumen_submit::list() as $ds){
						if ($ds->ds_dokumen == $d_id) { 
							$user = users::getBy(["u_id" =>  $ds->ds_user ]); 
							$syarikat = syarikat::getBy(["s_id" =>  $ds->ds_syarikat ]); 				
				?> 
				<tr>
					<td class="text-center"><?= $ds->ds_bil_petender?></td> 
					<td class="text-center">
						<?php 
							if(count($syarikat)>0){
								echo $syarikat[0]->s_nama;
							}else{
								echo "NILL";
							}
						?>
					</td>
					<td class="text-center"><?= $ds->ds_tarikh_submit?></td>
					<td class="text-center">RM <?= $ds->ds_nilai ?></td>
					<td class="text-center"><?= $ds->ds_tempoh ?></td> 
					<td class="text-center">
						<?php 
							if(count($user)>0){
								echo $user[0]->u_name;
							}else{
								echo "NILL";
							}
						?>
					</td>
				</tr>
				<?php 
					}}
				?>
			</tbody>
		</table>
	</div>

	<?php 
		}
	?>
</div>
	