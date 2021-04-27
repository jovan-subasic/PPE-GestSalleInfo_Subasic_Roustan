<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
require_once("modele/Manager.php");

if (isset($_POST["pseudo"]) && isset($_POST["mdp"]))
{
    $pseudo=$_POST["pseudo"];
    $mdp=$_POST["mdp"];

    $cnx = dbConnect();
    $req = $cnx->prepare("select * from mrbs_users where name = :name");
    $req->bindValue(':name', $pseudo, PDO::PARAM_STR);
    $req->execute();
    $resultat = $req->fetch(PDO::FETCH_ASSOC);


    echo '<pre>';
    print_r($resultat);
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