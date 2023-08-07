<?php

switch(url::get(1)){
	case "":
	case "list":
		Page::Load("pages/pembuka/list");
	break;
	
	case "add":
		Page::Load("pages/pembuka/add");
	break;
	
	case "edit":
		Page::Load("pages/pembuka/edit");
	break;
	
	case "status":
		Page::Load("pages/pembuka/status");
	break;
}


?>