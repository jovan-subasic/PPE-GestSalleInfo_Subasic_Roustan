<?php
/*
require_once("modele/Manager.php");
require_once("modele/SalleInfo.php");

class SalleInfoManager extends Manager
{
    public function get($id) //instancie un objet SalleInfo
    {
        $id = (int) $id;
        $q = $this->getPDO()->query('SELECT id, nom FROM SalleInfo WHERE id = '.$id);
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        return new SalleInfo($donnees['id'], $donnees['nom']);
    }
  
    public function getList() //instancie une collection d'objets SalleInfos
    {
        $SalleInfos = [];
        $q = $this->getPDO()->query('SELECT id, nom FROM SalleInfo ORDER BY nom');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $SalleInfos[$donnees['id']] = new SalleInfo($donnees['id'], $donnees['nom']);
        }
        return $SalleInfos;
    }
    
}*/
?>