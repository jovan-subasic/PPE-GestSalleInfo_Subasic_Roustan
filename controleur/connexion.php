<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

init_php_session();

if (isset($_POST["pseudo"]) && isset($_POST["mdp"]))
{
    $pseudo = $_POST["pseudo"];
    $mdp = $_POST["mdp"];

    // $cnx = dbConnect();
    // $req = $cnx->prepare("select * from mrbs_users where name = :name");
    // $req->bindValue(':name', $pseudo, PDO::PARAM_STR);
    // $req->execute();
    // $resultat = $req->fetch(PDO::FETCH_ASSOC);

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
}
else
{
    $pseudo="";
    $mdp="";
} 

// $hash = password_hash($pseudo, PASSWORD_BCRYPT, );

// echo password_verify($pseudo , $hash);

function init_php_session() : bool
{
    if(!session_id())
    {
        session_start();
        session_regenerate_id();
        return true;
    }

    return false;
}

function clean_php_session() : void
{
    session_unset();
    session_destroy();
}

function is_logged() : bool
{
    return true;
}

function is_admin() : bool
{
    return true;
}

$titre = "Connexion";
    include "$racine/vue/header.php";
    include "$racine/vue/vueAuthentification.php";
    include "$racine/vue/footer.php";

?>