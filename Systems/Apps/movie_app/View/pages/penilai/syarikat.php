<div class="row">
	<div class="col-md-12">
		
		<div class="card">
			<div class="card-header">
				<span class="fa fa-list"></span> Lantikan Senarai Syarikat
				
				<a href="<?= PORTAL ?>penilai/list" class="btn btn-sm btn-primary">
					<span class="fa fa-arrow-left"></span> Kembali
				</a>

                <a href="<?= PORTAL ?>penilai/list" class="btn btn-sm btn-success float-right">
					<span class="fa fa-save"></span> LULUS
				</a>
			</div>
			
			<div class="card-body">
            <?php
                $d_uid = url::get(2); 
          
                $dokumen = dokumen::getBy(["d_uid" => $d_uid]);
                $d_id = !empty($dokumen) ? $dokumen[0]->d_id : null;
                
                if(count($dokumen) > 0){
                $dokumen = $dokumen[0];
            ?>
                <h5 class="text-center">PERBADANAN LABUAN</h5><br>
                <h5 class="text-center">SEBUT HARGA</h5><br><br>
                <h5 class="text-center">No Sebutan : <?= $dokumen->d_no_fail ?></h5><br>
                <h5 class="text-center text-uppercase">Tajuk : <?= $dokumen->d_tajuk ?></h5><br>
                <div class="row justify-content-between">
                    <div class="col-4">
                        <h5 class="text-center">Tarikh Ditutup : <?= $dokumen->d_iklan_tamat ?></h5>
                    </div>
                    <div class="col-4">
                        <h5 class="text-center">Jenis Sebutharga : xxxx</h5><br>
                        <h5 class="text-center">Kepala yang dikepalakan : xxxxx</h5>
                    </div>
                </div> <br>
				<table class="table table-hover table-fluid table-bordered">
					<thead>
						<tr>
							<th class="text-center" width="5%"><b>NO BIL PER TENDER</b></th>
							<th class="text-center" width="15%"><b>NAMA SYARIKAT</b></th>
							<th class="text-center" width="2%"><b>TARIKH SERAHAN</b></th>
							<th class="text-center" width="10%"><b>TEMPOH MINGGU</b></th>
							<th class="text-center" width="10%"><b>HARGA TAWARAN</b></th>
                            <th class="text-center" width="10%"><b>HARGA ANGGARAN</b></th>
                            <th class="text-center" width="10%"><b>PERBEZAAN HARGA (%)</b></th>
							<th class="text-center" width="10%"><b>CATATAN</b></th>
						</tr>
					</thead>
					
					<tbody>
					<?php
                    $susunan = array();

                    foreach (dokumen_submit::list() as $ds) {
                        if ($ds->ds_dokumen == $d_id) {
                            $syarikat = syarikat::getBy(["s_id" => $ds->ds_syarikat]);
                            $dokumen = dokumen::getBy(["d_id" => $ds->ds_dokumen]);
                            
                            if(count($syarikat) > 0){
                                $snama = $syarikat[0]->s_nama;
                            }else{
                                $snama = "NIL";
                            }

                            if ($dokumen[0]->d_anggaran_kos > 0) {
                                $peratusan = number_format(($ds->ds_nilai - $dokumen[0]->d_anggaran_kos) / $dokumen[0]->d_anggaran_kos * 100, 2);
                            } else {
                                $peratusan = 'Harga tidak boleh = 0';
                            }
                            
                            $susunan[] = array(
                                "bil" => $ds->ds_bil_petender,
                                "syarikat" => $snama,
                                "tarikh_submit" => $ds->ds_tarikh_submit,
                                "tempoh" => $ds->ds_tempoh,
                                "nilai" => $ds->ds_nilai,
                                "anggaran_kos" => $dokumen[0]->d_anggaran_kos,
                                "peratusan" => $peratusan,
                                "catatan" => "CATATAN",
                            );
                        }
                    }

                    usort($susunan, function ($a, $b) {
                        if ($a["peratusan"] === 'Harga tidak boleh = 0' && $b["peratusan"] === 'Harga tidak boleh = 0') {
                            return 0;
                        } elseif ($a["peratusan"] === 'Harga tidak boleh = 0') {
                            return 1; 
                        } elseif ($b["peratusan"] === 'Harga tidak boleh = 0') {
                            return -1;
                        } else {
                            $peratusanA = (float) str_replace('%', '', $a["peratusan"]);
                            $peratusanB = (float) str_replace('%', '', $b["peratusan"]);
                            return $peratusanA - $peratusanB;
                        }
                    });

                    foreach ($susunan as $susun) {
                        ?>
                        <tr>
                            <td class="text-center"><?= $susun["bil"] ?></td>
                            <td><?= $susun["syarikat"] ?></td>
                            <td class="text-center"><?= $susun["tarikh_submit"] ?></td>
                            <td class="text-center"><?= $susun["tempoh"] ?></td>
                            <td class="text-center"><?= ' RM ' . $susun["nilai"] ?></td>
                            <td class="text-center"><?= ' RM ' . $susun["anggaran_kos"] ?></td>
                            <td class="text-center"><?= $susun["peratusan"] . ' %' ?></td>
                            <td class="text-center"><input type="text" name="" value="<?= $susun["catatan"] ?>" class="form-control"></td>
                            </td>
                        </tr>
                    <?php
                    }}
                    ?>
					
					</tbody>
				</table>
			</div>
		</div>

	</div>
</div>  