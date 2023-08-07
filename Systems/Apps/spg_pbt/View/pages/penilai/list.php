<div class="row">
	<div class="col-md-12">
		
		<div class="card">
			<div class="card-header">
				<span class="fa fa-list"></span> Dokumen
				
				
			</div>
			
			<div class="card-body">
				<table class="table table-fluid table-bordered">
					<thead>
						<tr>
							<th class="text-center" width="1%">No</th>
							<th class="text-center" width="12%">Dokumen</th>
							<th class="text-center" width="10%">Tarikh Mula Iklan</th>
							<th class="text-center" width="10%">Tarikh Tutup</th>
							<th class="text-center" width="10%">Senarai Hantar</th>
							<th class="text-center" width="10%">Tindakan</th>
						</tr>
					</thead>
					
					<tbody>
					<?php
						$i = 1;
						foreach(dokumen::list() as $d){
							$listdokumen = dokumen_submit::getBy(["ds_dokumen" => $d->d_id]);
							$kiradokumen = count($listdokumen);
							$harini = date("Y-m-d");
							$iklantamat = date("Y-m-d", strtotime($d->d_iklan_tamat));
							if ($iklantamat < $harini) {
						?>
						<tr>
							<td class="text-center"><?= $i++ ?></td>
							<td>
								<b>Tajuk : </b><?= $d->d_tajuk ?><br>
								<b>No Fail : </b><?= $d->d_no_fail ?><br>
								<b>No Dokumen : </b><?= $d->d_no_dokumen ?><br>
							</td>
							<td class="text-center"><?= $d->d_iklan_mula ?></td>
							<td class="text-center"><?= $d->d_iklan_tamat ?></td>
							<td class="text-center"><?= $kiradokumen ?></td>
							<td class="text-center">
								<a href="<?= PORTAL ?>penilai/syarikat/<?= $d->d_uid ?>" class="btn btn-sm btn-success">
									<span class="fa fa-eye"></span> Lihat
								</a>
							</td>
						</tr>
						<?php
							}
						}
						?>
				    </tbody>
				</table>
			</div>
		</div>

	</div>
</div>