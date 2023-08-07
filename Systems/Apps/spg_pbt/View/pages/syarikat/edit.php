<div class="card">
	<div class="card-header">
		<span class="fa fa-edit"></span> Kemaskini Maklumat Syarikat

		<a href="<?= PORTAL ?>syarikat/list" class="btn btn-sm btn-primary">
			<span class="fa fa-arrow-left"></span> Kembali
		</a>
	</div>

	<div class="card-body">
		<?php
		$s = syarikat::getBy(["s_key" => url::get(2)]);

		if (count($s) > 0) {
			$s = $s[0];
		?>
		<ul class="nav nav-pills" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" data-toggle="pill" href="#home">Maklumat Pemilik</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="pill" href="#menu1">Maklumat Syarikat</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="pill" href="#menu2">Statistik Tender Dibeli</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="pill" href="#menu3">Statistik Tender Dilantik</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="pill" href="#menu4">Laporan MRK</a>
			</li>
		</ul>

		<!-- Tab panes -->

		<div class="tab-content">
			<div id="home" class="container tab-pane active">
				<?php
					$u = users::getBy(["u_id" => $s->s_user]);

					if (count($u) > 0) {
						$u = $u[0];
				?>
				<br />
				<h4>Maklumat Pemilik</h4>

				<form action="" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-6">
							Nama:
							<input type="text" placeholder="Nama pengguna" name="s_nama" class="form-control" value="<?= $u->u_name ?>">
							<br />
						</div>

						<div class="col-md-6">
							No Telefon:
							<input type="text" placeholder="No Telefon" name="s_fon" class="form-control" value="<?= $u->u_phone ?>" />
							<br />
						</div>

						<div class="col-md-6">
							Email:
							<input type="text" placeholder="email@domain" name="s_email" class="form-control" value="<?= $u->u_email ?>" /><br />
						</div>

						<br />
						<div class="col-md-12 text-center">
							<?php
							Controller::form(
								"syarikat",
								[
									"action" => "edit"
								]
							);
							?>

							<button class="btn btn-sm btn-primary">
								<span class="fa fa-save"></span> Simpan
							</button>
						</div>
					</div>
				</form>
				<?php
					}
				?>
				<?php
					}
				?>
				</div>

				<div id="menu1" class="container tab-pane fade">
					<br>
					<h4>Maklumat Syarikat</h4>
					<form action="" method="post" enctype="multipart/form-data">

						No SSM:
						<input type="text" class="form-control" placeholder="No Pendaftaran Syarikat (No. SSM)" id="s_regno" value="<?= $s->s_regno ?>" /><br />

						Nama:
						<input type="text" class="form-control" placeholder="Nama" id="nama" value="<?= $s->s_nama ?>" /><br />

						No Telefon:
						<input type="tel" class="form-control" placeholder="+60xx-xxx xxxx" id="telefon" value="<?= $s->s_fon ?>" /><br />

						Email:
						<input type="email" class="form-control" placeholder="email@domain.com" id="email" value="<?= $s->s_email ?>" /><br />

						Alamat:
						<textarea class="form-control" placeholder="Alamat pemilik"><?= $s->s_alamat ?></textarea><br />

						Senarai Sijil:
						<div class="form-check-inline">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value=""> MOF
							</label>
						</div>

						<div class="form-check-inline">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value=""> SPKK
							</label>
						</div>

						<div class="form-check-inline">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value=""> CIDB
							</label>
						</div>

						<br /><br />
						<div class="col-md-12 text-center">
							<?php
							Controller::form(
								"syarikat",
								[
									"action" => "edit"
								]
							);
							?>

							<button class="btn btn-sm btn-primary">
								<span class="fa fa fa-save"></span> Simpan
							</button>
						</div>
					</form>
					
				</div>

				<div id="menu2" class="container tab-pane fade">
					<br>
					<h3>Senarai Tender Dibeli</h3>
					<form action="" method="post" enctype="multipart/form-data">

						<table class="table table-hover table-fluid table-bordered">
							<thead>
								<tr>
									<th class="text-center" width="1%">No</th>
									<th class="text-center" width="10%">Butiran Dokumen</th>
									<th class="text-center" width="5%">Tarikh</th>
								</tr>
							</thead>

							<tbody>
								<?php
								// $result = DB::conn()->query("SELECT * FROM dokumen")->results();
								$i = 1;
								foreach (syarikat::list() as $d) {
								?>
									<tr>
										<td class="text-center"><?= $i++ ?></td>
										<td class="text-center"><?= $d->s_nama ?></td>
										<td class="text-center"><?= $d->s_alamat ?></td>
									</tr>
								<?php
								}
								?>
							</tbody>
						</table>
					</form>
				</div>

				<div id="menu3" class="container tab-pane fade">
					<br>
					<h3>Senarai Tender Dilantik</h3>
					<form action="" method="post" enctype="multipart/form-data">

						<table class="table table-hover table-fluid table-bordered">
							<thead>
								<tr>
									<th class="text-center" width="1%">No</th>
									<th class="text-center" width="10%">Butiran Dokumen</th>
									<th class="text-center" width="5%">Tarikh</th>
								</tr>
							</thead>

							<tbody>
								<?php
									//$result = DB::conn()->query("SELECT * FROM dokumen")->results();
									$i = 1;
									foreach (dokumen::list() as $l) {
								?>
									<tr>
										<td class="text-center"> <?= $l->d_id ?></td>
										<td class="text-center"> <?= $l->d_no_fail ?></td>														
										<td class="text-center"> <?= $l->d_tarikh_lantik ?></td>			
											<?php
												}	
											?>
													
									</tr>
										</td>						
							</tbody>
						</table>
					</form>
					
				</div>

				<div id="menu4" class="container tab-pane fade">
			    <br>
			    <h2>Laporan MRK</h2>
			    <form action="" method="post" enctype="multipart/form-data">
			    	<div class="row" disabled>
			        <?php
			        // Sample data
			        $d_tajuk = "123456789";
			        $d_no_fail = "123456";
			        $d_no_dokumen = "5023113";
			        $butiran_dokumen = "Tajuk : " . $d_tajuk . "\n" .
			                           "No. Fail : " . $d_no_fail . "\n" .
			                           "No. Dokumen : " . $d_no_dokumen . "\n"
			        ?>
			        	<div class="col-md-6" disabled>
			        		<strong>Butiran Dokumen :</strong>
			        		<textarea placeholder="Butiran Dokumen" name="butiran_dokumen" class="form-control" rows="3"><?php echo $butiran_dokumen; ?></textarea>
			        		<br />
			        	</div>

			        <?php
				    // Sample data
				    $u_no_ssm = "123456";
				    $u_nama = "test";
				    $butiran_syarikat = "No. SSM : " . $u_no_ssm . "\n" .
				                        "Nama Syarikat : " . $u_nama . "\n"
			        ?>

			        <div class="col-md-6">
			            <strong>Butiran Syarikat:</strong>
			                <textarea type="text" placeholder="No Telefon" name="s_fon" class="form-control" rows="2"/><?php echo $butiran_syarikat; ?></textarea>
			                <br />
			            </div>

			            <div class="col-md-6">
			                <strong>Peratusan Kontrak :</strong>
			                <input type="text" placeholder="%" name="s_email" class="form-control" value="%" /><br />
			            </div>

			            <div class="col-md-6">
			                <strong>Peratusan Pembekal :</strong>
			                <input type="text" placeholder="%" name="s_email" class="form-control" value="%" /><br />
			            </div>

			            <div class="col-md-6">
			                <strong>Tarikh Kemaskini :</strong>
			                <input type="text" placeholder="Tarikh Kemaskini" name="s_email" class="form-control" value="" /><br />
			            </div>
			        </div>
			    </form>
			</div>

			</div>
		</div>
	</div>
