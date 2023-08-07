<div class="row">
	<div class="col-md-12">
		
		<div class="card">
			<div class="card-header">
				<span class="fa fa-list"></span> Padam Senarai Syarikat
				
				<a href="<?= PORTAL ?>lantikan/list" class="btn btn-sm btn-primary">
					<span class="fa fa-arrow-left"></span> Kembali
				</a>
			</div>
			
			<div class="card-body">
				<table class="table table-hover table-fluid table-bordered">
					<thead>
						<tr>
							<th class="text-center" width="0.5%">No</th>
							<th class="text-center" width="15%">Syarikat</th>
							<th class="text-center" width="2%">Tarikh</th>
							<th class="text-center" width="2%">Jabatan</th>
							<th class="text-center" width="2%">Tindakan</th>
						</tr>
					</thead>
					
					<tbody>
					<h3>Adakah anda pasti untuk menghapuskan rekod ini?</h3>
					Rekod ini akan dipadam secara kekal.
					<br /><br />
					<?php
						for($i = 1; $i <= 1; $i++){
						?>
						<tr>
							<td class="text-center" width="0.5%"><?= $i ?></td>
							<td >Darkz</td>
							<td class="text-center" width="2%">Silencer</td>
							<td class="text-center" width="2%">Great</td>
							<td class="text-center" width="2%">Dipadam</td>							
						</tr>
						<?php
						}
					?>
					</tbody>
				</table>	
			</div>
			<div class="text-center">
				<a href="<?= PORTAL ?>lantikan" id="delete" class="btn btn-sm btn-danger" >YA</a>
				<a href="<?= PORTAL ?>lantikan/list" class="btn btn-sm btn-primary">Tidak</a>
		</div>
		</div>
	</div>
</div>  