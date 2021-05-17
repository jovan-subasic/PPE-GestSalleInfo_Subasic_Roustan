<?php

require_once("modele/Manager.php");
require_once("modele/User.php");

class UserManager extends Manager
{
    
    public function getUser($pseudo)
    {
        
        $q = $this->getPDO()->prepare('select * from mrbs_users where name = :name');
        $q->execute(array( 'name' => $pseudo ));
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        return $donnees;


    }

    function init_php_session() : bool
    {
        if(!session_id())
        {
            session_start();
            session_regenerate_id();
            return true;
        }

        return false;
    }

    function clean_php_session() : void
    {
        session_unset();
        session_destroy();
    }

    function is_logged() : bool
    {
        return true;
    }

    function is_admin() : bool
    {
        return true;
    }

    public function ModifierPoste($Enter_nPoste, $Enter_nomPoste, $Enter_indIP, $Enter_ad,$Enter_typePoste,$Enter_nSalle)
    {
        
    }
}
?>