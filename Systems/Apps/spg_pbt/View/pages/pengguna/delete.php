
Pengguna
<div class="card">
    <div class="card-header">
      
    <a href="<?= PORTAL ?>pengguna" class="btn btn-sm btn-primary">
      <span class="fa fa-arrow-left"></span> Kembali
    </a>
    </div>
    
    <div class="card-body">
    <?php
      $i = users::getBy(["u_id" => url::get(2)]);
      
      if(count($i)){
        $i = $i[0];
    ?>
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-12">
            <h3>Adakah anda pasti?</h3>
            <p>
              Klik butang dibawah untuk padam maklumat <strong><?= $i->u_name ?></strong> secara kekal.
            </p>
          </div>
          
          <div class="col-md-12 text-center">
          <?php
            Controller::Form("pengguna", [
              "action"  => "delete"
            ]);
          ?>
            <button class="btn btn-danger btn-sm" id="delete-user">
              <span class="fa fa-trash"></span> Padam
            </button>
          </div>
        </div>
      </form>
    <?php
      }else{
        new Alert("error", "Pengguna tidak dijumpai.");
      }
    ?>
    </div>
    
  </div>