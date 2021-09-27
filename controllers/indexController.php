<?php

class MvcController {
    # Llamo a la vista home -----------------------------------------------

    public function home(){
        
        include "views/home.php";
    }

    # Interaccion del usuario----------------------------------------------

    public function viewLinkController(){

        $link = $_GET["action"];
        
        $res = ViewsLinker::viewlinkModel($link);

        include $res;
    }
}





?>