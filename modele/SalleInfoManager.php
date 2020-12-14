<?php

require_once("modele/Manager.php");
require_once("modele/SalleInfo.php");

class SalleInfoManager extends Manager
{
    public function get($id) //instancie un objet salle
    {
        $id = (int) $id;
        $q = $this->getPDO()->query('SELECT id, nSalle, nomSalle, nbPoste, indIP, =, sort_key, description, capacity  FROM salle inner join mrbs_room on mrbs_room.id = salle.id ');
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        return new SalleInfo ($donnees['id'], $donnees['nSalle'], $donnees['nomSalle'], $donnees['nbPoste'], $donnees['indIP'], $donnees['room_name'], $donnees['sort_key'], $donnees['description'], $donnees['capacity'] );
    }
  
    public function getList() //instancie une collection d'objets salles
    {
        $salleinfos = [];
        $q = $this->getPDO()->query('SELECT s.id, nSalle, nomSalle, nbPoste, indIP, room_name, sort_key, description, capacity  FROM salle s inner join mrbs_room mrbs on mrbs.id = s.id');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
           $salleinfos[$donnees['id']] = new SalleInfo ($donnees['id'], $donnees['nSalle'], $donnees['nomSalle'], $donnees['nbPoste'], $donnees['indIP'], $donnees['room_name'], $donnees['sort_key'], $donnees['description'], $donnees['capacity'] );
        }
        return $salleinfos;
    }
    
}
?>