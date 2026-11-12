
<?php


include_once 'env.php';
include_once 'Controller/ControllerHome.php';
include_once 'Model/ModelPlayer.php';
include_once 'View/ViewHome.php';


$controllerHome = new ControllerHome(new ModelPlayer(), new ViewHome());
$controllerHome->registerPlayer();
$controllerHome->displayPlayers();
$controllerHome->render();