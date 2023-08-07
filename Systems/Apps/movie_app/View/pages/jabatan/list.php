<div class="card">
	<div class="card-header">
		<span class="fa fa-list"></span> Senarai Jabatan
		
		<a href="<?= PORTAL ?>settings/jabatan/add" class="btn btn-primary btn-sm">
			<span class="fa fa-plus"></span> Tambah Jabatan
		</a>
	</div>
	
	<div class="card-body">
		<table class="table table-fluid table-hover">
			<thead>
				<tr>
                    <th class="text-center" width="5%">No</th>
					<th class="text-center">Code</th>
					<th class="text-center">Nama</th>
					<th class="text-center">Status</th>
					<th class="text-right" width="15%">:::</th>
				</tr>
			</thead>
			
			<tbody>
			<?php
				$no = 1;
				foreach(departments::list() as $de){
			?>
				<tr>
					<td class="text-center"><?= $no++ ?></td>
					<td class="text-center">
						<?= $de->d_code ?>
					</td>

					<td class="text-center">
						<?= $de->d_name ?>
					</td>

					<td class="text-center">
						<?= $de->d_status==1 ? "Aktif" : "Tidak Aktif" ?>
					</td>

					<td class="text-right">						
						<a href="<?= PORTAL ?>settings/jabatan/view/<?= $de->d_id ?>" class="btn btn-sm btn-warning">
							<span class="fa fa-edit"></span> Edit
						</a> 

						<a href="<?= PORTAL ?>settings/jabatan/delete/<?= $de->d_id ?>" class="btn btn-sm btn-danger">
							<span class="fa fa-trash"></span>
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