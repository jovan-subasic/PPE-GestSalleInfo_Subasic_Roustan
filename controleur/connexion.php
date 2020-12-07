<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.authentification.inc.php";

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

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 


// traitement si necessaire des donnees recuperees
login($pseudoU,$mdpU);

if (isLoggedOn()){ // si l'utilisateur est connecté on redirige vers le controleur monProfil
    include "$racine/controleur/monProfil.php";
}
else{

        $titre = "authentification";
        include "$racine/vue/header.php";
        include "$racine/vue/vueAuthentification.php";
        include "$racine/vue/footer.php";
    }
?>