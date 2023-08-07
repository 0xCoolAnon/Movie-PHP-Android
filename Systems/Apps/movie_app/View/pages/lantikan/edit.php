<div class="row">
	<div class="col-md-12">
		
		<div class="card">
			<div class="card-header">
				<span class="fa fa-list"></span> Lantikan Senarai Syarikat
				
				<a href="<?= PORTAL ?>lantikan/list" class="btn btn-sm btn-primary">
					<span class="fa fa-arrow-left"></span> Kembali
				</a>
			</div>
			
			<div class="card-body">
				<table class="table table-hover table-fluid table-bordered">
					<thead>
						<tr>
							<th class="text-center" width="1%">No</th>
							<th class="text-center" width="15%">Nama Syarikat</th>
							<th class="text-center" width="2%">Tarikh</th>
							<th class="text-center" width="2%">Status</th>
							<th class="text-center" width="2%">Tindakan</th>
						</tr>
					</thead>
					
					<tbody>
						<?php
							//for($i = 1; $i <= 10; $i++){
							$i = 1;
							
							foreach(dokumen::list() as $d){
								$sykt = syarikat::getBy(["s_fail"=> $d->d_no_fail]);
								$dep = departments::getBy(["d_id"=> $d->d_department]);
						?>
						<tr>
							 <td class="text-center"><?= $i++ ?></td> 
							<td>
							<?php
								if(count($sykt) > 0){
									$sykt = $sykt[0];
									echo $sykt->s_nama;
								}else{
									echo "<i>Tiada maklumat dijumpai.</i>";
								}
							?>
							</td>
							<td class="text-center">
							<?=$d->d_tarikh_lantik ?>
							<td class="text-center">
							<?= DokumenStatus::get($d->d_status) ?>
							</td>
							<td class="text-center">
								<button onclick="alert('anda telah digondam')" class="btn btn-sm btn-primary">
									Lantik
								</button>
							</td>							
						</tr>
						<?php
						}
					?>
					</tbody>
				</table>
			</div>
		</div>
		
		
	</div>
</div>  