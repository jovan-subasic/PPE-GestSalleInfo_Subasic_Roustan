<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
require_once("$racine/modele/PosteManager.php");
require_once("$racine/modele/SegmentManager.php");
require_once("$racine/modele/TypeManager.php");
require_once("$racine/modele/SalleInfoManager.php");




$titre= "Gestion";

$TypeManager=new TypeManager();
$SegmentManager= new SegmentManager();
$posteManager= new PosteManager();
$SalleInfoManager= new SalleInfoManager();



if (!empty($_POST['Add_nPoste']) && !empty($_POST['Add_nomPoste']) && !empty($_POST['Add_indIP']) && !empty($_POST['Add_ad']) && !empty($_POST['Add_typePoste']) && !empty($_POST['Add_nSalle']) && !empty($_POST['Add_nbLog']))
{
    $posteManager->AjouterPoste($_POST['Add_nPoste'], $_POST['Add_nomPoste'], $_POST['Add_indIP'], $_POST['Add_ad'], $_POST['Add_typePoste'], $_POST['Add_nSalle'], $_POST['Add_nbLog']);
}



include "$racine/vue/header.php";
include "$racine/vue/vueAfficheGestion.php";
include "$racine/vue/footer.php";
?>