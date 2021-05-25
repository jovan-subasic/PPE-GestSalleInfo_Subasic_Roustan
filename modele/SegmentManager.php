<?php
require_once("modele/Manager.php");
require_once("modele/Segment.php");

class SegmentManager extends Manager
{
    public function getListSegment() //instancie une collection d'objets segment
    {
        $segments = [];
        $q = $this->getPDO()->query('SELECT indIP, nomSegment, etage, nbSalle, nbPoste FROM segment');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
           $segments[$donnees['indIP']] = new Segment ($donnees['indIP'],$donnees['nomSegment'], $donnees['etage'], $donnees['nbSalle'], $donnees['nbPoste']);
        }
        return $segments;
    }
    
}
?>