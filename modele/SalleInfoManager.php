<?php

require_once("modele/Manager.php");
require_once("modele/SalleInfo.php");

class SalleInfoManager extends Manager
{
    public function get($id) //instancie un objet salle
    {
        $id = (int) $id;
        $q = $this->getPDO()->query('SELECT id, nSalle, nomSalle, nbPoste, indIP, room_name, sort_key, description, capacity  FROM salle inner join mrbs_room on mrbs_room.id = salle.id ');
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        return new SalleInfo ($donnees['id'], $donnees['nSalle'], $donnees['nomSalle'], $donnees['nbPoste'], $donnees['indIP'] );
    }
  
    public function getList() //instancie une collection d'objets salles
    {
        $salleinfos = [];
        $q = $this->getPDO()->query('SELECT id, nSalle, nomSalle, nbPoste, indIP, room_name, sort_key, description, capacity  FROM salle inner join mrbs_room on mrbs_room.id = salle.id ORDER BY nom');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $sallesinfos[$donnees['id']] = new SalleInfo ($donnees['id'], $donnees['nSalle'], $donnees['nomSalle'], $donnees['nbPoste'], $donnees['indIP'] );
        }
        return $salleinfos;
    }
    
}
?>