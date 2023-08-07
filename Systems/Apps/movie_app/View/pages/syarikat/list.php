
<div class="row">
  <div class="col-md-12">
    <div class="card">
     

<div class="card">
    <div class="card-header">
        <span class="fa fa-list"></span>Senarai Syarikat


        <a href="<?= PORTAL ?>syarikat/add" class="btn btn-sm btn-primary">
					<span class="fa fa-plus"></span> Tambah Baru</a>
      </div>



      <div class="card-body">
        <table class="table table-hover table-fluid table-bordered">
          <thead>
            <tr>
              <th class="text-center" width="1%">No</th>
              <th class="text-center" width="10%">Nama Syarikat</th>
              <th class="text-center" width="5%">Alamat</th>
              <th class="text-center" width="10%">Tindakan</th>
            </tr>
          </thead>

          <tbody>
           	<tbody>
					<?php
						//$result = DB::conn()->query("SELECT * FROM dokumen")->results();
						$i = 1;
						foreach(syarikat::list() as $d){
					?>
						<tr>
							<td class="text-center"><?= $i++?></td>
							<td class="text-center"><?= $d->s_nama ?></td>
							<td class="text-center"><?= $d->s_alamat ?></td>
							<td class="text-center">
								<a href="<?= PORTAL ?>syarikat/edit/<?= $d->s_key ?>" class="btn btn-sm btn-warning">
									<span class="fa fa-edit"></span> Kemaskini
								</a>


								<a href="<?= PORTAL ?>syarikat/delete/<?= $d->s_key ?>" class="btn btn-sm btn-danger">
									<span class="fa fa-trash"></span> Padam
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