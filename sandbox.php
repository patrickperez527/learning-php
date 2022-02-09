<?php 

    // classes part 1

    class User{

        private $name;
        private $email;

        public function __construct($name, $email){
            $this->name = $name;
            $this->email = $email;
        }

        public function login(){
            echo 'the user logged in';
        }

        public function getName(){
            return $this->name;
        }

        public function setName($name){
            $this->name = $name;
            if (is_string($name) && strlen($name) > 1) {
                echo "the name has been changed to $name";
            } else {
                echo 'that is not a valid name';
            }
        }
    }

    $userOne = new User('mario', 'test@yahoo.com');
    // $userOne->login();
    // echo $userOne->name;
    // echo $userOne->getName();
    echo $userOne->setName('kobe');
    echo $userOne->getName();
    
?>