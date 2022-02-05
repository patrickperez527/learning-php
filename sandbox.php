<?php 

    // classes part 1

    class User {

        public $name;
        public $email;

        public function __construct($name, $email){
            // $this->name = 'mario';
            // $this->email = 'test@yahoo.com';
            $this->name = $name;
            $this->email = $email;
        }


        public function login(){
            echo $this->name . ' logged in';
        }
    }

    // $userOne = new User();
    // $userOne->login();
    // echo $userOne->name;
    // echo $userOne->email;

    $userTwo = new User('mario', 'test@yahoo.com');
    echo $userTwo->name . '<br/>';
    echo $userTwo->email . '<br/>';
    $userTwo->login();

?>