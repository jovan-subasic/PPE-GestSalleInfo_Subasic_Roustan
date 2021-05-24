<?php
require_once("modele/Manager.php");
require_once("modele/Type.php");

class TypeManager extends Manager
{
    public function getListType() //instancie une collection d'objets type
    {
        $types = [];
        $q = $this->getPDO()->query('SELECT typeLP, nomType, tarif FROM types');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
           $types[$donnees['typeLP']] = new Type ($donnees['typeLP'], $donnees['nomType'], $donnees['tarif']);
        }
        return $types;
    }
    public function getComboBoxType() //instancie une collection d'objets type
    {
   
        $q = $this->getPDO()->query('SELECT typeLP, nomType, tarif FROM types');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            ?> <option value="<?php echo $donnees['typeLP']; ?>"> <?php echo $donnees['typeLP'] ?> </option> <?php
        }
        
    }
}
?>