<?php

require_once("racine/modele/SalleInfoManager.php");
$titre= "Liste des salles";
$salleinfoManager= new SalleInfoManager();
$salleinfos=$salleinfoManager->getList();

include "racine/vue/header.php";
include "racine/vue/vueAfficheSalleInfo.php";
include "racine/vue/footer.php";
?>