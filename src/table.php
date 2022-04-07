<?php
    class Users {
        private $name;
        private $username;
    
        public function __construct($name, $username)
        {
            $this->name = $name;
            $this->username = $username;
            
        }
        public function salut(){
            return "Bienvenue sur notre site " . $this->username;
        }
    }

$user = new Users('Mpoyi', "Cristiant");
print_r($user->salut());