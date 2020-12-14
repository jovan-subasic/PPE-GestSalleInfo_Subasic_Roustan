<?php

class SalleInfo 
{
    private $id;
    private $nSalle;
    private $nomSalle;
    private $nbPoste;
    private $indIP;
    private $room_name;
    private $sort_key;
    private $description;
    private $capacity;
    
    public function __construct($id, $nSalle, $nomSalle, $nbPoste, $indIP, $room_name, $sort_key, $description, $capacity) {
        $this->id = $id;
        $this->nSalle =  $nSalle;
        $this->nomSalle = $nomSalle;
        $this->nbPoste = $nbPoste;
        $this->indIP = $indIP;
        $this->room_name = $room_name;
        $this->sort_key = $sort_key;
        $this->description = $description;
        $this->capacity = $capacity;

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

    public function getRoom_name() {
        return $this->room_name;
    }
    
    public function getSort_key() {
        return $this->sort_key;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getCapacity() {
        return $this->capacity;
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

    public function setRoom_name($room_name): void {
        $this->nbPoste = $room_name;
    }

    public function setSort_key($sort_key): void {
        $this->nbPoste = $sort_key;
    }

    public function setDescription($description): void {
        $this->nbPoste = $description;
    }

    public function setCapacity($capacity): void {
        $this->nbPoste = $capacity;
    }

}
?>