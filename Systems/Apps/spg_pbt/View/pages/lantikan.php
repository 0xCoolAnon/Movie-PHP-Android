<?php

switch(url::get(1)){
	case "":
	case "list":
		Page::Load("pages/lantikan/list");
	break;
	
	case "add":
		Page::Load("pages/lantikan/add");
	break;
	
	case "edit":
		Page::Load("pages/lantikan/edit");
	break;
	
	case "delete":
		Page::Load("pages/lantikan/delete");
	break;

	case "status":
		Page::Load("pages/lantikan/status");
	break;
}


?>