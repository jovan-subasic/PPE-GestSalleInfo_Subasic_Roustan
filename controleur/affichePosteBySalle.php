<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
$id = htmlspecialchars($_GET['nSalle']); 

require_once("$racine/modele/PosteManager.php");
$posteManager= new PosteManager();
$postes=$posteManager->getListPoste($id);

$titre = "postebysalle";
    include "$racine/vue/header.php";
    include "$racine/vue/vueAffichePosteBySalle.php";
    include "$racine/vue/footer.php";

?>