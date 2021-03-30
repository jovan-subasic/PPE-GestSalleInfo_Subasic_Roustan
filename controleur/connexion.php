<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

if (isset($_POST["pseudo"]) && isset($_POST["mdp"])){
    $pseudo=$_POST["pseudo"];
    $mdp=$_POST["mdp"];
}
else
{
    $pseudo="";
    $mdp="";
}




$titre = "Connexion";
    include "$racine/vue/header.php";
    include "$racine/vue/vueAuthentification.php";
    include "$racine/vue/footer.php";

?>