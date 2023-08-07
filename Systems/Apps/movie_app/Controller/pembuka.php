<?php

switch(Input::post("action")){

    case "edit":
        if(empty(Input::post("kos_anggaran")) || empty(Input::post("tempoh_anggaran"))){
			Alert::set("error", "Masa dan kos adalah wajib.");
		}else{
			dokumen::updateBy(["d_uid" => url::get(2)], [
				"d_anggaran_kos"					=> Input::post("kos_anggaran"),
				"d_anggaran_masa" 				=> Input::post("tempoh_anggaran"),
			]);
			
			Alert::set("success", "Dokumen telah berjaya disimpan.");
		}
	break;

}

?>