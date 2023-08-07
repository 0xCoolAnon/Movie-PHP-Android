<?php

switch(url::get(2)){
	case "harga":
		items::updateBy(["i_key" => Input::post("i_key")], [
			"i_harga"	=> Input::post("harga")
		]);
	break;
	
	case "nama":
		items::updateBy(["i_key" => Input::post("i_key")], [
			"i_nama"	=> Input::post("nama")
		]);
	break;
}