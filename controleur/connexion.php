<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
require_once("$racine/modele/UserManager.php");

$UserManager= new UserManager();
$UserManager->init_php_session();

if (isset($_GET["action"]) && !empty($_GET["action"]) && $_GET["action"] == "logout")
{
    $UserManager->clean_php_session();
}

if (isset($_POST["pseudo"]) && isset($_POST["mdp"]) && !empty($_POST["pseudo"]) && !empty($_POST["mdp"]))
{
    $pseudo = $_POST["pseudo"];
    $mdp = $_POST["mdp"];

    $userinfos = $UserManager->getUser($pseudo);

    if($userinfos != "")
    {
        if (password_verify($mdp , $userinfos['password']))
        {
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['rank'] = $userinfos['level'];
        }
        else
        {
            echo 'Identifiant ou mot de passe incorrect';
        }
    }
    else
    {
        echo 'Identifiant ou mot de passe incorrect';
    }
    // echo '<pre>';
    // print_r($userinfos);
    // echo '</pre>';
    
}
else
{
    $pseudo="";
    $mdp="";
} 
//$UserManager->clean_php_session();
// $hash = password_hash($pseudo, PASSWORD_BCRYPT, );

// echo password_verify($pseudo , $hash);

$titre = "Connexion";
    include "$racine/vue/header.php";
    include "$racine/vue/vueAuthentification.php";
    include "$racine/vue/footer.php";

?>