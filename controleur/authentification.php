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
    
    $asso = getMusique();
    
    // appel du script de vue qui permet de gerer l'affichage des donnees
    $titre = "detail d'une musique";
    //include "$racine/vue/header.php";
    include "$racine/vue/vueListeEleve.php";
    ?><button onclick="window.location.href = './?action=deconnexion';">Déconnexion</button><?php
    //include "$racine/vue/footer.php";
}
else{
    //include "$racine/vue/header.php";
    $deco = logout();
    include "$racine/vue/vueAuthentification.php";
    //include "$racine/vue/footer.php";
}
?>