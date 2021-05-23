<?php
class type
{
    private $typeLP;
    private $nomType;
    private $tarif;

    public function __construct($typeLP,$nomType,$tarif)
    {
        $this->typeLP = $typeLP;
        $this->nomType = $nomType;
        $this->tarif = $tarif;

    }
    //GET
    public function gettypeLP(){
        return $this->typeLP;
    }
    public function getnomType(){
        return $this->nomType;
    }
    public function gettarif(){
        return $this->tarif;
    }

}
?>