<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<table class="table table-hover table-fluid table-bordered">
					<thead>
						<tr>
							<th class="text-center" width="0.5%"><span class="mb-2">No</span></th>
							<th class="text-center" width="10%"><span class="mb-2">Butiran Dokumen</span></th>
							<th class="text-center" width="2%"><span class="mb-2">Butiran Bayaran</span></th>
							<th class="text-center" width="2%"><span class="mb-2">Tarikh</span></th>
							<th class="text-center" width="4%"><span class="mb-2"></span></th>
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
							<td class="text-center"><?= DokumenStatus::get($d->d_status) ?></td>
							<td>
								<div class="row">
									<div class="col text-center">
										<a href="<?= PORTAL ?>lantikan/edit/" class="btn btn-sm btn-warning">
											<span class="fa fa-download"></span> Muat Turun
										</a>
										<a href="<?= PORTAL ?>lantikan/status/" class="btn btn-sm btn-success">
											<span class="fa fa-eye"></span> Lihat
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
