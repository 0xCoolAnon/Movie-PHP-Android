<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<span class="fa fa-list"></span> Senarai Serahan Dokumen
			</div>

			<div class="card-body">
				<table class="table table-hover table-fluid table-bordered">
				
					<thead>
						<tr>	
							<th class="text-center" width="2%">No</th>
							<th class="text-center" width="15%">Dokumen</th>
							<th class="text-center" width="10%">Syarikat</th>
							<th class="text-center" width="10%">Tarikh</th>
							<th class="text-center" width="10%">Harga</th>
							<th class="text-center" width="10%">No. Resit</th>
							<th class="text-center" width="12%">: : :</th>
						</tr>
					</thead>
					
					<tbody>
						<?php
							//$result = DB::conn()->query("SELECT * FROM dokumen")->results();
							$i = 1;
							foreach(dokumen_syarikat::list() as $ds){
								$user = users::getBy(["u_id" => $ds->ds_user]);
								$department = departments::getBy(["d_id" => $ds->ds_syarikat]);
								$dokumen = dokumen::getBy(["d_id" => $ds->ds_dokumen])
							?>	
								<tr>
									<td class="text-center"><?= $i++ ?></td>
									<td class="text-center">
										<?php
											if(count($dokumen) > 0){
												$dokumen = $dokumen[0];
												echo $dokumen->d_tajuk;
											}else{
												echo "NIL";
											}
										?>
									</td>
									<td class="text-center">
										<?php
											if(count($department) > 0){
												$department = $department[0];
												echo $department->d_name;
											}else{
												echo "NIL";
											}
										?>	
									</td>
									<td class="text-center"><?= $ds->ds_tarikh ?></td>
									<td class="text-center"><?= $ds->ds_harga ?></td>
									<td class="text-center"><?= $ds->ds_no_resit ?></td>
									<td class="text-center">
										<a href="<?= PORTAL ?>serahan-dokumen/" class="btn btn-sm btn-warning">
										 <span class="fa fa-upload"></span>
											Muat Naik
										</a>
										
										<a href="<?= PORTAL ?>view-serahan-dokumen/" class="btn btn-sm btn-primary">
										 <span class="fa fa-eye"></span>
											Lihat
										</a>
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