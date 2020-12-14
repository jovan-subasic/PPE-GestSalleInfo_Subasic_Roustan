<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
$titre= "Gestion";

include "$racine/vue/header.php";
include "$racine/vue/vueAfficheGestion.php";
include "$racine/vue/footer.php";
?>