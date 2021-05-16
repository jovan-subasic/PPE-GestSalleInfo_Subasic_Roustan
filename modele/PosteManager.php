<?php

require_once("modele/Manager.php");
require_once("modele/Poste.php");

class PosteManager extends Manager
{
    /*public function get($nPoste) //instancie un objet poste
    {
        $nPoste = (int) $nPoste;
        $q = $this->getPDO()->query('SELECT nPoste, nomPoste, indIP, ad, typePoste, nSalle, nbLog  FROM poste p inner join salle s on p.nPoste = s.id ');
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        return new Poste ($donnees['id'], $donnees['nSalle'], $donnees['nomSalle'], $donnees['nbPoste'], $donnees['indIP'], $donnees['room_name'], $donnees['sort_key'], $donnees['description'], $donnees['capacity'] );
    }*/
  
    public function getListPoste($id) //instancie une collection d'objets postes
    {
        $postes = [];
        $q = $this->getPDO()->query('SELECT nPoste, nomPoste, p.indIP, ad, typePoste, p.nSalle, nbLog  FROM poste p inner join segment seg on seg.indIP = p.indIP inner join salle s on seg.indIP = s.indIP where p.nSalle = "'.$id.'"');
       
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
           $postes[$donnees['nPoste']] = new Poste ($donnees['nPoste'], $donnees['nomPoste'], $donnees['indIP'], $donnees['ad'], $donnees['typePoste'], $donnees['nSalle'], $donnees['nbLog']);
        }
        return $postes;
    }
    
    public function AjouterPoste($nPoste, $nomPoste, $indIP, $ad,$typePoste,$nSalle,$nbLog)
    {
        
        $q = $this->getPDO()->prepare('INSERT INTO poste(nPoste, nomPoste, indIP, ad, typePoste, nSalle, nbLog) VALUES(:nPoste, :nomPoste, :indIP, :ad, :typePoste, :nSalle, :nbLog)');
        $q->execute(array(
            'nPoste' => $nPoste,
            'nomPoste' => $nomPoste,
            'indIP' => $indIP,
            'ad' => $ad,
            'typePoste' => $typePoste,
            'nSalle' => $nSalle,
            'nbLog' => $nbLog
            ));

        echo 'Le Poste a bien été ajouté !';

    }
}
?>