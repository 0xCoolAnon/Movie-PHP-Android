<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <span class="fa fa-list"></span>Butiran Maklumat Dokumen Dan Syarikat
                <a href="<?= PORTAL ?>kewangan/list" class="btn btn-sm btn-primary">
                    <span class="fa fa-arrow-left"></span> Kembali
                </a>

            </div>
            <div class="card-body">
                <table class="table table-hover table-fluid table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center font-weight-bold" width="33%">Butiran Dokumen</th>
                            <th class="text-center font-weight-bold" width="33%">Butiran Pembeli</th>
                            <th class="text-center font-weight-bold" width="33%">Butiran Pembayaran</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $uid = url::get(2);

                        $d = dokumen_syarikat::getBy(["ds_key" => $uid]);

                        if (count($d) > 0) {
                            $d = $d[0];                         
                            $dokumen = dokumen::getBy(["d_id" => $d->ds_dokumen])[0];
                            $syarikat = syarikat::getBy(["s_id" => $d->ds_syarikat])[0];
                            
                        ?>
                                <tr>
                                    <td class="text-left text-wrap">
                                        <span class="font-weight-bold mb-2">Nama Dokumen : </span>
                                        <?= $dokumen->d_tajuk ?>
                                        <br>
                                        <span class="font-weight-bold mb-2">Nombor Fail : </span><?= $dokumen->d_no_fail?><br>
                                        <span class="font-weight-bold mb-2">Nombor Dokumen : </span><?= $dokumen->d_no_dokumen ?><br>
                                        <span class="font-weight-bold mb-2">Anggaran Masa : </span><?= $dokumen->d_anggaran_masa ?><br>
                                        <span class="font-weight-bold mb-2">Tarikh Lantik : </span><?= $dokumen->d_tarikh_lantik ?>
                                    </td>

                                    <td class="text-left text-wrap">
                                        <span class="font-weight-bold mb-2">Nama Syarikat : </span><?= $syarikat->s_nama?><br>
                                        <span class="font-weight-bold mb-2">Nombor Pendaftaran Syarikat : </span><?= $syarikat->s_regno?><br>
                                        <span class="font-weight-bold mb-2">Nombor Telefon : </span><?= $syarikat->s_fon?><br>
                                        <span class="font-weight-bold mb-2">Email : </span><?= $syarikat->s_email?><br>
                                        <span class="font-weight-bold mb-2">Alamat : </span><?= $syarikat->s_alamat?><br>
                                    </td>

                                    <td class="text-left text-wrap">
                                        <span class="font-weight-bold mb-2">Tarikh Pembelian : </span><?= $d->ds_tarikh?><br>
                                        <span class="font-weight-bold mb-2">Jumlah Harga : RM </span><?= $d->ds_harga?><br>
                                        <span class="font-weight-bold mb-2">Nombor Resit : </span><?= $d->ds_no_resit?>
                                    </td>
                                </tr>
                        <?php
                            
                        }else{
                            new Alert("error", "Tiada Data Dijumpai.");
                        }
                        ?>

                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>

