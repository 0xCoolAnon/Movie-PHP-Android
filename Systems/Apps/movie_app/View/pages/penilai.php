<?php
new Controller(["penilai"]);


switch(url::get(1)){
	case "":
	case "list":
		Page::Load("pages/penilai/list");
	break;
	
	case "add":
		Page::Load("pages/penilai/add");
	break;
	
	case "edit":
		Page::Load("pages/penilai/edit");
	break;
	
	case "kelulusan":
		Page::Load("pages/penilai/kelulusan");
	break;

	case "syarikat":
		Page::Load("pages/penilai/syarikat");
	break;
}


?>