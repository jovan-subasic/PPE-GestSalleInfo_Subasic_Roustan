<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
require_once("$racine/modele/UserManager.php");
require_once("$racine/modele/SalleInfoManager.php");

$UserManager= new UserManager();
$UserManager->init_php_session();

$titre= "Liste des salles";
$salleinfoManager= new SalleInfoManager();
$salleinfos=$salleinfoManager->getList(); 
//var_dump($salleinfos);
  
    include "$racine/vue/header.php";
    include "$racine/vue/vueAfficheSalleInfo.php";
    include "$racine/vue/footer.php";
    


?>