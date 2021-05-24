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

    function clean_php_session() 
    {
        session_unset();
        session_destroy();
    }

    function is_logged() : bool
    {
        if (isset($_SESSION['pseudo']))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function is_admin() : bool
    {
        if($this->is_logged())
        {
            if (isset($_SESSION['rank']) && $_SESSION['rank'] == 2 )
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }

}
?>