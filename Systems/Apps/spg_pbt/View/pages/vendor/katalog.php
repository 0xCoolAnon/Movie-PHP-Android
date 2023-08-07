<?php
switch(url::get(1)){
	case "": case "list":
		Page::Load("pages/vendor/katalog/list");
	break;
}