<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}


require_once("$racine/modele/PosteManager.php");

$titre = "Modification Poste n°";
include "$racine/vue/header.php";
include "$racine/vue/vueAfficheRedPosteUpdate.php";
include "$racine/vue/footer.php";
?>