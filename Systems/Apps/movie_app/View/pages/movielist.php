<?php

new Controller(["dokumen"]);

switch(url::get(1)){
	case "":
	case "list":
		Page::Load("pages/dokumen/list");
	break;
	
	case "add":
		Page::Load("pages/dokumen/add");
	break;
	
	case "edit":
		Page::Load("pages/dokumen/edit");
	break;
	
	case "delete":
		Page::Load("pages/dokumen/delete");
	break;
}


?>