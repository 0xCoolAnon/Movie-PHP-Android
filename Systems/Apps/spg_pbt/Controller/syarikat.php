<?php

switch (input::post("action")) {
  case "add":

 if(empty(Input::post("s_regno")) || empty(Input::post("s_email"))){
			Alert::set("error", "No SSM dan no email rujukan adalah wajib.");

    }
    $data = [	"s_id"					=> F::UniqKey("s_id"),
				"s_nama" 				=> Input::post("s_nama"),
				"s_regno"   			=> Input::post("s_regno"),
				"s_alamat"				=> Input::post("s_alamat"),
				"s_fon"					=> Input::post("s_fon"),
				"s_email"				=> Input::post("s_email"),
				"s_fail"				=> Input::post("s_fail"),
				"s_pic"					=> Input::post("s_pic"),
				"s_password"			=> Input::post("s_password"),
				"s_status"				=> Input::post("s_status"),
				"s_user"				=> Input::post("s_user"),
				"s_pemilik"				=> Input::post("s_pemilik"),
			];	

   
      

    $a = syarikat::insertInto($data);
    if ($a) {
      Alert::set("success", "Maklumat berjaya dikemaskini.");
    } else {
      Alert::set("error", "Sila Lengkapkan Maklumat yang Diperlukan!");
    }


    break;

  case "edit":


    $data = [
      "u_name"    => Input::post("u_name"),
      "u_email"    => Input::post("u_email"),
      "u_phone"    => Input::post("u_phone"),
      "u_ic"      => Input::post("u_ic"),
      "u_alamat"    => Input::post("u_alamat"),
      "u_area"    => Input::post("u_area"),
      "u_state"    => Input::post("u_state"),
      "u_country"    => Input::post("u_country"),
      "u_postcode"  => Input::post("u_postcode"),
      "u_role"    => Input::post("u_role")
    ];

    if (!empty(Input::post("u_password"))) {
      $data["u_password"] = Password::get(Input::post("u_password"));
    }

    if (file_exists($_FILES["u_picture"]["tmp_name"]) && is_uploaded_file($_FILES["u_picture"]["tmp_name"])) {
      $fname = F::UniqKey() . "-" . F::URLSlugEncode($_FILES["u_picture"]["name"]);
      if (move_uploaded_file($_FILES["u_picture"]["tmp_name"], ASSET . "images/profile/" . $fname)) {
        $data["u_picture"] = $fname;
      }
    }

    $a = users::updateBy(["u_id" => url::get(2)], $data);
    if ($a) {
      Alert::set("success", "Maklumat berjaya dikemaskini.");
    } else {
      Alert::set("error", "Sila Lengkapkan Maklumat yang Diperlukan!");
    }

    break;
    
     case "delete":
        $a = users::deleteBy(["u_id" => url::get(2)]);
        if($a){
          new Alert("success", "Pengguna telah dibuang");
        }else{
          new Alert("error", "Gagal menyimpan maklumat pengguna. Sila hubungi teknikal.");
        }
    exit;
      break;
      
      default:
        new Alert("error", "Maklumat tidak dapat diproses.");
      break;
}
