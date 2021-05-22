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
  

    //id clique sur le tableau
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

    

    
    
    public function AjouterPoste($Enter_nPoste, $Enter_nomPoste, $Enter_indIP, $Enter_ad,$Enter_typePoste,$Enter_nSalle)
    {
        
        $q = $this->getPDO()->prepare('INSERT INTO poste(nPoste, nomPoste, indIP, ad, typePoste, nSalle) VALUES(:nPoste, :nomPoste, :indIP, :ad, :typePoste, :nSalle)');
        $q->execute(array(
            'nPoste' => $Enter_nPoste,
            'nomPoste' => $Enter_nomPoste,
            'indIP' => $Enter_indIP,
            'ad' => $Enter_ad,
            'typePoste' => $Enter_typePoste,
            'nSalle' => $Enter_nSalle
            ));

        echo 'Le Poste a bien été ajouté !';

    }

    public function ModifierPoste($Enter_nomPoste, $Enter_indIP, $Enter_ad,$Enter_typePoste,$Enter_nSalle, $id)
    {
        $q = $this->getPDO()->prepare('UPDATE poste SET nomPoste = :nomPoste, indIP = :indIP, ad = :ad, typePoste = :typePoste, nSalle = :nSalle WHERE nPoste = "'.$id.'"');
        $q->execute(array(
            'nomPoste' => $Enter_nomPoste,
            'indIP' => $Enter_indIP,
            'ad' => $Enter_ad,
            'typePoste' => $Enter_typePoste,
            'nSalle' => $Enter_nSalle
            ));

        echo 'Le Poste a bien été mis à jour !';
    }
    

    public function getListPostes() //instancie une collection d'objets postes
    {
        $lespostes = [];
        $q = $this->getPDO()->query('SELECT nPoste, nomPoste, p.indIP, ad, typePoste, p.nSalle, nbLog  FROM poste p inner join segment seg on seg.indIP = p.indIP inner join salle s on seg.indIP = s.indIP');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
           $lespostes[$donnees['nPoste']] = new Poste ($donnees['nPoste'], $donnees['nomPoste'], $donnees['indIP'], $donnees['ad'], $donnees['typePoste'], $donnees['nSalle'], $donnees['nbLog']);
        }
        return $lespostes;
    }
    

}
?> 