<?php


switch(Input::post("action")){
	case "add":
		if(empty(Input::post("d_tajuk")) || empty(Input::post("d_no_fail"))){
			Alert::set("error", "Tajuk dan no fail rujukan adalah wajib.");

		}else{
			dokumen::insertInto([
				"d_tajuk"					=> Input::post("d_tajuk"),
				"d_no_dokumen" 				=> Input::post("d_no_dokumen"),
				"d_no_fail"					=> Input::post("d_no_fail"),
				"d_department"				=> Input::post("d_department"),
				"d_status"					=> Input::post("d_status"),
				"d_iklan_mula"				=> Input::post("d_iklan_mula"),
				"d_iklan_tamat"				=> Input::post("d_iklan_tamat"),
				"d_harga_dokumen"			=> Input::post("d_harga_dokumen"),
				"d_user"					=> Session::get("user")->u_id,
				"d_uid"						=> F::UniqKey("dok_")
			]);
			
			Alert::set("success", "Dokumen telah berjaya disimpan.");
		}
	break;
	
	case "edit":
		if(empty(Input::post("d_tajuk")) || empty(Input::post("d_no_fail"))){
			Alert::set("error", "Tajuk dan no fail rujukan adalah wajib.");
		}else{
			dokumen::updateBy(["d_uid" => url::get(2)], [
				"d_tajuk"					=> Input::post("d_tajuk"),
				"d_no_dokumen" 				=> Input::post("d_no_dokumen"),
				"d_no_fail"					=> Input::post("d_no_fail"),
				"d_department"				=> Input::post("d_department"),
				"d_status"					=> Input::post("d_status"),
				"d_iklan_mula"				=> Input::post("d_iklan_mula"),
				"d_iklan_tamat"				=> Input::post("d_iklan_tamat"),
				"d_harga_dokumen"			=> Input::post("d_harga_dokumen"),
				//"d_uid"						=> F::UniqKey("dok_")

			]);
			
			Alert::set("success", "Dokumen telah berjaya disimpan.");
		}
	break;
	
	case "delete":
		dokumen::deleteBy(["d_uid" => url::get(2)]);
		
		Alert::set("success", "Maklumat dokumen telah berjaya dipadam.", [
			"redirect" => PORTAL . "dokumen/list"
		]);
	break;
}