<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<span class="fa fa-list"></span> Butiran Lantikan
				<div class="input-group mb-2 mt-3">
					<input type="text" class="form-control" placeholder="No Dokumen" aria-label="Recipient's username" aria-describedby="basic-addon2">
					<div class="input-group-append mr-2">
						<button class="btn btn-primary" type="button"><span class="fas fa-search"></span> Cari </button>
					</div>
					<label for="search" class="m-2 ">Cari Dengan Tarikh :</label>
					<input type="date" id="search" name="search" class="form-control">
				</div>
			</div>
			<div class="card-body">
				<table class="table table-hover table-fluid table-bordered">
					<thead>
						<tr>
							<th class="text-center" width="0.5%"><span class="font-weight-bold mb-2">No</span></th>
							<th class="text-center" width="10%"><span class="font-weight-bold mb-2">Butiran Dokumen</span></th>
							<th class="text-center" width="2%"><span class="font-weight-bold mb-2">Tarikh Lantikan</span></th>
							<th class="text-center" width="2%"><span class="font-weight-bold mb-2">Jabatan</span></th>
							<th class="text-center" width="2%"><span class="font-weight-bold mb-2">Status</span></th>
							<th class="text-center" width="2%"><span class="font-weight-bold mb-2">Tindakan</span></th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 1;
						foreach (dokumen::list() as $d) {
							$dep = departments::getBy(["d_id" => $d->d_department]);
						?>
						<tr>
							<td class="text-center"><?= $i++ ?></td>
							<td class="text-left">
								<strong>Tajuk :</strong> <?= $d->d_tajuk ?><br />
								<strong>No Fail :</strong> <?= $d->d_no_fail ?><br />
								<strong>No Dokumen :</strong> <?= $d->d_no_dokumen ?><br />
								<strong>Tarikh Iklan :</strong> <?= $d->d_iklan_mula ?><br />
								<strong>Tarikh Iklan Tutup :</strong> <?= $d->d_iklan_tamat ?><br />
							</td>
							<td class="text-center"><?= $d->d_tarikh_lantik ?></td>
							<td class="text-center">
							<?php
								if(count($dep) > 0){
									$dep = $dep[0];
									echo $dep->d_name;
								}else{
									echo "NIL";
								}
							?>
							</td>
							<td class="text-center"><?= DokumenStatus::get($d->d_status) ?></td>
							<td>
								<div class="row">
									<div class="col text-center">
										<a href="<?= PORTAL ?>lantikan/edit/<?= $d->d_uid ?>" class="btn btn-sm btn-warning">
											<span class="fa fa-edit"></span>
										</a>
										<a href="<?= PORTAL ?>lantikan/status/<?= $d->d_uid ?>" class="btn btn-sm btn-success">
											<span class="fa fa-eye"></span>
										</a>
										
									</div>
								</div>
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
