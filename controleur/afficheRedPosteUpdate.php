<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
$id2 = htmlspecialchars($_GET['nPoste']); 

require_once("$racine/modele/PosteManager.php");

require_once("$racine/modele/SegmentManager.php");
require_once("$racine/modele/TypeManager.php");
require_once("$racine/modele/SalleInfoManager.php");


$TypeManager1=new TypeManager();
$SegmentManager1= new SegmentManager();
$SalleInfoManager1= new SalleInfoManager();

$posteManagerUpdate= new PosteManager();

if (!empty($_POST['Update_nomPoste']) && !empty($_POST['Update_indIP']) && !empty($_POST['Update_ad']) && !empty($_POST['Update_TP']) && !empty($_POST['Update_nSalle']) && !empty($_POST['Update_nbLog']))
{
    $posteManagerUpdate->ModifierPoste($_POST['Update_nomPoste'],$_POST['Update_indIP'],$_POST['Update_ad'],$_POST['Update_TP'],$_POST['Update_nSalle'],$_POST['Update_nbLog'], $id2);
}


$titre = "Modification Poste n°";
include "$racine/vue/header.php";
include "$racine/vue/vueAfficheRedPosteUpdate.php";
include "$racine/vue/footer.php";
?>