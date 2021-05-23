<?php

class segment
{
    private $indIP;
    private $nomSegment;
    private $etage;
    private $nbSalle;
    private $nbPoste;

    public function __construct($indIP,$nomSegment,$etage,$nbSalle,$nbPoste){
        $this->indIP = $indIP;
        $this->nomSegment = $nomSegment;
        $this->etage = $etage;
        $this->nbSalle = $nbSalle;
        $this->nbPoste = $nbPoste;

    }
    //GET
    public function getnomSegment(){
        return $this->nomSegment;
    }
    public function getindIP(){
        return $this->indIP;
    }
    public function getetage(){
        return $this->etage;
    }
    public function getnbSalle(){
        return $this->nbSalle;
    }
    public function getnbPoste(){
        return $this->nbPoste;
    }
    //SET
}
?>