<?php

switch(Input::post("action")){

    case "lulus":
        dokumen_submit::updateBy(["ds_id" => url::get(2)], ["ds_nilai" => 1]);
        Alert::set("success", "Syarikat ini telah diluluskan.");
	break;

    case "taklulus":
        dokumen_submit::updateBy(["ds_id" => url::get(2)], ["ds_nilai" => 2]);
        Alert::set("success", "Syarikat ini TIDAK LULUS.");
    break;

}

?>