<div class="row">
	<div class="col-md-12">
		
		<div class="card">
			<div class="card-header">
				<span class="fa fa-list"></span> Senarai Syarikat
				
				<a href="<?= PORTAL ?>lantikan/list" class="btn btn-sm btn-primary">
					<span class="fa fa-arrow-left"></span> Kembali
				</a>
			</div>
			
			<div class="card-body">
				<table class="table table-hover table-fluid table-bordered">
					<thead>
						<tr>
							<th class="text-center" width="5%">No</th>
							<th>Nama Syarikat</th>
							<th class="text-center" width="15%">Tarikh</th>
							<th class="text-center" width="15%">Jabatan</th>
							<th class="text-right" width="10%">Tindakan</th>
						</tr>
					</thead>
					
					<tbody>
					<?php
						for($i = 1; $i <= 10; $i++){
						?>
						<tr>
							<td class="text-center"><?= $i ?></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>							
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