<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
require_once("$racine/modele/PosteManager.php");

$titre= "Gestion";

$posteManager= new PosteManager();

if (!empty($_POST['Enter_nPoste']) && !empty($_POST['Enter_nomPoste']) && !empty($_POST['Enter_indIP']) && !empty($_POST['Enter_ad']) && !empty($_POST['Enter_typePoste']) && !empty($_POST['Enter_nSalle']) && !empty($_POST['Enter_nbLog']))
{
    $posteManager->AjouterPoste($_POST['Enter_nPoste'], $_POST['Enter_nomPoste'], $_POST['Enter_indIP'], $_POST['Enter_ad'], $_POST['Enter_typePoste'], $_POST['Enter_nSalle'], $_POST['Enter_nbLog']);
}


include "$racine/vue/header.php";
include "$racine/vue/vueAfficheGestion.php";
include "$racine/vue/footer.php";
?>