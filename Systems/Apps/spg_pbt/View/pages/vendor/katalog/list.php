<div class="card">
	<div class="card-header">
		<span class="fa fa-list"></span> Senarai Katalog
	</div>

	<div class="card-body">
		<?php
		$limit = 3;

		$cp = (int)Input::get("page");

		if ($cp < 1) {
			$cp = 1;
		}

		$sql = "SELECT * FROM items ";
		$data = [];

		if (Input::get("cari")) {
			$sql .= "WHERE (i_nama LIKE ? OR i_harga LIKE ? OR i_keterangan LIKE ? OR i_kod LIKE ?) AND i_syarikat = 1";
			$data = [
				"%" . Input::get("cari") . "%",
				"%" . Input::get("cari") . "%",
				"%" . Input::get("cari") . "%",
				"%" . Input::get("cari") . "%"
			];
		}

		$tis = DB::conn()->query($sql, $data)->results();

		$nitems = count($tis);

		if ($nitems > 0) {
			$nop = ceil($nitems / $limit);
		} else {
			$nop = 1;
		}

		if ($cp > $nop) {
			$cp = $nop;
		}

		$start = ($cp - 1) * $limit;

		$sql .= " LIMIT $start, $limit";

		$is = DB::conn()->query($sql, $data)->results();
		?>
		<form action="" method="GET" class="mb-2">
			<div class="row">
				<div class="col-md-4 mb-2">
					<div class="input-group">
						<input type="text" class="form-control" name="cari" placeholder="Carian..." value="<?= Input::get("cari") ?>" aria-label="Recipient's username" aria-describedby="basic-addon2">
						<div class="input-group-append mr-2">
							<button class="btn btn-primary "><span class="fas fa-search"></span> Cari </button>
						</div>
					</div>

				</div>

				<div class="col-md-8 text-right mb-2">
					<a href="<?= PORTAL ?>katalog?cari=<?= Input::get("cari") ?>&page=<?= $cp - 1 ?>" class="btn btn-primary">
						<span class="fa fa-arrow-left"></span>
					</a>

					<input type="text" class="form-control text-center" style="width: 100px; display: inline;" name="page" value="<?= $cp ?>" /> &nbsp;/ <?= $nop ?>&nbsp;

					<a href="<?= PORTAL ?>katalog?cari=<?= Input::get("cari") ?>&page=<?= $cp + 1 ?>" class="btn btn-primary">
						<span class="fa fa-arrow-right"></span>
					</a>
				</div>
			</div>

		</form>

		<table class="table table-hover table-fluid table-bordered">
			<thead>
				<tr>
					<th class="text-center">No</th>
					<th class="text-center">Kod</th>
					<th class="">Nama</th>
					<th class="text-right" width="20%">Harga (RM)</th>
					<th class="text-right">:::</th>
				</tr>
			</thead>

			<tbody>
				<?php
				if (count($is) > 0) {
					$no = 1;
					foreach ($is as $i) {
				?>
						<tr>
							<td class="text-center"><?= $no++ ?></td>
							<td class="text-center"><?= $i->i_kod ?></td>
							<td contenteditable="true" data-key="<?= $i->i_key ?>" class="nama"><?= $i->i_nama ?></td>

							<td class="text-right">
								<input type="text" class="form-control text-right harga" data-key="<?= $i->i_key ?>" value="<?= number_format($i->i_harga, 2) ?>" />
							</td>

							<td class="text-right">
								<a href="" class="btn btn-sm btn-warning">
									<span class="fa fa-edit"></span> Edit
								</a>

								<a href="" class="btn btn-sm btn-danger">
									<span class="fa fa-trash"></span>
								</a>
							</td>
						</tr>
					<?php
					}
				} else {
					?>
					<tr>
						<td colspan="5" class="text-center">Tiada maklumat dijumpai.</td>
					</tr>
				<?php
				}
				?>
			</tbody>
		</table>

		<div class="row">
			<div class="col-md-12 text-right mb-2">
				<form action="" method="GET">
					<a href="<?= PORTAL ?>katalog?cari=<?= Input::get("cari") ?>&page=<?= $cp - 1 ?>" class="btn btn-primary">
						<span class="fa fa-arrow-left"></span>
					</a>
					<input type="hidden" class="form-control" name="cari" value="<?= Input::get("cari") ?>" />
					<input type="text" class="form-control text-center" style="width: 100px; display: inline;" name="page" value="<?= $cp ?>" /> &nbsp;/ <?= $nop ?>&nbsp;

					<a href="<?= PORTAL ?>katalog?cari=<?= Input::get("cari") ?>&page=<?= $cp + 1 ?>" class="btn btn-primary">
						<span class="fa fa-arrow-right"></span>
					</a>
				</form>
			</div>
		</div>
	</div>
</div>

<script>
	$(".harga").on("keyup", function(e) {
		var harga = $(this).val();
		var i_key = $(this).data("key");

		$.ajax({
			method: "POST",
			url: PORTAL + "webservice/items/harga",
			data: {
				i_key: i_key,
				harga: harga
			}
		});
	});


	$(".nama").on("keyup", function(e) {
		var nama = $(this).text();
		var i_key = $(this).data("key");

		$.ajax({
			method: "POST",
			url: PORTAL + "webservice/items/nama",
			data: {
				i_key: i_key,
				nama: nama
			}
		});
	});
</script>