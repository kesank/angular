<?php

require '../app/Autoloader.php';
App\Autoloader::register();



if(isset($_GET['nom'])){
    $nom=$_GET['nom'];
}
else{
    $nom='home';
}
ob_start();
if($nom==='home'){
    require '../view/pages/home.php';
}
elseif($nom==='single'){
    require '../view/pages/single.php';
}

$content=ob_get_clean();
require'../view/layout.php';