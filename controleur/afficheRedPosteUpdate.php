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

//utilisation pour combobox typeLP
$type=$TypeManager1->getListType();
//utilisation pour combobox indIP
$IP=$SegmentManager1->getListSegment();
//utilisation pour combobox nSalle
$nSalle=$SalleInfoManager1->getList();


//est utilisé pour afficher les anciennes données 
$donneesPoste = $posteManagerUpdate->getPoste($id2);


if(isset($_POST['modifier'])){
    if (!empty($_POST['Update_nomPoste']) && !empty($_POST['Update_indIP']) && !empty($_POST['Update_ad']) && !empty($_POST['Update_TP']) && !empty($_POST['Update_nSalle']) && !empty($_POST['Update_nbLog']))
    {
        $posteManagerUpdate->ModifierPoste($_POST['Update_nomPoste'],$_POST['Update_indIP'],$_POST['Update_ad'],$_POST['Update_TP'],$_POST['Update_nSalle'],$_POST['Update_nbLog'], $id2);
        echo"Le poste a bien été modifié!";
    }
    else
    {
        echo "!!ERREUR!! Remplir tous les champs";
    }
}

$titre = "Modification Poste n°";
include "$racine/vue/header.php";
include "$racine/vue/vueAfficheRedPosteUpdate.php";
include "$racine/vue/footer.php";
?>