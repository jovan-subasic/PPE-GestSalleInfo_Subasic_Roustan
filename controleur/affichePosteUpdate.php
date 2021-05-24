<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}

$titre = "Modification Poste";
require_once("$racine/modele/PosteManager.php");



$posteManager1= new PosteManager();
$lespostes=$posteManager1->getListPostes();


include "$racine/vue/header.php";
include "$racine/vue/vueAffichePosteUpdate.php";
include "$racine/vue/footer.php";
?>