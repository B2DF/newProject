<?php
#requiero una vez el controlador indexcontroller y luego creo 

require_once "controllers/indexController.php";
require_once "models/model.php";

$b = new MvcController();
$b -> home();




?>