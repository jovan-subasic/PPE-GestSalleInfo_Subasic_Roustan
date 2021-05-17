<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
require_once("$racine/modele/UserManager.php");

$UserManager= new UserManager();

$UserManager->init_php_session();


if (isset($_POST["pseudo"]) && isset($_POST["mdp"]))
{
    $pseudo = $_POST["pseudo"];
    $mdp = $_POST["mdp"];

    $userinfos = $UserManager->getUser($pseudo);

    echo '<pre>';
    print_r($userinfos);
    echo '</pre>';
}
else
{
    $pseudo="";
    $mdp="";
} 

// $hash = password_hash($pseudo, PASSWORD_BCRYPT, );

// echo password_verify($pseudo , $hash);

$titre = "Connexion";
    include "$racine/vue/header.php";
    include "$racine/vue/vueAuthentification.php";
    include "$racine/vue/footer.php";

?>