<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}

$titre = "Modification Poste";
require_once("$racine/modele/PosteManager.php");
require_once("$racine/modele/UserManager.php");
require_once("$racine/modele/SalleInfoManager.php");

$UserManager= new UserManager();
$UserManager->init_php_session();


$posteManager1= new PosteManager();
$lespostes=$posteManager1->getListPostes();


include "$racine/vue/header.php";
include "$racine/vue/vueAffichePosteUpdate.php";
include "$racine/vue/footer.php";
?>