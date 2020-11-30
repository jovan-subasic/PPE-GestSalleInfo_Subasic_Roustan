<?php

class SalleInfo 
{
    private $nSalle;
    private $nomSalle;
    private $nbPoste;
    private $indIP;
    
    public function __construct($nSalle, $nomSalle, $nbPoste, $indIP) {
        $this->nSalle =  $nSalle;
        $this->nomSalle = $nomSalle;
        $this->nbPoste = $nbPoste;
        $this->indIP = $indIP;

    }
    
    //GET
    public function getNSalle() {
        return $this->nSalle;
    }

    public function getNomSalle() {
        return $this->nomSalle;
    }

    public function getNbPoste() {
        return $this->nbPoste;
    }
    
    public function getIndIP() {
        return $this->indIP;
    }
    
    
    
    //SET
    public function setId($nSalle): void {
        $this->nSalle = $nSalle;
    }

    public function setNom($nomSalle): void {
        $this->nomSalle = $nomSalle;
    }

    public function setId($nbPoste): void {
        $this->nbPoste = $nbPoste;
    }

    public function setId($indIP): void {
        $this->indIP = $indIP;
    }

}
?>