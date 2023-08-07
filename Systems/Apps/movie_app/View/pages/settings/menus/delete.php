<div class="card">
	<div class="card-header">
		Menu Padam
		
		<a href="<?= PORTAL ?>settings/menus/list" class="btn btn-sm btn-primary">
			<span class="fa fa-arrow-left"></span> Kembali
		</a>
	</div>	
	
	<div class="card-body">
	<?php
		$m = menus::getBy(["m_id" => url::get(3)]);
		
		if(count($m) > 0){
			$m = $m[0];
		?>
			<h3>Adakah anda pasti?</h3>
			<p>
              Klik butang dibawah untuk padam maklumat secara kekal.
            </p> 
			<br /><br />
			
			<form action="" method="POST">
			<?php
				Controller::form("settings/menus", [
					"action"	=> "delete"
				]);
			?>
				<button class="btn btn-danger btn-sm">
					Padam
				</button>
			</form>
		<?php
		}else{
			new Alert("Error", "Tiada maklumat Dijumpai.");
		}
	?>
	</div>
</div>