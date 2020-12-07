<?php

include_once "bd.utilisateur.inc.php";

function login($pseudoU, $mdpU) {
    if (!isset($_SESSION)) {
        session_start();
    }

    $util = getUtilisateurByPseudoU($pseudoU);
    $mdpBD = $util["mdpU"];

    if (trim($mdpBD) == trim(crypt($mdpU, $mdpBD))) {
        // le mot de passe est celui de l'utilisateur dans la base de donnees
        $_SESSION["pseudoU"] = $pseudoU;
        $_SESSION["mdpU"] = $mdpBD;
    }
}

function logout() {
    if (!isset($_SESSION)) {
        session_start();
    }
    unset($_SESSION["pseudoU"]);
    unset($_SESSION["mdpU"]);
}

function getPseudoULoggedOn(){
    if (isLoggedOn()){
        $ret = $_SESSION["pseudoU"];
    }
    else {
        $ret = "";
    }
    return $ret;
        
}


function isLoggedOn() {
    if (!isset($_SESSION)) {
        session_start();
    }
    $ret = false;

    if (isset($_SESSION["pseudoU"])) {
        $util = getUtilisateurByPseudoU($_SESSION["pseudoU"]);
        if ($util["pseudoU"] == $_SESSION["pseudoU"] && $util["mdpU"] == $_SESSION["mdpU"]
        ) {
            $ret = true;
        }
    }
    return $ret;
}

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    // prog principal de test
    header('Content-Type:text/plain');

    // test de connexion
    if (isLoggedOn()) {
        echo "logged\n";
    } else {
        echo "not logged\n";
    }
    
    login("admin", "sio");
    
    if (isLoggedOn()) {
        echo "logged\n";
    } else {
        echo "not logged\n";
    }

    $pseudo=ULoggedOn();
    echo "utilisateur connecté avec cette adresse : $pseudo \n";
    
    // deconnexion
    logout();
}
?>