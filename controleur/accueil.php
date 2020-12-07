<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/modele/bd.authentification.inc.php";


$titre = "Accueil";
include "$racine/vue/header.php";
if(isLoggedOn()){
    include_once "$racine/modele/bd.musique.inc.php";
    include_once "$racine/modele/bd.responsables.inc.php";

    ?><button onclick="window.location.href = './?action=deconnexion';">Déconnexion</button><?php
}
else{
    //include "$racine/vue/header.php";
    $deco = logout();
    include "$racine/vue/vueAccueil.php";
    echo ("Non Connecté");
    //include "$racine/vue/footer.php";
}
?>