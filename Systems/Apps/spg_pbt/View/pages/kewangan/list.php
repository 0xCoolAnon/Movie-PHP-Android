<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <span class="fa fa-list"></span> Senarai Dokumen Yang Telah Berjaya Di Beli
        <div class="input-group mb-2 mt-3">
          <input type="text" class="form-control" placeholder="Masukkan Nama Syarikat / Nama Pembeli" aria-label="Recipient's username" aria-describedby="basic-addon2">
          <div class="input-group-append mr-2">
            <button class="btn btn-primary" type="button"><span class="fas fa-search"></span> Cari </button>
          </div>
          <label for="search" class="m-2 ">Cari Dengan Tarikh :</label>
          <input type="date" id="search" name="search" class="form-control">
        </div>
      </div>
      <div class="card-body">
        <table class="table table-hover table-fluid table-bordered">
          <thead>
            <tr>
              <th class="text-center font-weight-bold" width="5%">No</th>
              <th class="text-center font-weight-bold" width="36%">Nama Dokumen</th>
              <th class="text-center font-weight-bold" width="36%">Syarikat Pembeli</th>
              <th class="text-center font-weight-bold" width="10%">Status</th>
              <th class="text-center font-weight-bold" width="11%">Tindakan</th>
            </tr>
          </thead>

          <tbody>
            <?php
            $number = 1;
            foreach (dokumen_syarikat::list() as $dokumen_syarikat) {
              $syarikat = syarikat::getBy(["s_id" => $dokumen_syarikat->ds_syarikat]);
              $dokumen = dokumen::getBy(["d_id" => $dokumen_syarikat->ds_dokumen]);

            ?>

              <tr>
                <td class="text-center"><?= $number++ ?></td>
                <td class="text-left text-wrap ">
                  <?php
                  if (!empty($dokumen)) {
                    echo $dokumen[0]->d_tajuk;
                  } else {
                    echo '<strong style="color: red; font-weight: bold;">MAKLUMAT DOKUMEN TIDAK DIJUMPAI</strong>';
                  }
                  ?>
                </td>
                <td class="text-left text-wrap ">

                  <?php
                  if (!empty($syarikat)) {
                    echo $syarikat[0]->s_nama;
                  } else {
                    echo '<strong style="color: red; font-weight: bold;">MAKLUMAT SYARIKAT TIDAK DIJUMPAI</strong>';
                  }
                  ?>

                </td>
                <td class="text-center text-success font-weight-bold">
                  <?php
                  if (empty($dokumen) || empty($syarikat)) {
                    echo '<strong style="color: red;">TIDAK SAH</strong>';
                  } else {
                    echo 'DIBAYAR';
                  }
                  ?>
                </td>
                <td>
                  <div class="row">
                    <div class="col text-center">
                      <?php if (!empty($dokumen) && !empty($syarikat)) { ?>
                        <a href="<?= PORTAL ?>kewangan/view/<?= $dokumen_syarikat->ds_key ?>" class="btn btn-sm btn-success">
                          <span class="fa fa-eye"></span> Lihat
                        </a>
                      <?php } else { ?>
                        <button class="btn btn-sm btn-danger disabled" disabled>
                          <span class="fa fa-times"></span> Tidak Sah
                        </button>
                      <?php } ?>
                    </div>
                  </div>
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