<?php
function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["defaut"] = "connexion.php";
    $lesActions["accueil"] = "accueil.php";
    $lesActions["connexion"] = "connexion.php";
    $lesActions["salleinfo"]="afficheSalleInfo.php";
    $lesActions["gestion"]="afficheGestion.php";
    $lesActions["postebysalle"]="affichePosteBySalle.php";


    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } else {
        return $lesActions["defaut"];
    }
}
?>

