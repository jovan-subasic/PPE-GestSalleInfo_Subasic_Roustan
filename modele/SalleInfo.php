<?php

class SalleInfo 
{
    private $id;
    private $nSalle;
    private $nomSalle;
    private $nbPoste;
    private $indIP;
    
    public function __construct($id, $nSalle, $nomSalle, $nbPoste, $indIP) {
        $this->id = $id;
        $this->nSalle =  $nSalle;
        $this->nomSalle = $nomSalle;
        $this->nbPoste = $nbPoste;
        $this->indIP = $indIP;

    }
    
    //GET
    public function getId() {
        return $this->id;
    }

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
    public function setId($id): void {
        $this->nSalle = $id;
    }

    public function setNSalle($nSalle): void {
        $this->nSalle = $nSalle;
    }

    public function setNom($nomSalle): void {
        $this->nomSalle = $nomSalle;
    }

    public function setNbPoste($nbPoste): void {
        $this->nbPoste = $nbPoste;
    }

    public function setIndIP($indIP): void {
        $this->indIP = $indIP;
    }

}
?>