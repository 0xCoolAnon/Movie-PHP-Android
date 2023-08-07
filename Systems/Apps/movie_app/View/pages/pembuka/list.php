<div class="row"> 
 <div class="col-md-12"> 
   
  <div class="card"> 
   <div class="card-header"> 
    <span class="fa fa-list"></span> Dokumen 
     
     
   </div> 
    
	<div class="card-body"> 
		<table class="table table-fluid table-bordered"> 
			<thead> 
				<tr> 
				<th class="text-center" width="1%">No</th> 
				<th class="text-center" width="20%">Dokumen</th>  
				<th class="text-center" width="5%">Senarai Hantar</th> 
				<th class="text-center" width="7%">Pengguna</th> 
				<th class="text-center" width="8%">:::</th> 
			</tr> 
			</thead> 
	  
     <tbody> 
     <?php 
      $i = 1; 
      foreach(dokumen::list() as $d){ 
       $user = users::getBy(["u_id" =>  $d->d_user ]); 
       $listdokumen = dokumen_submit::getBy(["ds_dokumen" => $d->d_id]); 
       $kiradokumen = count($listdokumen); 
       
      ?> 
		<tr> 
			<td class="text-center"><?= $i++ ?></td> 
			
			
			<td class="text-left">
								<strong>Tajuk :</strong> <?= $d->d_tajuk ?><br />
								<strong>No Fail :</strong> <?= $d->d_no_fail ?><br />
								<strong>No Dokumen :</strong> <?= $d->d_no_dokumen ?><br />
								<strong>Tarikh Iklan :</strong> <?= $d->d_iklan_mula ?><br />
								<strong>Tarikh Iklan Tutup :</strong> <?= $d->d_iklan_tamat ?><br />
			</td>

			<td class="text-center"><?= $kiradokumen?> </td>
			
			<td class="text-center">
			<?php
				if(count($user) > 0){
					echo $user[0]->u_name;
				}else{
					echo "NIL";
				}
			?>
			</td> 
			
			<td class="text-center">
				<a href="<?= PORTAL ?>pembuka/edit/<?= $d->d_uid ?>" class="btn btn-sm btn-warning"> 
					<span class="fa fa-edit"></span> Kemaskini 
				</a> 
				<a href="<?= PORTAL ?>pembuka/status/<?= $d->d_uid ?>" class="btn btn-sm btn-success"> 
					<span class="fa fa-eye"></span> Lihat 
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