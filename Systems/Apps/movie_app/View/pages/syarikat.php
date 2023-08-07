<?php
new Controller(["syarikat"]);
?>
<div class="row">
	<div class="col-md-12">

<?php
switch(url::get(1)){
	case "":
	case "list":
		Page::Load("pages/syarikat/list");
	break;
	
	case "add":
		Page::Load("pages/syarikat/add");
	break;
	
	case "edit":
		Page::Load("pages/syarikat/edit");
	break;
	
	case "status":
		Page::Load("pages/syarikat/status");
	break;
	
	case "delete":
		Page::Load("pages/syarikat/delete");
	break;
}

?>