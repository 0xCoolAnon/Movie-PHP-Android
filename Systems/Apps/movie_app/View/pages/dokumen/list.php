<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<span class="fa fa-list"></span> Senarai Dokumen
				<a href="<?= PORTAL ?>dokumen/add" class="btn btn-sm btn-primary">
					<span class="fa fa-plus"></span> Tambah Baru
				</a>
			</div>

			<div class="card-body">
				<table class="table table-hover table-fluid table-bordered">
					<thead>
						<tr>
							<th class="text-center" width="5%">No</th>
							<th class="text-center" width="15%">Tajuk</th>
							<th class="text-center" width="10%">No. Dokumen</th>
							<th class="text-center" width="10%">No. Fail Rujukan</th>
							<th class="text-center" width="10%">Jabatan</th>
							<th class="text-center" width="10%">Status</th>
							<th class="text-center" width="8%">: : :</th>
						</tr>
					</thead>
					
					<tbody>
					<?php
						//$result = DB::conn()->query("SELECT * FROM dokumen")->results();
						$i = 1;
						foreach(dokumen::list() as $d){
							$user = users::getBy(["u_id" => $d->d_user]);
							$department = departments::getBy(["d_id" => $d->d_department]);
							
						?>
						<tr>
							<td class="text-center"><?= $i++ ?></td>
							<td class="text-center"><?= $d->d_tajuk ?></td>
							<td class="text-center"><?= $d->d_no_dokumen ?></td>
							<td class="text-center"><?= $d->d_no_fail ?></td>
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
							<td class="text-center" style="color: green;"><?= DokumenStatus::get($d->d_status) ?></td>
							
							<td class="text-center">
							<a href="<?= PORTAL ?>dokumen/edit/<?= $d->d_uid ?>" class="btn btn-sm btn-warning">
							 <span class="fa fa-edit"></span></a>

							<a href="<?= PORTAL ?>dokumen/delete/<?= $d->d_uid ?>" class="btn btn-sm btn-danger">
							 <span class="fa fa-trash"></span></a>

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