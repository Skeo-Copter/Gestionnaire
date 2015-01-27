<?php
namespace Model;

class User
{
    private $id;
    private $login;
    private $password;
    private $status;
    
    function __construct($id, $login, $password, $status) {
        $this->id = $id;
        $this->login = $login;
        $this->password = $password;
        $this->status = $status;
    }

    public function getId() {
        return $this->id;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setId($id) {
        $this->id = (int) $id;
        return $this;
    }

    public function setLogin($login) {
        $this->login = (string)$login;
        return $this;
    }

    public function setPassword($password) {
        $this->password = (string)$password;
        return $this;
    }

    public function setStatus($status) {
        $this->status = (string) $status;
        return $this;
    }


    
}

