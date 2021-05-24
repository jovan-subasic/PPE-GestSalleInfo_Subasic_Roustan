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

    

    
    //Fonction d'ajout d'un Poste
    public function AjouterPoste($Add_nPoste, $Add_nomPoste, $Add_indIP, $Add_ad, $Add_typePoste,$Add_nSalle,$Add_nbLog)
    {
        
        $q = $this->getPDO()->prepare('INSERT INTO poste(nPoste, nomPoste, indIP, ad, typePoste, nSalle,nbLog) VALUES(:nPoste, :nomPoste, :indIP, :ad, :typePoste, :nSalle,:nbLog)');
        $q->execute(array(
            'nPoste' => $Add_nPoste,
            'nomPoste' => $Add_nomPoste,
            'indIP' => $Add_indIP,
            'ad' => $Add_ad,
            'typePoste' => $Add_typePoste,
            'nSalle' => $Add_nSalle,
            'nbLog' => $Add_nbLog
            ));

        echo 'Insert OK->';

    }

    //Fonction de modification d'un Poste
    public function ModifierPoste($Update_nomPoste, $Update_indIP, $Update_ad,$Update_typePoste,$Update_nSalle,$Update_nbLog, $id)
    {
        $q = $this->getPDO()->prepare('UPDATE poste SET nomPoste = :nomPoste, indIP = :indIP, ad = :ad, typePoste = :typePoste, nSalle = :nSalle, nbLog = :nbLog WHERE nPoste = :id');
        $q->execute(array(
            'nomPoste' => $Update_nomPoste,
            'indIP' => $Update_indIP,
            'ad' => $Update_ad,
            'typePoste' => $Update_typePoste,
            'nSalle' => $Update_nSalle,
            'nbLog' => $Update_nbLog,
            'id' => $id
            ));

        echo 'Update OK->';
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