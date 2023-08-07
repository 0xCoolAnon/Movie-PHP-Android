<?php

switch(url::get(1)){
    case "":
    case "list":
        Page::Load("pages/kewangan/list");
    break;
    case "view":
        Page::Load("pages/kewangan/view");
    break;
}

?>
