<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}




$titre = "Connexion";
    include "$racine/vue/header.php";
    include "$racine/vue/vueAuthentification.php";
    include "$racine/vue/footer.php";

?>