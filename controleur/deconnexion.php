<?php
include_once "$racine/modele/bd.authentification.inc.php";

logout();
// recuperation des donnees GET, POST, et SESSION
if (isset($_POST["pseudoU"]) && isset($_POST["mdpU"])){
    $pseudoU=$_POST["pseudoU"];
    $mdpU=$_POST["mdpU"];
}
else
{
    $pseudoU="";
    $mdpU="";
}
$titre = "authentification";
        include "$racine/vue/header.php";
        include "$racine/vue/vueAuthentification.php";
        include "$racine/vue/footer.php";
?>