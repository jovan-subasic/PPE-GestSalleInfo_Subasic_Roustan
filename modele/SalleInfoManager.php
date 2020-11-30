<?php

require_once("modele/Manager.php");
require_once("modele/SalleInfo.php");

class SalleInfoManager extends Manager
{
    public function get($id) //instancie un objet secteur
    {
        $id = (int) $id;
        $q = $this->getPDO()->query('SELECT id, nom FROM secteur WHERE id = '.$id);
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        return new Secteur($donnees['id'], $donnees['nom']);
    }
  
    public function getList() //instancie une collection d'objets secteurs
    {
        $salleinfos = [];
        $q = $this->getPDO()->query('SELECT id, nom FROM secteur ORDER BY nom');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $sallesinfos[$donnees['id']] = new Secteur($donnees['id'], $donnees['nom']);
        }
        return $salleinfos;
    }
    
}
?>