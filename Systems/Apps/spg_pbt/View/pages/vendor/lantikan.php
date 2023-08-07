<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<span class="fa fa-list"></span> Senarai Lantikan Dokumen
			</div>

			<div class="card-body">
				<table class="table table-hover table-fluid table-bordered">
				
					<thead>
						<tr>	
							<th class="text-center" width="5%">No</th>
							<th class="text-center" width="15%">Dokumen</th>
                            <th class="text-center" width="15%">Syarikat</th>
							<th class="text-center" width="10%">Tarikh Dilantik</th>
							<th class="text-center" width="10%">Tarikh Mula Operasi</th>
							<th class="text-center" width="10%">Tarikh Tamat Operasi</th>
							<th class="text-center" width="8%">: : :</th>
						</tr>
					</thead>
					
					<tbody>
						<?php
							$i = 1;
							foreach(lantikan::list() as $l){
								$d = dokumen::getBy(["d_id" => $l->l_dokumen]);
								$s = syarikat::getBy(["s_id" => $l->l_syarikat]);
							?>	
								<tr>
									<td class="text-center"><?= $i++ ?></td>
									<td class="text-center">
										<?php
											if(count($d) > 0){
												$d = $d[0];
												echo $d->d_tajuk;
											}else{
												echo "NIL";
											}
										?>
									</td>
                                    <td class="text-center">
										<?php
											if(count($s) > 0){
												$s = $s[0];
												echo $s->s_nama;
											}else{
												echo "NIL";
											}
										?>
									</td>
									<td class="text-center"><?= $l->l_tarikh_lantikan ?></td>
									<td class="text-center"><?= $l->l_tarikh_mula ?></td>
									<td class="text-center"><?= $l->l_tarikh_tamat ?></td>
									<td class="text-center">
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