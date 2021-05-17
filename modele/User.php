<?php

class User 
{
    private $id;
    private $level;
    private $name;
    private $password;
    private $email;



    
    public function __construct($id, $level, $name, $password, $email) {
        $this->id = $id;
        $this->level =  $level;
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
    }
    
    //GET
    public function getId() {
        return $this->id;
    }

    public function getLevel() {
        return $this->level;
    }

    public function getName() {
        return $this->name;
    }
    
    public function getPassword() {
        return $this->password;
    }

    public function getEmail() {
        return $this->email;
    }
    
    //SET
    public function setId($id): void {
        $this->id = $id;
    }

    public function setLevel($level): void {
        $this->level = $level;
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function setEmail($email): void {
        $this->ad = $email;
    }

    public function setPassword($password): void {
        $this->password = $password;
    }

}
?>