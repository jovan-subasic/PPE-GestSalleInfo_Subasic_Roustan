<?php

class Poste 
{
    private $nPoste;
    private $nomPoste;
    private $indIP;
    private $ad;
    private $typePoste;
    private $nSalle;
    private $nbLog;


    
    public function __construct($nPoste, $nomPoste, $indIP, $ad, $typePoste, $nSalle, $nbLog) {
        $this->nPoste = $nPoste;
        $this->nomPoste =  $nomPoste;
        $this->indIP = $indIP;
        $this->ad = $ad;
        $this->typePoste = $typePoste;
        $this->nSalle = $nSalle;
        $this->nbLog = $nbLog;

    }
    
    //GET
    public function getNPoste() {
        return $this->nPoste;
    }

    public function getNomPoste() {
        return $this->nomPoste;
    }

    public function getindIPoste() {
        return $this->indIP;
    }

    public function getAd() {
        return $this->ad;
    }
    
    public function getTypePoste() {
        return $this->typePoste;
    }

    public function getNSallePoste() {
        return $this->nSalle;
    }
    
    public function getNbLog() {
        return $this->nbLog;
    }
    
    
    //SET
    public function setNPoste($nPoste): void {
        $this->nPoste = $nPoste;
    }

    public function setNomPoste($nomPoste): void {
        $this->nomPoste = $nomPoste;
    }

    public function setIndIPoste($indIP): void {
        $this->indIP = $indIP;
    }

    public function setAd($ad): void {
        $this->ad = $ad;
    }

    public function setTypePoste($typePoste): void {
        $this->typePoste = $typePoste;
    }

    public function setNSallePoste($nSalle): void {
        $this->nSalle = $nSalle;
    }

    public function setNbLog($nbLog): void {
        $this->nbLog = $nbLog;
    }

}
?>