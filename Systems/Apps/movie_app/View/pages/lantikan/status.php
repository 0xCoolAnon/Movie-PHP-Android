
<div class="card">
	<?php
	//$ruj =  url::get(2);
	foreach(dokumen::list() as $d){
		$ruj = $d->d_no_fail;}
	
	
	?>
	<div class="card-header">
		<span class="fa fa-list"></span> Maklumat Lantikan
		
		<a href="<?= PORTAL ?>lantikan/list" class="btn btn-sm btn-primary"> Kembali</a>

	</div>
	<div class="card-body">
				<ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
							Maklumat Tender
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
							Maklumat Syarikat
						</a>
					</li>
				</ul>

			<div class="tab-content" id="pills-tabContent">
				<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
					<table class="table table-hover table-fluid table-bordered">
						<thead>
							
						</thead>
						
						<tbody>
							<?php
							echo $ruj;
							$tender = dokumen::getBy(["d_no_fail" =>$ruj]);
							if(count($tender) > 0)
							{ $tender = $tender[0];
							$dep = departments::getBy(["d_id"=> $tender->d_department])[0];
							?>
							<tr>
								<td class="text-center" width="20%"><span class="font-weight-bold mb-2 float-left">No. Dokumen</span></td>
								<td><?=$tender->d_no_dokumen ?></td>
							</tr>
							<tr>
								<td class="text-center" width="20%"><span class="font-weight-bold mb-2 float-left">No. Fail Rujukan</span></td>
								<td><?=$tender->d_no_fail ?></td>
							</tr>
							<tr>
								<td class="text-center" width="20%"><span class="font-weight-bold mb-2 float-left">Tajuk Dokumen</span></td>
								<td><?=$tender->d_tajuk ?></td>
							</tr>
							<tr>
								<td class="text-center" width="20%"><span class="font-weight-bold mb-2 float-left">Jabatan</span></td>
								<td><?=$dep->d_name ?></td>
							</tr>
							<tr>
								<td class="text-center" width="20%"><span class="font-weight-bold mb-2 float-left">Status</span></td>
								<td><?=DokumenStatus::get($tender->d_status) ?></td>
							</tr>
							<tr>
								<td class="text-center" width="20%"><span class="font-weight-bold mb-2 float-left">Sijil</span></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-center" width="20%"><span class="font-weight-bold mb-2 float-left">Tarikh Mula</span></td>
								<td><?=$tender-> d_iklan_mula ?></td>
							</tr>
							<tr>
								<td class="text-center" width="20%"><span class="font-weight-bold mb-2 float-left">Tarikh Akhir</span></td>
								<td><?=$tender-> d_iklan_tamat ?></td>
							<?php
							}else
							{
								new Alert("error","Data tidak dijumpai.");
							}
							?>
							</tr>
						</tbody>
					</table>
				</div>
				

				<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
				<table class="table table-hover table-fluid table-bordered">
					<?php
					$rujsykt = syarikat::getBy(["s_fail"=>$ruj]);
					
					if(count($rujsykt) > 0)
					{
						$rujsykt = $rujsykt[0];
						$usr = users::getBy(["u_id"=>$rujsykt->s_pemilik]);
						if(count($usr) > 0)
						{
							$usr = $usr[0];
						}else
						{
							new Alert("error","Tiada nama pemilik.");
						}

					 
					?>
						<thead>
							
						</thead>
						
						<tbody>
							<?php
							
							?>
							<tr>
								<td class="text-center" width="20%"><span class="font-weight-bold mb-2 float-left">Nama Pemilik</span></td>
								<td><?=$usr->u_full_name ?></td>
							</tr>
							<tr>
								<td class="text-center" width="20%"><span class="font-weight-bold mb-2 float-left">Nama Syarikat</span></td>
								<td><?=$rujsykt->s_nama ?></td>
							</tr>
							<tr>
								<td class="text-center" width="20%"><span class="font-weight-bold mb-2 float-left">No.Ssm</span></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-center" width="20%"><span class="font-weight-bold mb-2 float-left">Alamat Syarikat</span></td>
								<td><?=$rujsykt->s_alamat ?></td>
							</tr>
							<tr>
								<td class="text-center" width="20%"><span class="font-weight-bold mb-2 float-left">No. Telefon Syarikat</span></td>
								<td><?=$rujsykt->s_fon ?></td>
							</tr>
							<tr>
								<td class="text-center" width="20%"><span class="font-weight-bold mb-2 float-left">Email Syarikat</span></td>
								<td><?=$rujsykt->s_email ?></td>
							</tr>
							<tr>
								<td class="text-center" width="20%"><span class="font-weight-bold mb-2 float-left">No.Pendaftaran Syarikat</span></td>
								<td><?=$rujsykt->s_regno ?></td>
							</tr>
							<?php
							
							?>
						</tbody>
						<?php
							}else
							{
								new Alert("error","Tiada data dijumpai");
							}
						
						?>
					</table>
				</div>
				
			</div>

	</div>
</div>