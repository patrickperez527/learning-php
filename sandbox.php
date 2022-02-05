<?php 

    // classes part 1

    class User {

        private $name;
        private $email;

        public function __construct($name, $email){
            $this->name = $name;
            $this->email = $email;
        }

        public function login(){
            echo $this->name . ' logged in';
        }

        public function getName(){
            return $this->name;
        }

        public function setName($name){
            if (is_string($name) && strlen($name) > 1) {
                $this->name = $name;
                return "the name has been update to $name";
            } else {
                echo 'not a valid name';
            }
        }
    }


    $userTwo = new User('mario', 'test@yahoo.com');

    // echo $userTwo->getName();
    // echo $userTwo->setName(50);
    echo $userTwo->setName('shaun');
    echo $userTwo->getName();


?>